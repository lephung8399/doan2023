<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'productcategories';
    public $timestamps = false;
    protected $fillable = [
        'CategoryID',
        'CategoryName',
    ];
}
