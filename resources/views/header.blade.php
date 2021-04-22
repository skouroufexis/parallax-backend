<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company.com</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- STYLES -->
    
    <link rel="stylesheet" href="css/index.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
</head>

<body>


<section id="top">
        <header class="container top1">
    
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-2 centre" id="logoContainer">
                        <a href='index.html'><img class="img-fluid" src="/images/logo.png" id="logo" alt="logo"></a>
                    </div>
                    <div class="d-none d-lg-flex col" id="menuContainer" >
                        <div class="container vertical-centre">
                            <div class="row">                            
                                    <a class="col-5 m-left right" href="mailto:info@company.com"><small class="lightblack">info@company.com</small></a>
    
                                    <nav class="col-1 right">
                                        <a class="active" href="index.html"><b>EN</b></a>                                    
                                    </nav>
                                
    
                                
                                    <nav class="col-1 left">
                                        <a href="#"><b>GR</b></a>                                    
                                    </nav>
                                
    
                            </div>
    
                            <nav class="row top1 sticky-top">
                                <a href="#about" class="m-left col-2 right vertical-centre">ABOUT US</a>
                                <a href="#products" class="col-2 right vertical-centre">PRODUCTS</a>
                                <a href='#services' class="col-2 right vertical-centre">SERVICES</a>
                                <a href='#contact' class="col-2 right vertical-centre">CONTACT US</a>
                                <div class="col-1" id="search-container"><i class="fa fa-search"></i></div>                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    
        </header>
    </section>

    @yield('content')

    <footer class="container">
        <div class="row centre">
            <small>© 2017, Company. All rights reserved. | Developed by developerName</small>
        </div>
    </footer>

<script type="text/javascript" src="{{ asset('javascript/index.js') }}"></script>


</body>
</html>
