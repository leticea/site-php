<?php

function pages_get_data($redirectOnError)
{
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if (is_null($title) or is_null($url)) {

        flash('Informe os campos de título e url', 'error');
        header('location: ' . $redirectOnError);
        die();
    }

    return compact('title', 'body', 'url');
}

$pages_all = function() use ($conn) 
{
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id) 
{
    // [busca uma única página]
};

$pages_create = function() 
{
    $data = pages_get_data('/admin/pages/create');

    $sql = 'INSERT INTO pages (title, body, url, updated, created) VALUES (?, ?, ?, NOW(), NOW())';

    // [cria a página]
    flash('Registrado com sucesso', 'success');
};

$pages_edit = function($id) 
{
    // [atualiza a página]
    flash('Atualizado com sucesso', 'success');
};

$pages_delete = function($id) 
{
    // [remove a página]
    flash('Removido com sucesso', 'success');
};