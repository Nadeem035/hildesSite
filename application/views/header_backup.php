<!doctype html>
<html lang="eng">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$meta_title?></title>
        <meta name="keywords" content="<?=$meta_key?>">
        <meta name="description" content="<?=$meta_desc?>">

        <meta name="robots" content="index,follow">

        <meta property="og:locale" content="en_US">
        <meta property="og:site_name" content="HilDes">
        <meta property="og:type" content="It Company">
        <meta property="og:title" content="">
        <meta property="og:description" content="">

        <meta property="og:url" content="<?=BASEURL?>">
        <meta property="og:image" content="">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@HilDes">
        <meta name="twitter:creator" content="@admin">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">

        <link rel="canonical" href=""> 

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="<?=CSS?>bootstrap.min.css">
        <link rel="stylesheet" href="<?=CSS?>animate.min.css">
        <link rel="stylesheet" href="<?=CSS?>meanmenu.min.css">
        <link rel="stylesheet" href="<?=CSS?>odometer.min.css">
        <link rel="stylesheet" href="<?=CSS?>owl.carousel.min.css">
        <link rel="stylesheet" href="<?=CSS?>owl.theme.default.min.css">
        <link rel="stylesheet" href="<?=CSS?>remixicon.css">
        <link rel="stylesheet" href="<?=CSS?>style.css">
        <link rel="stylesheet" href="<?=CSS?>responsive.css">

        <link rel="icon" type="image/png" href="<?=IMG?>favicon.png">

        <!-- Google Tag Manager -->
    </head>
    <body>

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="hildes-responsive-nav">
                <div class="container">
                    <div class="hildes-responsive-menu">
                        <div class="logo">
                            <a href="<?=BASEURL?>"><img src="<?=IMG?>logo.png" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hildes-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?=BASEURL?>"><img src="<?=IMG?>logo.png" alt="logo"></a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="<?=BASEURL?>" class="nav-link" rel="home">Home</a></li>

                                <li class="nav-item"><a href="<?=BASEURL.'services'?>" class="nav-link" rel="services">Services</a></li>
                                
                                <li class="nav-item"><a href="<?=BASEURL.'pricing'?>" class="nav-link" rel="pricing">Pricing</a></li>
                                
                                <li class="nav-item"><a href="<?=BASEURL.'about-us'?>" class="nav-link" rel="about_us">About Us</a></li>

                                <li class="nav-item"><a href="<?=BASEURL.'team'?>" class="nav-link" rel="team">Team</a></li>
                                
                                <li class="nav-item"><a href="<?=BASEURL.'faqs'?>" class="nav-link" rel="faqs">FAQs</a></li>
                                
                                <li class="nav-item"><a href="<?=BASEURL.'testimonials'?>" class="nav-link" rel="testimonials">Testimonials</a></li>

                                <li class="nav-item"><a href="<?=BASEURL.'blog'?>" class="nav-link" rel="blog">Blog</a></li>
                                
                            </ul>

                            <div class="others-option">
                                <a href="<?=BASEURL.'contact-us'?>" class="default-btn"><i class="ri-chat-check-line"></i> Contact Us</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->