<?php

function render($content, $template, array $data = []) //array data pega o valor de page em routes.php
{
    $content = __DIR__ . '/../templates/' . $content . '.tpl.php';

    return include __DIR__ . '/../templates/' . $template . '.tpl.php';
};