<?php
require '../src/bootstrap.php';

$user_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if(! $user_id){
    include 'page_not_found.php';
}
$data['user'] = $cms->getUser()->fetch($user_id)[0];
if(!$data['user']){
    include 'page_not_found.php';
}

$data['articles'] = $cms->getArticle()->fetchAllbyUser($user_id);

$sql            = "SELECT id, name FROM category WHERE navigation = 1";
$data['navigation']     = $cms->getCategory()->fetchNavigation();
$data['title']          = $data['user']['forename'] . ' ' . $data['user']['surname'] . ' - IT-News';
$data['description']    = $data['title'];
$data['section']        = '';

echo $twig->render('user.html', $data);