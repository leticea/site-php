<?php

include __DIR__ . '/database.php';

if (resolve('/admin/users')) {

    render('admin/users/index', 'admin');

} else if (resolve('/admin/users/create')) {

    render('admin/users/create', 'admin');

} else if (resolve('/admin/users/(\d+)')) {

    render('admin/users/view', 'admin');

} else if (resolve('/admin/users/(\d+)/edit')) {

    render('admin/users/edit', 'admin');

} else if (resolve('/admin/users/(\d+)/delete')) {

    render('admin/users/delete', 'admin');
}