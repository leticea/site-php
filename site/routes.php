<?php

require __DIR__ . '/../admin/pages/database.php';

if (resolve('/contact')) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $from = filter_input(INPUT_POST, 'from');
        $subject = filter_input(INPUT_POST, 'subject');
        $message = filter_input(INPUT_POST, 'message');
        $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        if (mail('seuEmail', $subject, $message, $headers)) {

            flash('Email enviado com sucesso');

        } else {

            flash('Algo deu errado e o email não foi enviado, tente ligar para nós', 'error');
        }
        return header('location: /contact');
    }

    $pages = $pages_all();
    render('site/contact', 'site', compact('pages'));

} elseif ($params = resolve('/(.*)')) {

    $pages = $pages_all();

    foreach ($pages as $page) {
        if ($page['url'] == $params[1]) {
            break;
        }
    }
    render('site/page', 'site', compact('pages', 'page'));
}
