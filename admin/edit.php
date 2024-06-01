<?php
require_once __DIR__ . '/../inc/all.php';
$product_caller = new ProductCaller($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    if($id){
        $product = $product_caller->fetchProductById($id);
    }
    require 'views/edit.view.php';
}
else {
    $edit_error = 'Es gab einen Fehler beim Bearbeiten';
}

    
