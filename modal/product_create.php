<?php
include_once __DIR__ . '/core/bootstrap.php';
$errors = [];


if(empty($_POST['name'])){
    $errors[] = 'Title is empty';
}else if(strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10 ){
    $errors[] = 'Name must be beetwen 3 and 10';
}

if ($errors){
    renderView('product_form', ['errors' => $errors]);
} else {
    saveProduct([
        'name' => strip_tags($_POST['name']),
        'articul' => strip_tags($_POST['articul']),
        'description' => strip_tags($_POST['description'])
    ]);

    setSuccessMessage('Product successed inserted');
    redirect('product_table.php');
}