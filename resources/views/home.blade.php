@extends('layouts.app')

@section('content')

<head>
    

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                

            </div>
        </div>
    </div>
</div>

<div class='container'>

    <div class='row justify-centre'>
    <a href="/admin"><button class='col col admin-button'> Go to admin page</button></a>
    </div>

</div>
@endsection
