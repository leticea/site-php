<?php

require __DIR__ . '/../admin/pages/database.php';

if (resolve('/')) {

    $pages = $pages_all();
    render('site/home', 'site', compact('pages'));

} elseif (resolve('/contact')) {

    $pages = $pages_all();
    render('site/contact', 'site', compact('pages'));

} elseif (resolve('/(.*)')) {

    $pages = $pages_all();
    render('site/contact', 'site', compact('pages'));
}
