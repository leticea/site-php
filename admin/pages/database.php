<?php

$pages_all = function() 
{
    // [busca todas as páginas]
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