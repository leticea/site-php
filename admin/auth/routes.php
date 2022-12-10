<?php

require __DIR__ . '/database.php';

if (resolve('/admin/auth/login')) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ($login()) {
            flash('Autenticado com sucesso');
            return header('location: /admin');
        }
    }

    render('admin/auth/login', 'admin/login');
}