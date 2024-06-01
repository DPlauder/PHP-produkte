<?php
require_once __DIR__ . '/../inc/all.php';

$product_caller = new ProductCaller($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (!empty($_POST['product'])) {
        $productName = $_POST['product'];
        $fileName = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : null;
        $fileTmpName = !empty($_FILES['image']['tmp_name']) ? $_FILES['image']['tmp_name'] : null;
        $altText = !empty($_POST['alt']) ? $_POST['alt'] : null;



        if ($fileName && $fileTmpName) {
            $targetDir = __DIR__ . '/../uploads/img/';
            $targetFile = $targetDir . $fileName;
            if (!move_uploaded_file($fileTmpName, $targetFile)) {
                echo "Failed to upload image.";
                $fileName = null;
            }
        }
        $product_caller->handleUpload($productName, $fileName, $altText);
    }
    renderAdmin(__DIR__ . '/views/admin.view.php', [
        'products' => $product_caller->fetchALl()
    ]);
}