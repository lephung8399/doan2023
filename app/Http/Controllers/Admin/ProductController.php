<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $user = Auth::user();
//        $cate_id =  DB::table('products')->select('ProductID')->get();
//        $cate_id = Category::findOrFail(1);
//        $cate_id = DB::table('productcategories')->where('CategoryID', '=', 1)->get();
//        $cate_name = DB::table('productcategories')
//            ->join('products', 'products.ProductCategoryID', '=', 'productcategories.CategoryID')
//            ->select('productcategories.CategoryName')
//            ->where('products.ProductCategoryID','=',$cate_id)
//            ->get();
//        dd($cate_name);


//        dd($products);
        return view('admin.Products.productList',['user' => $user, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
//        dd($cate);
        $user = Auth::user();
        return view('admin.Products.create',['user' => $user, 'cate' => $cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'anh' => 'required',
            'anh.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('anh'))
        {

            foreach($request->file('anh') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
            }
        }

        $product = new Product();
        $product->ProductImage = $name;
        $product->ProductName = request('ProductName');
        $product->ProductPrice = request('ProductPrice');
        $product->ProductCategoryID = request('ProductCategoryID');
        $product->ProductSKU = request('ProductSKU');
        $product->ProductStock = request('ProductStock');
        $product->ProductDescription = request('ProductDescription');
//        dd($product->getAttributes());
        $product->save();
//        dd($product);

        return redirect()->route('admin.products');
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
        $updateProduct = Product::where('ProductID',$id)->first();
        $cate = Category::all();
        $user = Auth::user();
//        dd($updateProduct);
//        dd($categoryUpdate);

        return view('admin.Products.update',['user' => $user, 'updateProduct' => $updateProduct, 'cate' => $cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ProductID)
    {
        $this->validate($request, [

            'anh.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('anh'))
        {

            foreach($request->file('anh') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
            }
        }

        $product = Product::find($ProductID);
//        dd($product);
        $product->ProductImage = $name;
        $product->ProductName = request('ProductName');
        $product->ProductPrice = request('ProductPrice');
        $product->ProductCategoryID = request('ProductCategoryID');
        $product->ProductSKU = request('ProductSKU');
        $product->ProductStock = request('ProductStock');
        $product->ProductDescription = request('ProductDescription');

        $product->save();
//        Product::where('ProductID', $ProductID)
//            ->update([ep
//                'ProductImage' = $name,
//                'ProductName' = request('ProductName'),
//                'ProductPrice' = request('ProductPrice'),
//                'ProductCategoryID' = request('ProductCategoryID'),
//                'ProductSKU' = request('ProductSKU'),
//                'ProductStock' = request('ProductStock'),
//                'ProductDescription' = request('ProductDescription'),
//            ]);

        return redirect()->route('admin.products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ProductID)
    {
        Product::where('ProductID',$ProductID)->delete();

        return redirect()->route('admin.products');
    }
}
