<?php

 if (resolve('/admin/pages')) {
    render('admin/pages/index', 'admin');

} elseif (resolve('/admin/pages/create')) {
    render('admin/pages/create', 'admin'); 

} elseif (resolve('/admin/pages/(\d)+')) {
    render('admin/pages/view', 'admin');  

} elseif (resolve('/admin/pages/(\d)+/edit')) {
    render('admin/pages/edit', 'admin'); 

} elseif (resolve('/admin/pages/(\d)+/delete')) {
    header('location: /admin/pages');
}