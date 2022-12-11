<?php

require __DIR__ . '/../admin/pages/database.php';

if (resolve('/')) {

    render('site/home', 'site');

} elseif (resolve('/contact')) {

    render('site/contact', 'site');

} elseif (resolve('/(.*)')) {

    $pages = $pages_all();
    render('site/contact', 'site', compact('pages'));
}
