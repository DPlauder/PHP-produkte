<?php

namespace EdvGraz\CMS;

use PDOException;
use PDO;

class Article{
    protected Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function fetch(int $id, bool $published = true):array{
        $sql = "SELECT a.id, a.title, a.summary, a.content, a.created, a.category_id, a.user_id, a.published, c.name as category,
                CONCAT(u.forename, ' ', u.surname) as author,
                i.id as image_id, i.filename as image_file, i.alttext as image_alt
                FROM articles as a
                JOIN category as c ON a.category_id = c.id
                JOIN user as u ON a.user_id = u.id
                LEFT JOIN images as i ON a.images_id = i.id
                WHERE a.id = :id;";
        if($published){
            $sql .= " AND a.published = 1";
        }
        $sql .= ";";

        return $this->db->sql_execute($sql,['id' => $id])->fetchAll();
    }
    public function fetchAll(int $cat_id = null, bool $published = true, int $user_id = null, int $limit = 1000): array {
        $sql = "SELECT a.id, a.title, a.summary, a.category_id, a.user_id, a.published,a.created, c.name AS category,
                CONCAT(u.forename, ' ', u.surname) as author,
                i.filename as image_file, i.alttext as image_alt
                FROM articles as a
                JOIN category as c ON a.category_id = c.id
                JOIN user as u ON a.user_id = u.id
                LEFT JOIN images as i ON a.images_id = i.id
                WHERE (a.category_id = :cat_id OR :cat_id IS NULL)
                AND (a.user_id = :user_id OR :user_id IS NULL)";
        if($published){
            $sql .= "AND a.published = 1";
        }
        $sql .= " ORDER BY a.id DESC LIMIT :limit;";
        return $this->db->sql_execute($sql, ['cat_id' => $cat_id, 'user_id' => $user_id, 'limit' => $limit])->fetchAll();
    }
    public function fetchAllbyUser(int $user_id): array {
        $sql = "SELECT a.id, a.title, a.summary, a.category_id, a.user_id, 
                       c.name as category, 
                       CONCAT(u.forename, ' ', u.surname) as author, 
                       i.filename as image_file, i.alttext as image_alt
                FROM articles as a
                JOIN category as c ON a.category_id = c.id
                JOIN user as u ON a.user_id = u.id
                LEFT JOIN images as i ON a.images_id = i.id
                WHERE a.user_id = :user_id
                ORDER BY a.id DESC";
        return $this->db->sql_execute($sql, ['user_id' => $user_id])->fetchAll();
    }

    public function countArticlesInCategory(int $cat_id): int{
        $sql = "SELECT COUNT(*) as count FROM articles WHERE category_id = :category_id";
        return $this->db->sql_execute($sql, ['category_id' => $cat_id])->fetch(PDO::FETCH_COLUMN);
    }

    public function delete(int $id): bool {    
        $article = $this->fetch($id);
        try{
            $sql = "DELETE FROM articles WHERE id = :id";
            $this->db->sql_execute($sql, ['id' => $id]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }
    public function push(array $data):bool {
        try{
            $sql = "INSERT INTO articles (title, summary, content, category_id, user_id, published, images_id)
                    VALUES (:title, :summary, :content, :category_id, :user_id, :published, :images_id)";
            $this->db->sql_execute($sql, [
                'title' => $data['title'],
                'summary' => $data['summary'],
                'content' => $data['content'],
                'category_id' => $data['category_id'],
                'user_id' => $data['user_id'],
                'published' => $data['published'],
                'images_id' => $data['images_id'] ?? null
            ]);
            return true;
        }
        catch(PDOException $e){
            return false;

        }
    }
    public function update(array $data) : bool{
        try{
            $sql = "UPDATE articles SET title = :title, summary = :summary, content = :content, published = :published, category_id = :category_id, user_id = :user_id, images_id = :image_id WHERE id = :id;";
            $this->db->sql_execute($sql, [
                'title' => $data['title'],
                'summary' => $data['summary'],
                'content' => $data['content'],
                'category_id' => $data['category_id'],
                'user_id' => $data['user_id'],
                'published' => $data['published'],
                'image_id' => $data['image_id'],
                'id' => $data['id'] 
            ]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }

    public function getSearchCount(string $search_term): int{
        $sql = "SELECT COUNT(*) FROM articles
                WHERE published = 1 AND (title LIKE :search OR summary LIKE :search OR content LIKE :search)";
        return $this->db->sql_execute($sql, [ 'search' => "%$search_term%" ] )->fetch(PDO::FETCH_COLUMN);
    }
    public function search(string $search_term, int $per_page, int $offset){
        $sql = "SELECT a.id, a.title, a.summary, a.category_id, a.user_id, c.name AS category,
                CONCAT(u.forename, ' ', u.surname) AS author,
                i.filename AS image_file,
                i.alttext AS image_alt
                FROM articles AS a
                JOIN cms_edvgraz.category c on a.category_id = c.id
                JOIN user as u on a.user_id = u.id
                LEFT JOIN images as i on a.images_id = i.id
                WHERE a.published = 1 AND (a.title LIKE :search OR a.summary LIKE :search OR a.content LIKE :search)
                ORDER BY a.id DESC
                LIMIT :per_page
                OFFSET :offset";
        $bindings = [
            'search' => "%$search_term%",
            'per_page' => (int) $per_page,
            'offset' =>  (int) $offset
        ];
        return $this->db->sql_execute($sql, $bindings )->fetchAll(PDO::FETCH_ASSOC);
    }
}