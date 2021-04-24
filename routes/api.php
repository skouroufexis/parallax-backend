<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//GET SINGLE PRODUCT
Route::get('/admin/products/product/{id}', function () {
    
    $id=request('id');
    
    $product=Product::find($id);
    return ($product);
});


//Modify SINGLE PRODUCT
Route::post('/admin/products/putProduct',function(){

    $id=$_POST['id'];    
    $product=Product::find($id);

    if($request->hasFile('image')){
        $imagePath = $request->file('image')->store('public/images');    
        $product->image=$imagePath;        
    }

    $product->title=request('title');
    $product->content=request('content');
    $product->type=request('type');
    $product->status=request('status');

    $product->save();

    return ['result'=>'Product successfully modified']; 

});


// ADD NEW PRODUCT
Route::post('/admin/products/new',function(){
    $product=new Product();

    $id=$_POST['id'];    
    $product=Product::find($id);

    if($request->hasFile('image')){
        $imagePath = $request->file('image')->store('public/images');    
        $product->image=$imagePath;        
    }

    $product->title=request('title');
    $product->content=request('content');
    $product->type=request('type');
    $product->status=request('status');

    $product->save();

return ['result'=>'New product successfully added']; 

});


// DELETE SINGLE PRODUCT    
Route::post('/admin/products/deleteProduct',function(){    
    $id=$_POST['id'];    
    $product=Product::find($id);
    $product->delete();
    return ['result'=>$id];
});
