<?php

namespace App\Models;


/**
 * @property string $name
 * @property string $descrption
 * @property string $image
 */
class VendorModel extends Model
{
    protected static $table = 'vendors';
    protected $fillable = ['name', 'description', 'image'];
}