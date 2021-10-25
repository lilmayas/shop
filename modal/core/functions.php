<?php

function view($filename, $data = [])
{
    $output = '';
    ob_start();

    extract($data);

    include __DIR__ . "/../views/{$filename}.php";

    $output = ob_get_contents();

    ob_clean();

    return $output;
}

function renderView($fileName, $data = [])
{
    echo view($fileName, $data);
}

function old($name) {
    return $_REQUEST[$name] ?? null;
}

function redirect($to)
{
    header("Location: {$to}");
}

function setSuccessMessage($message)
{
    $_SESSION['success_message'] = $message;
}

function getSuccessMessage()
{
    $output = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
    return $output;
}

function hasSuccessMessage()
{
    return ($_SESSION['success_message'] ?? false);
}

function multipleArray()
{
    return [
        ['name' => 'n1', 'articul' => 'a1'],
        ['name' => 'n2', 'articul' => 'a2'],
        ['name' => 'n3', 'articul' => 'a3'],
    ];
}

function saveProduct($product)
{
    $products = getProducts();
    if (is_array($products)) {
        array_push($products, $product);
    } else {
        $products[] = $product;
    }

    $fileName = __DIR__ . '/../database/products.txt';

    if (file_exists($fileName)) {
        unlink($fileName);
    }
    
    file_put_contents($fileName, json_encode($products));
}

function getProducts()
{
    return json_decode(
        file_get_contents(__DIR__ . '/../database/products.txt'), 
        true
    );
}