<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Category::all();
        $user = Auth::user();
//        dd($cate);
        return view('admin.Categories.Categories',['user' => $user, 'cate' => $cate] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.Categories.CategoriesInsert',['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $category = new Category();
        $category->CategoryName = request('CategoryName');
        $category->save();

        return redirect()->route('admin.category');
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
        $categoryUpdate = Category::where('CategoryID',$id)->first();
//        dd($categoryUpdate);

        $user = Auth::user();

        return view('admin.Categories.CategoriesUpdate',['user' => $user, 'categoryUpdate' => $categoryUpdate]);
    }
    public function updateProcess(Request $request, $id){
        Category::where('CategoryID', $id)
            ->update(['CategoryName' => request('CategoryName')]);

        return redirect()->route('admin.category');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('CategoryID',$id)->delete();

        return redirect()->route('admin.category');

    }
}
