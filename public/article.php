<?php
require '../src/bootstrap.php';

$art_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if(! $art_id){
    include APP_ROOT . '/public/page_not_found.php';
}
$article = $cms->getArticle()->fetch($art_id)[0];
if(! $article ){
    include APP_ROOT . '/public/page_not_found.php';
}

$data['article'] = $article;
$data['title'] = $article['title'];
$data['description'] = $article['summary'];
$data['section'] = $article['category_id'];
$data['navigation'] = $cms->getCategory()->fetchNavigation();



echo $twig->render('article.html', $data);
