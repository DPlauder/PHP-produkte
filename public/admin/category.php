<?php
require '../../src/bootstrap.php';

use EdvGraz\Validation\Validate;

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? null;
$errors = [
    'issue' => '',
    'name' => '',
    'description' => ''
];
$category = [
    'id' => '',
    'name' => '',
    'description' => '',
    'navigation' => false
];
if($id){
    $category = $cms->getCategory()->fetch($id);
    if(! $category){
        redirect('categories.php', ['error' => 'category not found']);
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $category['name'] = filter_input(INPUT_POST, 'name');
    $category['description'] = filter_input(INPUT_POST, 'description');
    $category['navigation'] = filter_input(INPUT_POST, 'navigation', FILTER_VALIDATE_BOOLEAN);
    
    $errors['name'] = Validate::is_text($category['name'], 1, 50) && (! empty($category['name'])) ? '' : 'Name must be between 1 and 50 characters';
    $errors['description'] = Validate::is_text($category['description'], 1, 256) && (! empty($category['description'])) ? '' : 'Description must be between 1 and 256 characters';
    $problems = implode($errors);

    if(! $problems){
        $bindings = [
            'name' => $category['name'],
            'description' => $category['description'],
            'navigation' => $category['navigation']
        ];
        try{
            if($id){
                $bindings['id'] = $id;
                $cms->getCategory()->update($bindings);
                redirect('categories.php', ['succes' => 'category successfully saved']);
            }
            else{
                $cms->getCategory()->push($bindings);
                redirect('categories.php', ['success' => 'category successfully saved'] );
            }
        }
        catch(PDOException $e){
                $errors['issue'] = 'Name already in use';
            }
        
    }
    else{
        $errors['issue'] = 'Please correct the following issues ' . $problems;
    }

}
$data['category'] = $category;
$data['errors'] = $errors;
echo $twig->render('admin/category.html', $data);