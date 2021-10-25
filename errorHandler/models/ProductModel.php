<?php

class ProductModel extends Model
{
    protected static $table = 'products';
    protected $fillable = ['name', 'sku', 'image'];

    
}