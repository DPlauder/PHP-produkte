<?php

const DEV_MODE = true;
const DOC_ROOT = '/public/';
const ROOT_FOLDER = '/public/';

$type = 'mysql';
$host = 'localhost';
$port = '';
$dbname = 'cms_edvgraz';
$user_name = 'cms_edvgraz';
$password = '';
$dsn = "$type:host=$host;dbname=$dbname";

const MEDIA_TYPES = ['image/jpeg', 'image/png'];
const FILE_EXTENSIONS = ['jpg', 'jpeg', 'png'];
const MAX_FILE_SIZE = 1024 * 1024 * 2;
define("UPLOAD_DIR", dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR . '/uploads/');

$mail_config = [
    'host' => 'mail.gmx.net',
    'port' => 465,
    'username' => 'edv.plauder@gmx.at',
    'password' => 'edvPlauder2109',
    'sec' => 'ssl',
    'admin_mail' => 'edv.plauder@gmx.at',
    'debug' => (DEV_MODE ? 2 : 0)
];