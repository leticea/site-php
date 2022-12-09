<?php

if (resolve('/admin')) {

    render('admin/home', 'admin');

} elseif (resolve('/admin/pages.*')) {

    include __DIR__ . '/pages/routes.php';

} elseif (resolve('/admin/users.*')) {

    include __DIR__ . '/users/routes.php';

} elseif (resolve('/admin/upload/image')) {

    $file = $_FILES['file'] ?? null;
    
    if (!$file) {

        http_response_code(422);
        echo json_encode(['status' => 'nenhum arquivo enviado']);
        exit;
    }

    $allowedTypes = [
        'image/gif',
        'image/jpg',
        'image/jpeg',
        'image/png',
    ];

    if (!in_array($file['type'], $allowedTypes)) {

        http_response_code(422);
        echo json_encode(['status' => 'arquivo não permitido']);
        exit;
    }

    $name = uniqid(rand(), true) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);

} else {

    http_response_code(404);
    echo 'Not found';
}

// [. = vai casar com qualquer caractere];
// [* = 0 ou mais caracteres];
// [é uma boa prática inserir os tipos das imagens para que não haja tentativa de fraude no sistema];
// [uniqid = pega um valor único no php baseado num valor randômico];