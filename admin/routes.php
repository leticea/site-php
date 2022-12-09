<?php

if (resolve('/admin')) {

    render('admin/home', 'admin');

} elseif (resolve('/admin/pages.*')) {

    include __DIR__ . '/pages/routes.php';

} elseif (resolve('/admin/upload/image')) {

    $file = $_FILES['file'] ?? null;
    
    if (!$file) {
        echo json_encode(['status' => 'nenhum arquivo enviado']);
    }

} else {

    http_response_code(404);
    echo 'Not found';
}

// [. = vai casar com qualquer caractere]
// [* = 0 ou mais caracteres]