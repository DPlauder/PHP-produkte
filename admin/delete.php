<?php
require_once __DIR__ . '/../inc/all.php';
$product_caller = new ProductCaller($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'] ?? null;
    if($id){
        $product_caller->deleteProduct($id);
    }
    else {
        $delete_error = 'Es gab einen Fehler beim Löschen';
    }
    renderAdmin(__DIR__ . '/views/admin.view.php', [
        'products' => $product_caller->fetchAll()
    ]);
} 