<?php

namespace App\Controllers;

use App\Models\ProductModel;

class HomeController
{
    public function index()
    {
        $product = new ProductModel();
        $product->name = 'name';
        $product->sku = 'sku';
        $product->image = 'image';
        $product->test = 'test';
        $product->save();
        
        return renderView('home');
    }
}