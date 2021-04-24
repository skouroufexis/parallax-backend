@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

    <!-- WYZYWYG -->
    <script src="https://cdn.tiny.cloud/1/y6dslj3vh0ft8s0rqo1silkcz28gearqf6ub2f5hexkwix4o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</head>





<form class ='container' method='POST' action='/admin/products/putProduct' style="padding-bottom:0%" enctype="multipart/form-data">
    <div class='row'>
        
    @csrf

        <label for="id" class='col-12'>id: {{$product->id}}
            <input type="text" id='id' name='id' value={{$product->id}} hidden>
        </label> 

        <label for="title" class='col-12'>title
            <input type="text" id="title" name="title" value={{$product->title}}>
        </label>

        <label for="type" class='col-12 top1'>type &nbsp;&nbsp;
            <select name="type" id="type">
                <option value={{$product->type}}>{{$product->type}}</option>
                <option value="light">light</option>
                <option value="dark">dark</option>
            </select>
        </label>

        <label for="status" class='col-12 top1'>status
            <select name="status" id="status">
                 @php
                 if($product->status==1){
                     $status='active';
                 }
                 else{
                    $status='inactive';
                 }
                 @endphp   
                <option value={{$product->status}}>{{$status}}</option>
                <option value=1>active</option>
                <option value=2>inactive</option>
            </select>
        </label>

        <label for="content" class='col-12 top1'>        
            <textarea name="content" id="content">{{$product->content}} </textarea>
        </label>

        <label for="oldImage" class='col-12 top1'> Background Image <br>
            @php                        
                $image=$product->image;
                if($image){
                    $path=explode("public/images/",$image);
                    $path=$path[1];
                    $path='/storage/images/'.$path;                                

                }
                else{
                    $path='';
                }                                      
            @endphp     

            @if($path!='')
            <img src={{$path}} id='oldImage' alt='product image' class='preview-image'>   
            @else
            <p><b>No background image</b></p>   
            @endif

        </label>      

        <label for="image" class='col-12'>Choose a new background image        
            <input type="file" id='image' name='image'>
        </label>

        <button type='submit' class='col-12 admin-button'>Modify record</button>
        


    </div>

    

</form>

<form class='container' method="POST" action='/admin/products/deleteProduct' style="padding-top:0%">
    @csrf 
    
    
    <input type="text" id='id' name='id' value={{$product->id}} hidden>
    

    <div class='row'>
        <button type='submit' class='col-12 top1 delete'>Delete record</button>
    </div>
    <div class='row top1'>
        <a href='/admin'><button type='button' class='col cancel'>cancel</button></a>
    </div>    


</form>

    
<script>
    tinymce.init({
      selector: '#content'
    });
  </script>


@endsection