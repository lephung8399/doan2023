<?php

namespace App\Http\Controllers\Home;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($ProductID)
    {
        $product = Product::where('ProductID',$ProductID)->get();
        $product_id_cate = DB::table('products')
            ->select('ProductCategoryID')
            ->where('ProductID', '=', $ProductID)
            ->get();
//        dd($product_id_cate);
//        $product_cate = DB::table('productcategories')
//            ->where('CategoryID', '=', $product_id_cate)
//            ->get();
//        $product_cate = Category::findorfail($product_id_cate);
//        dd($product_cate);
        return view('HomePage.products',['product' => $product]);
    }

    public function all(){
        $products = Product::all();
//        dd($products);
        return view('HomePage.all',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
