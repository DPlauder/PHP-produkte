<?php
require_once __DIR__ . '/inc/all.php';
$prodcuts = new ProductCaller($pdo);
render(__DIR__ . '/views/index.view.php', ['products' => $prodcuts->fetchAll()]);
