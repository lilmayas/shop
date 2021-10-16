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

function uploadFiles($fieldName, $baseDir = null)
{
    if (!empty($_FILES[$fieldName])) {
        $files = reArrayFiles($_FILES[$fieldName]);
        foreach ($files as $file) {
            $fileName = '';
            if ($baseDir) {
                $fileName .= $baseDir . '/';
            }
            $fileName .= time() . '_' . mt_rand() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
            $path = __DIR__ . "/../storage/{$fileName}";
            move_uploaded_file($file['tmp_name'], $path);
        }
    }
}

function reArrayFiles($file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function fileUrl($fileName, $baseDir = null)
{
    return "/storage/{$baseDir}/{$fileName}";
}

function dump(...$args)
{
    echo '<pre>' . var_export($args, true) . '</pre>';
}



