<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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
Route::post('/products',function(){
    return Product::create([
        'name'=>'Product One',
        'slug'=>'product-01',
        'description'=>'Details of first product',
        'price'=>999
    ]);
});
//Route::get('/products/search/', [ProductController::class,'search']);
Route::resource('/products', ProductController::class);

Route::get('/products/search', 'ProductController@search');