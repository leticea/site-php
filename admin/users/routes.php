<?php

include __DIR__ . '/database.php';

if (resolve('/admin/users')) {

    render('admin/users/index', 'admin');

} else if (resolve('/admin/users/create')) {

    render('admin/users/create', 'admin');
}