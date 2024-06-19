<?php
require '../../src/bootstrap.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? null;
$errors = [
    'issue' => '',
    'content' => ''
];
if($id){
    $article = $cms->getArticle()->fetch($id)[0];
    if(! $article){
        redirect('articles.php', ['error' => 'article not found']);
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    if($article['image_id'] !== null){
        $image_id = $article['image_id'];
        
        $article['image_id'] = null;
        $cms->getArticle()->update($article);
        
        $cms->getImage()->delete($image_id);
        unlink(UPLOAD_DIR .  $article['image_file']);
    }
    $cms->getArticle()->delete($id);

    redirect('articles.php', ['success' => 'Article successfully deleted']);
}

$data['article'] = $article;
$data['errors'] = $errors;

echo $twig->render('admin/article-delete.html', $data);
