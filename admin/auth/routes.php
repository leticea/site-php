<?php

if (resolve('/admin/auth/login')) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    }
    
    render('admin/auth/login', 'admin/login');
}