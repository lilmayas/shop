<?php

function view($fileName, $data = []) {
    $output = '';
    ob_start();
    extract($data);
    include __DIR__ . "/../views/{$fileName}.php";
    $output = ob_get_contents();
    ob_clean();
    return $output;
}

function renderView($fileName, $data = []) {
    echo view($fileName, $data);
}


function old($name) {
    return $_REQUEST[$name] ?? null;
}

function redirect($to) {
    header("Location: $to");
}

function setSuccessMessage($message) {
    $_SESSION['success_message'] = $message;
}

function getSuccessMessage() {
    $output = $_SESSION['success_message'] ?? null;
    unset($_SESSION['success_message']);
    return $output;
}

function hasSuccessMessage() {
    return (bool)$_SESSION['success_message'] ?? false;
}
