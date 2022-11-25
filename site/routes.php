<?php

if (resolve('/')) {
    render('site/home', 'site');

} elseif (resolve('/contact')) {
    render('site/contact', 'site');

} else {
    http_response_code(404);
    echo 'Not found';
}
