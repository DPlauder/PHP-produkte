<?php
require '../src/bootstrap.php';

$search_term    = filter_input(INPUT_GET, 'search');
$per_page       = filter_input(INPUT_GET, 'per_page', FILTER_VALIDATE_INT) ?? 3;
$offset         = filter_input(INPUT_GET, 'offset', FILTER_VALIDATE_INT) ?? 0;
$articles       = [];
$count          = 0;
$total_pages    = 0;
$current_page   = 0;

$data['navigation']     = $cms->getCategory()->fetchNavigation();
$data['section']        = '';
$data['title']          = 'Search Results for ' . $search_term;
$data['description']    = 'Search Results ' . $search_term . ' the IT-News-Blog';

if(! empty($search_term)){
    $count = $cms->getArticle()->getSearchCount($search_term);
    if($count > 0){          
        $articles = $cms->getArticle()->search($search_term,$per_page,$offset);
    }
}

if($count > $per_page){
    $total_pages = ceil($count/$per_page);
    $current_page = ceil($offset/$per_page) + 1;
    
}

$data['search_term']    = $search_term;
$data['articles']       = $articles;
$data['count']          = $count;
$data['per_page']       = $per_page;
$data['total_pages']    = $total_pages;
$data['current_page']   = $current_page;
$data['offset']         = $offset;


echo $twig->render('search.html', $data);

