@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>


<div class ='container'>
    <div class='row'>
        <div class='col'><b>Products</b></div>
    </div>

    <div class ='row top1' style='background-color:whitesmoke'>
        <div class='col'>id</div>
        <div class='col'>Title</div>
        <div class='col'>Status</div>
        <div class='col'>Toggle</div>
        <div class='col'>Created at</div>                
        <div class='col'>Updated at</div>     
                 
    </div>

    @foreach($products as $product)
        @php
            if($product->status==1){
                $status='active';
            }
            else{
                $status='inactive';
            }
        @endphp    
    <form class='row top1' method='post' action='/admin/products/putStatus?id={{$product->id}}'>    
        @csrf     
        <div class='col border'>{{$product->id}}</div>  
        <div class='col border'>{{$product->title}}</div>  
        <div class='col border'>{{$status}}</div>
        <button type="submit" class='col border'>on/off</button>  
        <div class='col border'>{{$product->created_at}}</div>
        <div class='col border'>{{$product->updated_at}}</div>  
        <a class='border vertical-centre' href='/admin/products/product?id={{$product->id}}'><button type='button' class='col left1 fa fa-caret-right  admin-button'></button></a>    
    </form>
    @endforeach

    <div>
        
    </div>
    
    
</div>


<div class='container'>
<div class='row'>
        <a href='/admin/products/new'>
            <button class=' admin-button'>
                <b> + Add new product</b>
            </button>
        </a>
    </div>
</div>



@endsection