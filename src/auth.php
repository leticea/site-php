<?php

function get_user()
{
    return $_SESSION['auth'] ?? null;
};

function auth_protection()
{
    $user = get_user();
}