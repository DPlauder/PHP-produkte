<?php
require_once 'Product.php';
require_once 'Image.php';

class ProductCaller{
    private PDO $pdo; 
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function fetchAll(): array {
        $stmt = $this->pdo->prepare('
            SELECT 
                products.id AS product_id, products.name AS product_name, products.upvotes, products.downvotes, 
                images.id AS image_id, images.file_name, images.alt 
            FROM 
                products 
            LEFT JOIN 
                images 
            ON 
                products.image = images.id 
            ORDER BY 
                products.id
        ');
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $products = [];
        
        foreach ($rows as $row) {
            $product = new Product();
            $product->id = $row['product_id'];
            $product->name = $row['product_name'];
            $product->upvotes = $row['upvotes'];
            $product->downvotes = $row['downvotes'];
            
            if (!empty($row['image_id'])) {
                $image = new Image();
                $image->id = $row['image_id'];
                $image->file_name = $row['file_name'];
                $image->alt = $row['alt'];
                $product->image = $image;
            }           
            $products[] = $product;
        }       
        return $products;
    }
    public function handleUpload(string $name, ?string $filename = null, ?string $alt = null, int $upvotes = 0, int $downvotes = 0): void{
        $stmt = $this->pdo->prepare('INSERT INTO products(name, upvotes, downvotes) VALUES (:name, :upvotes, :downvotes)');
        $stmt->execute([
            'name' => $name,
            'upvotes' => $upvotes,
            'downvotes' =>$downvotes
        ]);
        $productId = $this->pdo->lastInsertId();
        if($filename){
            $stmt = $this->pdo->prepare('INSERT INTO images (file_name, alt) VALUES (:file_name, :alt)');
            $stmt->execute([
                'file_name' => $filename,
                'alt' => $alt
            ]);
        $imageId = $this->pdo->lastInsertId();
        $stmt = $this->pdo->prepare('UPDATE products SET image = :image_id WHERE id = :id');
            $stmt->execute([
                'image_id' => $imageId,
                'id' => $productId
            ]);
        }      
    }
    public function fetchProductById(string $id) {
        $stmt = $this->pdo->prepare('
        SELECT 
            products.id AS product_id, products.name AS product_name, products.upvotes, products.downvotes, 
            images.id AS image_id, images.file_name, images.alt 
        FROM 
            products 
        LEFT JOIN 
            images 
        ON 
            products.image = images.id 
        WHERE 
            products.id = :id
    ');
        
        if (!$stmt) {
            return false;
        }    
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row) {
            $product = new Product();
            $product->id = $row['product_id'];
            $product->name = $row['product_name'];
            $product->upvotes = $row['upvotes'];
            $product->downvotes = $row['downvotes'];
    
            if (!empty($row['image_id'])) {
                $image = new Image();
                $image->id = $row['image_id'];
                $image->file_name = $row['file_name'];
                $image->alt = $row['alt'];
                $product->image = $image;
            } else {
                $product->image = null;
            }
            
            return $product;
        }
        
        return null;
    }
    public function deleteProduct(string $id){
        $stmt = $this->pdo->prepare('SELECT image FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $imageId = $stmt->fetchColumn();

        $stmt = $this->pdo->prepare('DELETE FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);

        if ($imageId) {
            $stmt = $this->pdo->prepare('DELETE FROM images WHERE id = :imageId');
            $stmt->execute(['imageId' => $imageId]);
        }
    }
    public function updateProduct(string $id, $name): void {
        $stmt = $this->pdo->prepare('UPDATE products SET name = :name WHERE id = :id');
        $stmt->execute(([
            'id' => $id,
            'name' => $name
        ]));
    }

}