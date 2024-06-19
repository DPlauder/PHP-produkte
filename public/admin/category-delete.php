<?php
require '../../src/bootstrap.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? null;
$errors = [
    'issue' => '',
    'content' => ''
];
$category = '';

if($id){  
    $category = $cms->getCategory()->fetch($id);
    if(! $category){
        redirect('categories.php', ['error' => 'category not found']);
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $categoryId = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $articleCount = $cms->getArticle()->countArticlesInCategory($categoryId);
    if ($articleCount > 0) {
        $errors['content'] = 'Category ' . $category['name'] . ' cannot be removed, there are articles in the category.';
    } else {
        $cms->getCategory()->delete($categoryId);
        redirect('categories.php', ['success' => 'Category successfully deleted']);
    }

}

$data['category'] = $category;
$data['errors'] = $errors;

echo $twig->render('admin/category-delete.html', $data);


