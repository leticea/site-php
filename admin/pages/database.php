<?php

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