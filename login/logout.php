<?php
require_once __DIR__ . '/../inc/all.php';

$login->logout();
renderLogin(__DIR__. '/views/login.view.php');