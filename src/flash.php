<?php

function flash($message = null, $type = null)
{
    if ($message) {
        // [guarda a mensagem]
        $_SESSION['flash'][]= compact('message', 'type');

    } else {
        // [mostra a mensagem]
    }
}