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
        <div class='col'><b>{{session('message')}}</b></div>
    </div>



    <div class='row top1'>
        <a href='/admin'><button class='col admin-button'>ok</button></a>
    </div>
    
</div>

@endsection