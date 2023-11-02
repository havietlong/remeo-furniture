<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/login')->group(function () {
    Route::post('/validate', [UserController::class, 'validateLogin']);
});
Route::get('/cart', [CartController::class, 'index']);
Route::prefix('/cart')->group(function () {
    Route::post('/add', [CartController::class, 'store']);
    Route::get('/reset', [CartController::class, 'reset']);
});

Route::post('/checkOut', [OrdersController::class, 'checkOut']);

Route::post('/admin/product_alter/{id}', [ProductsController::class, 'update']);
Route::post('/admin/product_add', [ProductsController::class, 'store']);
Route::post('/admin/product_delete/{id}', [ProductsController::class, 'destroy']);
Route::post('/admin/orders/order_cancel/{id}', [OrdersController::class, 'destroy']);
Route::post('/admin/orders/order_approve/{id}', [OrdersController::class, 'approveOrder']);

// routes/api.php
Route::get('/admin/orders/indexChartData',  [OrdersController::class, 'indexChartData']);
Route::get('/admin/orders/indexChartData_Week',  [OrdersController::class, 'indexChartData_Week']);
Route::get('/admin/orders/indexChartData_Month',  [OrdersController::class, 'indexChartData_Month']);


   



