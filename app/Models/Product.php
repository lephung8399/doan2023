<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    public $timestamps = true;
    protected $fillable = [
        'ProductSKU',
        'ProductName',
        'ProductPrice',
        'ProductThumb',
        'ProductImage',
        'ProductCategoryID',
        'ProductStock',
        'create_at',
        'update_at',
        'ProductDescription',
    ];
}


