<?php

require '../src/bootstrap.php';

$data['articles'] = $cms->getArticle()->fetchAll(null, true, null, 6);
$data['navigation'] = $cms->getCategory()->fetchNavigation();

$data['title'] = 'IT-News';
$data['description'] = 'All about IT and New from Software Developments and Hardware';
$date['section'] = '';

echo $twig->render('index.html', $data);