<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//<-- Admin page -->
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', "middleware" => "auth"], function () {

    //profile
    Route::get('/', 'dashboardController@index')->name("admin.dashboard");
    Route::get('/profile', 'dashboardController@profile')->name("admin.profile");
    Route::post('profile/update/{id}', 'dashboardController@update')->name("admin.profile.update");
    Route::post('profile/avatar/{id}', 'dashboardController@avatar')->name("admin.profile.avatar");
    Route::get('profile/confirmPassword', 'dashboardController@confirmPassword')->name("admin.profile.confirmPassword");
    Route::get('profile/changePassword', 'dashboardController@changePassword')->name("admin.profile.changePassword");
    Route::post('profile/changePasswordProcess/{id}', 'dashboardController@changePasswordProcess')->name("admin.profile.changePasswordProcess");

    Route::get('/forbidden', 'dashboardController@forbidden')->name("admin.forbidden");

    //    superadmin
    Route::group([ "middleware" => "auth"], function () {
        //        Route::get('/forbidden','dashboardController@forbidden')->name("admin.forbidden");
        //   admintrator page

        Route::group([ "middleware" => "CheckSup"], function () {
            Route::get('/manage', 'AdmintratorController@index')->name("admin.admintrator");
            Route::get('/form/{id}', 'AdmintratorController@edit')->name("admin.admintrator.form");
            Route::post('/update/{id}', 'AdmintratorController@update')->name("admin.admintrator.update");
            Route::get('/delete/{id}', 'AdmintratorController@destroy')->name("admin.admintrator.delete");
            Route::get('/newAccount', 'AdmintratorController@newAccount')->name("admin.newAccount");
            Route::post('/registerProcess', 'AdmintratorController@registerProcess')->name("admin.registerProcess");
//            Auth::routes();
        });


        Route::group([ "middleware" => "CheckAdmin1"], function () {
            //   category
            Route::get('category', 'categoriesController@index')->name("admin.category");
            Route::get('category/update/{id?}', 'categoriesController@update')->name("admin.category.update");
            Route::post('category/updateProcess/{id}', 'categoriesController@updateProcess')->name("admin.category.updateProcess");
            Route::get('category/delete/{id}', 'categoriesController@destroy')->name("admin.category.delete");
            Route::get('category/insert', 'categoriesController@create')->name("admin.category.insert");
            Route::post('category/store', 'categoriesController@store')->name("admin.category.store");

            //    Products
            Route::get('/products', 'ProductController@index')->name("admin.products");
            Route::get('/products/create', 'ProductController@create')->name("admin.product.create");
            Route::post('/products/store', 'ProductController@store')->name("admin.product.store");
            Route::get('/products/delete/{ProductID}', 'ProductController@destroy')->name("admin.product.delete");
            Route::get('/products/edit/{ProductID}', 'ProductController@edit')->name("admin.product.edit");
            Route::post('/products/update/{ProductID}', 'ProductController@update')->name("admin.product.update");
        });

        Route::group([ "middleware" => "CheckProcessor"], function () {
            //    Orders
            Route::get('/orders', 'ordersController@index')->name("admin.orders");
            Route::get('/order/show/{id}', 'ordersController@show')->name("admin.orders.show");
            Route::get('/order/updateStarusByOrderID/{id}/{status}', 'PaymentController@updateStarusByOrderID');
        });
    });
});
//Route::get('/', function () {
//    return view('welcome');
//});

//request password to continue
Route::get('/user', 'HomeController@user');
//    ->middleware('password.confirm');
//Route::get('/user','HomeController@user');
//Route::get('/dangnhap','HomeController@dangnhap');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'HomePage', 'namespace' => 'Home'], function () {
    Route::get('/', 'HomePageController@index')->name('index');
    Route::post('payment', 'PaymentController@store')->name('payment');
    Route::get('products/{ProductID}', 'ProductsController@index')->name('products');
    Route::get('category/{id}', 'CategoryController@index')->name('category');
    Route::get('all', 'ProductsController@all')->name('products.all');
    Route::get('add-to-cart/{id}', 'ShoppingCartController@addToCart')->name('cart.addToCart');
    Route::get('cart', 'ShoppingCartController@cart')->name('cart.index');
    Route::get('/remove-to-cart/{id}', 'ShoppingCartController@removeProductIntoCart')->name('cart.removeProductIntoCart');
    Route::post('/update-to-cart/{id}', 'ShoppingCartController@updateProductIntoCart')->name('cart.updateProductIntoCart');
//    Route::post('/payment/', 'PaymentController@index')->name('payment');
    Route::get('orders', 'OrdersController@store')->name('orders');
    Route::get('success', 'PaymentController@success')->name('success');
    Route::post('searchProcess', 'HomePageController@searchProcess')->name('searchProcess');
});



