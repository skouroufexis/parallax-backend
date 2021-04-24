<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('admin',['products'=>$products]);

    }

    public function addProduct(){        
        return view('addProduct');
    }

    public function postProduct(Request $request){    
    $product=new Product();

    if($request->hasFile('image')){
        $imagePath = $request->file('image')->store('public/images');    
        $product->image=$imagePath;
    }

    
    $product->title=request('title');
    $product->content=request('content');
    $product->type=request('type');
    $product->status=request('status');
    
    $product->save();
 
    return redirect('success')->with('message','New product successfully added');
    
    }

    public function putStatus(){    

        $id=request('id');
        $product=Product::find($id);
        $status= $product->status;
        
        if($status==1){
            $status=2;
        }
        else{
            $status=1;
        }
        $product->status=$status;
        $product->save();  
        return redirect('success')->with('message','Status successfully modified');        
    }

    public function getProduct(){    

        $id=request('id');
        $product=Product::find($id);
                
        return view('product',['product'=>$product]); 
        
    }

    public function putProduct (Request $request){
        
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
 
    return redirect('success')->with('message','Product successfully modified');

    }

    public function deleteProduct(){

        $id=$_POST['id'];    
        $product=Product::find($id);

        $product->delete();
        return redirect('success')->with('message','Product successfully deleted');
        
    }

    
}



