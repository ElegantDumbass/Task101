<?php

function emptyInputSignup($name, $email, $username, $pwd, $repwd) {
    global $result;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($repwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}