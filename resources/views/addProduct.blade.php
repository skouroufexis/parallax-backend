@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

    <!-- WYZYWYG -->
    <script src="https://cdn.tiny.cloud/1/y6dslj3vh0ft8s0rqo1silkcz28gearqf6ub2f5hexkwix4o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</head>


<div class ='container'>
    <div class='row'>
        <div class='col'><b>Add New Product</b></div>
    </div>

    <form method="POST" action='/admin/products/new' class='row border top1' enctype="multipart/form-data">
    
        @csrf 
        <label for="title" class='col-12'>title
            <input type="text" id="title" name="title" >
        </label>

        <label for="type" class='col-12 top1'>type &nbsp;&nbsp;
            <select name="type" id="type">
                <option value="light">light</option>
                <option value="dark">dark</option>
            </select>
        </label>

        <label for="status" class='col-12 top1'>status
            <select name="status" id="status">
                <option value=1>active</option>
                <option value=2>inactive</option>
            </select>
        </label>

        <label for="content" class='col-12 top1'>        
            <textarea name="content" id="content"></textarea>
        </label>

        <label for="image" class='col-12'>        
            <input type="file" name='image'>
        </label>

         <button class='admin-button col' type="submit" >Add product</button>   

    </form>

    <div class='row top1'>
        <a href='/admin'><button class='col cancel'>cancel</button></a>
    </div>
    
</div>

   
    
 <script>
    tinymce.init({
      selector: '#content'
    });
  </script>



@endsection