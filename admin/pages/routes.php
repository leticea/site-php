<?php

include __DIR__ . '/database.php';

 if (resolve('/admin/pages')) {

    $pages = $pages_all();
    render('admin/pages/index', 'admin', ['pages' => $pages]);

} elseif (resolve('/admin/pages/create')) {

    if ($_SERVER['REQUEST METHOD'] === 'POST') {
        $pages_create();
        header('location: /admin/pages');
    }
    render('admin/pages/create', 'admin'); 

} elseif (resolve('/admin/pages/(\d)+')) {

    $page = $pages_one();
    render('admin/pages/view', 'admin', ['page' => $page]);  

} elseif (resolve('/admin/pages/(\d)+/edit')) {

    if ($_SERVER['REQUEST METHOD'] === 'POST') {
        $pages_edit();
        header('location: /admin/pages');
    }
    render('admin/pages/edit', 'admin'); 

} elseif (resolve('/admin/pages/(\d)+/delete')) {

    if ($_SERVER['REQUEST METHOD'] === 'POST') {
        $pages_delete();
        header('location: /admin/pages');
    }
    header('location: /admin/pages');
}