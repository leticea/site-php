<?php

$login = function() use ($conn) {

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if (is_null($email) or is_null($password)) {
        return false;
    }

    $sql = 'SELECT * FROM users WHERE email=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);

    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch->assoc();

    if (!$user) {
        return false;
    }

    
};