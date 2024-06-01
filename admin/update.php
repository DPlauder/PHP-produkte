<?php
require_once __DIR__ . '/../inc/all.php';
$product_caller = new ProductCaller($pdo);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    if(empty($name)){
        $name = $product->name;
    }
    if(!isset($error)){
        $update_success = $product_caller->updateProduct($id, $name);
        renderAdmin(__DIR__ . '/views/admin.view.php', [
            'products' => $product_caller->fetchAll()
        ]);

    }
}
