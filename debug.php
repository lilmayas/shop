<?php
require_once __DIR__ . '/bootstrap.php';


for ($i = 0; $i < 2; $i++) {
    $product = new ProductModel();
    $product->name = 'name' . $i;
    $product->sku = 'sku' . $i;
    $product->image = 'image' . $i;
    $product->test = 'test' . $i;
    $product->save();
    //dump(ProductModel::all());
}


