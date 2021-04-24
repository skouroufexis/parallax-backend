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



use App\Http\Controllers\AdminController;

Route::get('/', function () {
    $products = DB::select('SELECT * from products', [1]);
    return view('index',['products'=>$products]);
});

Route::get('/index.html', function () {

    $products = DB::select('SELECT * from products', [1]);
    
    return view('index',['products'=>$products]);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/success', function () {
    return view('success');
})->middleware('auth');;


Auth::routes(['register'=>false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin',[AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/products/new',[AdminController::class, 'addProduct'])->middleware('auth');

Route::post('/admin/products/new',[AdminController::class, 'postProduct'])->middleware('auth');

Route::post('/admin/products/putStatus',[AdminController::class, 'putStatus'])->middleware('auth');

Route::get('/admin/products/product',[AdminController::class, 'getProduct'])->middleware('auth');

Route::post('/admin/products/putProduct',[AdminController::class, 'putProduct'])->middleware('auth');

Route::post('/admin/products/deleteProduct',[AdminController::class, 'deleteProduct'])->middleware('auth');



