<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shop-details/{id}', 'ProductsController@indexDetail');
Route::get('/products', 'ProductsController@index');
Route::get('/products/{category}', function ($category) {
    return view('shop')->with('productCategory', $category);
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkOut', function () {
    return view('checkOut');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/admin', function () {
    return view('admin.admin-dashboard');
});

Route::get('/admin/products', 'ProductsController@indexAdmin' );

// Route::get('/admin/orders', function () {
//     return view('admin.admin-dataTable');
// });

Route::get('/admin/product_detail/{id}','ProductsController@indexDetailAdmin');
Route::get('/admin/orders','OrdersController@indexAdmin');
Route::get('/admin/orders/order_detail/{id}', 'OrdersDetailController@displayOrder_DetailAdmin');



// Route::post('/login/validate','UserController@validateLogin' );

