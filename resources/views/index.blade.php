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

            @if (Route::has('login'))
                <div class="container top1 right">
                    @auth
                       <div class='row top1'> 
                            <a href="{{ url('/home') }}">Home</a>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="lightblack">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="left1 lightblack">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

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

    <div class="row d-lg-none">                            
        <a class="col-12 centre" href="mailto:info@company.com"><small class="lightblack">info@company.com</small></a>

        <nav class="col-6 top1 right">
            <a class="active" href="index.html"><b>EN</b></a>                                    
        </nav>
    
        <nav class="col-6 top1">
            <a href="#"><b>GR</b></a>                                    
        </nav>
    </div>

    <!-- MOBILE MENU -->

    <div class="container d-lg-none sticky-top">
        <div class="row">
            <button class="col-12 left" id="mobileMenuButton" onclick="openMenu()"><i class="fa fa-bars"></i></button>
        </div>
        <div class="row" id="mobileMenuLinksContainer">
            <button style="border:none" class="left" onclick="closeMenu()"><i class="fa fa-caret-left"></i></button>
            <a href="#about" class="mobileMenu col-12 top2 vertical-centre" onclick="closeMenu()">ABOUT US</a>
            <a href="#products" class="mobileMenu col-12 top2 vertical-centre" onclick="closeMenu()">PRODUCTS</a>
            <a href='#services' class="mobileMenu col-12 top2  vertical-centre" onclick="closeMenu()">SERVICES</a>
            <a href='#contact' class="mobileMenu col-12 top2 vertical-centre" onclick="closeMenu()">CONTACT US</a>
            <div class="col-2 centre top2" id="search-container2"><i class="fa fa-search"></i></div> 
        </div>
    </div>



    <main class="container top2">

        <div class="row">
            
            <img id="img-main" class="img-fluid" src="/images/image1.png" alt="">
            
        </div>


        <section id="about">
            <div class="container top1" id="about-container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1><b>ABOUT US</b></h1>
                    </div>
                </div>
    
                
                    <div class="row">
                        <div class="col-12 col-lg-6" id="about-text-container">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at ultrices tortor. Donec non lectus sollicitudin, cursus magna nec, ultrices massa. </h2>
                            <p>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus, eros magna scelerisque mi, non porta erat tortor ac lectus. Ut sem sapien, feugiat vel mollis ac,
                                vulputate in neque. Suspendisse nec scelerisque turpis. Sed dapibus urna vel convallis ultrices. 
                                Fusce dapibus varius metus, vel aliquet sapien facilisis eget. 
                                Fusce non massa nibh. Suspendisse ut quam eu urna tempus imperdiet id nec est. Morbi pulvinar lacus massa, quis interdum nisi dictum ac. Praesent fermentum ac tellus ac viverra.
                            </p>
            
                            <p>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus, eros magna scelerisque mi, non porta erat tortor ac lectus. Ut sem sapien, feugiat vel mollis ac,
                                vulputate in neque. Suspendisse nec scelerisque turpis. Sed dapibus urna vel convallis ultrices. 
                                Fusce dapibus varius metus, vel aliquet sapien facilisis eget. 
                                Fusce non massa nibh. Suspendisse ut quam eu urna tempus imperdiet id nec est. Morbi pulvinar lacus massa, quis interdum nisi dictum ac. Praesent fermentum ac tellus ac viverra.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus, eros magna scelerisque mi, non porta erat tortor ac lectus. Ut sem sapien, feugiat vel mollis ac,
                                vulputate in neque. Suspendisse nec scelerisque turpis. Sed dapibus urna vel convallis ultrices. 
                                Fusce dapibus varius metus, vel aliquet sapien facilisis eget. 
                                Fusce non massa nibh. Suspendisse ut quam eu urna tempus imperdiet id nec est. Morbi pulvinar lacus massa, quis interdum nisi dictum ac. Praesent fermentum ac tellus ac viverra.
                            </p>                 
                        </div>
                    </div>
            
             </div>  
        </section>     

        <section id="services">
            <div class="container top1" id="services-container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1><b>SERVICES</b></h1>
                    </div>
                </div>
                <div class="row top1">
                    <div class="col-1">
                        <img class="icon img-fluid" src="/images/icon1.png" alt="">    
                    </div>
    
                    <div class="col" style="border-bottom: dotted black medium;"></div>
    
                    <div class="col-1">
                        <img class="icon img-fluid" src="/images/icon2.svg" alt="">    
                    </div>
                    
                </div>
    
    
                <div class="row top1">
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                            faucibus,
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>
                            <li>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus,
                            </li>
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>
                            <li>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus
                            </li>
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                            faucibus,
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                            faucibus,
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>
                            <li>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus,
                            </li>
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                            faucibus,
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                            faucibus,
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>
                            <li>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus,
                            </li>
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                            faucibus,
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                            faucibus,
                        </p>
                    </div>
        
                </div>
    
            </div>
        </section>

        <section id="products">
            <div class="container top1" id="products-container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1><b>PRODUCTS</b></h1>
                    </div>
                </div>
                
                <div class="row top1">
                    <div class="col-12 col-md-6 col-lg-4 product-container vertical-end">
                        <div class="membrane">
                            <h2 class="black centre"></h2>
                            <p>
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus,
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus,
                            </p>
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4 product-container vertical-end">
                        <div class="membrane vertical-centre">
                            <h2 class="black centre"><b>Wheat</b></h2>
                            <p class="lightblack">
                                Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. Aliquam ultrices lorem et leo fringilla, in tincidunt felis accumsan. Nam vestibulum, neque sit amet porta 
                                faucibus,
                                Nam vestibulum, neque sit amet porta 
                                Nam vestibulum, neque sit amet porta 
                                Nam vestibulum, neque sit amet porta 
                                Nam vestibulum, neque sit amet porta 
                            </p>
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4 product-container vertical-end">
                        <div class="membrane">
                            <h2 class="black centre"><b>Barley</b></h2>
                            
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4 product-container vertical-end">
                        <div class="membrane">
                            <h2 class="black centre"><b>Rye</b></h2>
                            
                        </div>
                    </div>
    
                    
    
                    <div class="col-12 col-md-6 col-lg-4 product-container vertical-end">
                        <div class="membrane">
                            <h2 class="black centre"><b>Beans</b></h2>
                            
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6 col-lg-4 product-container vertical-end">
                        <div class="membrane">
                            <h2 class="black centre"><b>Peas</b></h2>                        
                        </div>
                    </div>
                </div>
    
            </div>
        </section>

        <div class="container top1">
            
            <div class="row centre">

                <div class="col-12 col-lg top1">

                    <img class="img-fluid small-icon" src="/images/logo.png" alt="icon">

                </div>

                <div class="col-12 col-lg top1">

                    <img class="img-fluid small-icon" src="/images/logo.png" alt="icon">

                </div>

                <div class="col-12 col-lg top1">

                    <img class="img-fluid small-icon" src="/images/logo.png" alt="icon">

                </div>

                <div class="col-12 col-lg top1">

                    <img class="img-fluid small-icon" src="/images/logo.png" alt="icon">

                </div>

                <div class="col-12 col-lg top1">

                    <img class="img-fluid small-icon" src="/images/logo.png" alt="icon">
                    
                </div>

            </div>

        </div>

        <section id="contact">
            <div class="container top1">
                
                <div class="row">
                    <div class="col-12 col-lg-6"  style="background-color:rgb(236, 243, 240); padding: 2%;">
                         <h1><b>CONTACT US</b></h1>
                         <p>Nam vestibulum, neque sit amet porta </p>                 
                         <p><i class="lightblack fa fa-map-marker"> Nam vestibulum Str</i></p>
                         <p><i class="lightblack fa fa-phone"> +35799764345</i></p>
                         <p><i class="lightblack fa fa-fax"> +35799764344</i></p>
                         <p><i class="lightblack fa fa-envelope"> info@company.com</i></p>                                  
                    </div>
        
                    <form class="col-12 col-lg-6" style="padding: 2%;" id="contact-form">
                        <div class="container">
                            <h1 class="row"><b>GET IN TOUCH</b></h1>
                            <span class="row">
                                <label class="col left">Your name </label>
                                <label class="col right"><i class="vertical-centre fa fa-user"></i></label>
    
                            </span>
                            <input type="text" name="username">
    
                            
                            <span class="row top2">
                                <label class="col left">Email</label>
                                <label class="col right"><i class="fa fa-envelope"></i></label>
                            </span>
                            <input type="text" name="email">
    
    
                            <span class="row top2">
                                <label class="col left">Message</label>
                                <label class="col right"><i class="fa fa-comment"></i></label>
                            </span>
                            <textarea class="top1" name="message" rows="5"></textarea>
    
                            <span class="row top2">                            
                                <input class="top1" type="submit" value="SEND A MESSAGE" id="input-submit">
                            </span>
                            
    
                        </div>
                        
                    </form>
                </div>
    
                <div class="row top2">
                    <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=strovolos&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                 </div>
    
                 
                <div class="row top2">

                    <div class="col-12 col-lg-4 centre top2">
                        <img class="img-fluid" src="./images/logo.png" alt="logo" id="small-logo">
                    </div>

                    <div class="col-8 col-lg-4 left top2">
                        <span class="row">
                            <h3 class="col"><b>RECEIVE OUR NEWSLETTER</b></h3>
                        </span>
                        <span class="row">
                            <small class="col">Nam vestibulum, neque sit amet porta vestibulum </small><br>
                        </span>
                        
                        <span class="row">
                            <input class="col" type="text" placeholder="email" id="inputMailingList" style="margin-left:auto;">
                            <button class="col left1">SUBSCRIBE</button>
                            
                        </span>
                    </div>

                    <div class="col vertical-centre  col-lg-4 right top2">
                        <a href="#top" class="col  vertical-centre"><i class="fa fa-chevron-circle-up" id="up"></i></a>
                    </div>

                    
    
                </div>
                                
            
                                    
                
    
            </div>
        </section>

        

    </main>


    <footer class="container">

        <div class="row centre">

            <small>© 2017, Company. All rights reserved. | Developed by developerName</small>

        </div>


    </footer>

<script type="text/javascript" src="{{ asset('javascript/index.js') }}"></script>
   
 

 <script>
    function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("map"),mapProp);
    }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html>
