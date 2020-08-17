<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'created_at',
        'updated_at',
        'ProductDescription',
    ];

    public static function getProductByOrderId($productId, $orderID){
        return DB::table('orders')
            ->leftJoin('products', 'orders.ProductID', '=', 'products.ProductID')
            ->where(['orders.ProductID' => $productId, 'orders.id' => $orderID])
            ->select('products.ProductImage','products.ProductName', 'orders.id', 'orders.DetailQuantity', 'products.created_at', 'orders.DetailPrice')
            //->toSql();
            ->get()->first();
    }
    public static function getProductAndCategoryName(){
        return  DB::select('select products.*, productcategories.CategoryName from productcategories
                                    inner join products on
                                     productcategories.CategoryID  = products.ProductCategoryID
                                      ORDER BY products.ProductID DESC');
    }
}


