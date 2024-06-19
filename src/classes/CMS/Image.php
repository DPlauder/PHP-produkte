<?php

namespace EdvGraz\CMS;

class Image{
    protected Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function fetch(int $id): array {
        $sql = "SELECT * FROM images WHERE id = :id";
        return $this->db->sql_execute($sql, ['id' => $id])->fetch();
    }

    public function fetchAll(): array {
        $sql = "SELECT * FROM images";
        return $this->db->sql_execute($sql)->fetchAll();
    }

    public function delete(int $id) : bool{
        try{
            $sql = "DELETE FROM images WHERE id = :id";
            $this->db->sql_execute($sql, ['id' => $id]);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }
    public function push(array $data): int {
        try{
            $sql = "INSERT INTO images(filename, alttext) VALUES (:filename, :alttext)";
            $this->db->sql_execute($sql, ['filename' => $data['image_file'], 'alttext' => $data['image_alt']]);

            return $this->db->lastInsertId();
        }
        catch(PDOException $e){
            return -1;
        }
    }
    public function update (array $data) : bool{
        try{
            $sql = "UPDATE images SET filename = :filename, alttext = :alttext, WHERE id = :id;";
            $this->db->sql_execute($sql, $data);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }
}