<?php

class ProductsController
{
    public function index()
    {
        $product = new ProductModel;
        return renderView('products_table', ['products' => $product->all()]);
    }

    public function show()
    {
        return renderView('products_form');
    }

    public function create()
    {
        $errors = [];
        $product = new ProductModel;
        $product->name = $_POST['name'];
        $product->articul = $_POST['articul']; 
        $image = null;
        if(!empty($_FILES['image'])) {
            if($_FILES['image']['size'] > 100000) {
                $errors[] = 'Incorrect size.';
            }
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if($extension != 'png' && $extension != 'jpg') {
                $errors[] = 'Incorrect extension.';
            }
            if(count($errors)) {
                renderView('products_form', ['errors' => $errors]);
                return;
            }
            $timestamp = (new DateTime())->getTimestamp();
            $image = "{$timestamp}.{$extension}";
            $uploadDir = __DIR__ . '/../storage/';
            $filePath = $uploadDir . $image;
            move_uploaded_file($_FILES['image']['tmp_name'], $filePath);
        }
        $product->image = $image;
        $product->save();
        redirect('/products');
    }

    public function delete()
    {
        $product = new ProductModel;
        $model = $product->all()[intval($_POST['id'])];
        $product->name = $model['name'];
        $product->articul = $model['articul'];
        $product->image = $model['image'];
        $product->delete();

        redirect('/products');
    }
}