<?php

function e($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
function render($path, array $data = []) :void {
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();
    require __DIR__ . '/../views/layouts/main.view.php';
}

function renderLogin($path, array $data = []) : void {
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();
    require __DIR__ . '/../login/views/layouts/main.view.php';
}
function renderAdmin($path, array $data = []) : void {
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();
    require __DIR__ . '/../admin/views/layouts/main.view.php';
}