<?php

namespace App\Controllers;

use App\Models\ProductModel;
use Exception;

class ProductsController
{
    public function index()
    {
        throw new Exception('test error');
        return renderView('products_table');
    }

    public function show()
    {
        return renderView('products_form');
    }

    public function create()
    {

        $fileName = null;
        if (!empty($_FILES['image'])) {
            $uploaddir = __DIR__ . '/../storage/';
            $fileName = basename($_FILES['image']['name']);
            $filePath = $uploaddir . $fileName;
            move_uploaded_file($_FILES['image']['tmp_name'], $filePath);
        }

        $product = new ProductModel();
        $product->name = $_POST['name'];
        $product->sku = $_POST['sku'];
        $product->image = $fileName;
        $product->save();
    
        redirect('/products');
    }

    public function delete()
    {
        
    }
}