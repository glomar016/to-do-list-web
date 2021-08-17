<?php
    if (isset($this->session->userdata['logged_in'])) {
        $email = ($this->session->userdata['logged_in']['email']);
        $userId = ($this->session->userdata['logged_in']['userId']);
        $firstName = ($this->session->userdata['logged_in']['firstName']);

    }
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Bus Reservation System</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url()?>resources/assets/users/assets/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/assets/users/assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/assets/users/assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/assets/users/assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/assets/users/assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/assets/users/assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/assets/users/assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <!-- <a class="navbar-brand" href="#">
                            <img src="<?php echo base_url()?>resources/assets/users/assets/images/logo.svg" alt="Logo">
                        </a> -->
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <?php
                                    if (isset($this->session->userdata['logged_in'])) {
                                        $userType = ($this->session->userdata['logged_in']['userType']);
                                        if($userType == "Passenger"){
                                            echo '<li class="nav-item"><a> Hello, '.$firstName.'</a></li>
                                            <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                            <li class="nav-item"><a href="'.base_url().'users/my_reservation">Book/Reservation</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#theSystem">The System</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#about">About Us</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#contact">Contact Us</a></li>';
                                        }
                                        else{
                                            echo '<li class="nav-item"><a>Hello Admin, '.$firstName.'</a></li>
                                            <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                            <li class="nav-item"><a href="'.base_url().'BusSchedule">
                                            Schedule</a></li>
                                            <li class="nav-item"><a href="'.base_url().'reservation">Reservation</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#theSystem">The System</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#about">About Us</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#contact">Contact Us</a></li>';
                                        }
                                        
                                    }
                                    else{
                                        echo '
                                            <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#theSystem">The System</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#about">About Us</a></li>
                                            <li class="nav-item"><a class="page-scroll" href="#contact">Contact Us</a></li>';
                                    }
                                ?> 
                                
                            </ul>
                        </div>
                        
                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>

                                <?php
                                    if (isset($this->session->userdata['logged_in'])) {
                                        echo '<li><a class="solid btn_logout" class="trigger-btn" data-toggle="modal">LOGOUT</a></li>';
                                    }
                                    else{
                                        echo '<li><a class="solid" href="#loginModal" class="trigger-btn" data-toggle="modal">LOGIN</a></li>';
                                    }
                                ?>
                                                                
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Bus Reservation</h1>
                                    <p class="text">Increase the speed, convenience, and comfort of the booking process.</p>
                                    <ul class="slider-btn rounded-buttons">
                                            <?php
                                        if (isset($this->session->userdata['logged_in'])) {
                                            echo '<li></li>';
                                            echo '<li></li>';
                                        }
                                        else{
                                            echo '<li><a class="main-btn rounded-one" href="'.base_url().'users/register">Register</a></li>';
                                            echo '<li><a class="main-btn rounded-two" href="#loginModal" class="trigger-btn" data-toggle="modal">LOGIN</a></li>';
                                        }
                                             ?>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?php echo base_url()?>resources/assets/users/assets/images/slider/1.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Express Bus Trips</h1>
                                    <p class="text">Know your bus information, driver's name, departure time, and destination.</p>
                                    <ul class="slider-btn rounded-buttons">
                                    <?php
                                        if (isset($this->session->userdata['logged_in'])) {
                                            echo '<li></li>';
                                            echo '<li></li>';
                                        }
                                        else{
                                            echo '<li><a class="main-btn rounded-one" href="#">Register</a></li>';
                                            echo '<li><a class="main-btn rounded-two" href="#loginModal" class="trigger-btn" data-toggle="modal">LOGIN</a></li>';
                                        }
                                             ?>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?php echo base_url()?>resources/assets/users/assets/images/slider/2.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Promo and Discount</h1>
                                    <p class="text">Get promo code to avail exciting discounts.</p>
                                    <ul class="slider-btn rounded-buttons">
                                    <?php
                                        if (isset($this->session->userdata['logged_in'])) {
                                            echo '<li></li>';
                                            echo '<li></li>';
                                        }
                                        else{
                                            echo '<li><a class="main-btn rounded-one" href="#">Register</a></li>';
                                            echo '<li><a class="main-btn rounded-two" href="#loginModal" class="trigger-btn" data-toggle="modal">LOGIN</a></li>';
                                        }
                                             ?>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?php echo base_url()?>resources/assets/users/assets/images/slider/3.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== PRINICNG START ======-->

    <section id="theSystem" class="pricing-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">The System</h3>
                        <p class="text">The Bus Reservation System with Online Payment is an easy-to-use online booking system which helps users to reserve and pay bus tours with ease and convenience. The system also allows users to reserve for different routes and landmarks. In addition, it also enables users to manage reservations,
                            and passengers list and their information as well as set bus schedule and set the availability of the seats.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <h6 class="sub-title">A Little More About Us</h6>
                            <h4 class="title">Frequently Asked Questions <br> About Our Site</h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is BRS?</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">The Bus Reservation System with Online Payment is an easy-to-use online booking system which helps users to
                                                reserve and pay bus tours with ease and convenience. The system also allows users to reserve for different routes and landmarks.
                                                In addition, it also enables users to manage reservations, and passengers list and their information as well as set bus schedule
                                                and set the availability of the seats.</p>
                                        </div>
                                    </div> 
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why would I have to reserve a seat in advance?</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">To ensure that you have a seat on the date and time of your choice,
                                                we recommend that you book early because there are limited seats available - especially during busy seasons or on weekends.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I pay for my reservation?</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">You can pay over the counter or pay online via PayMaya payment method.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFore">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">How will I get the bus ticket?</a>
                                    </div>
                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Upon receipt of payment, we will email you a ticket, which you must bring with you on your trip.
                                                In the bus station, you give over the ticket to the appointed person.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Is it possible to cancel/ re-book my reservation?</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Re-booking is generally allowed without additional fees when a trip is cancelled due to bad weather or by the bus company for other reasons.
                                                You may incur charges if you requested a re-booking.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">If I missed my bus, what do I do?</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">If you miss your bus, you will need to purchase a new ticket to board another.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Why can't I book for a large group?</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">The number of seats available per request is limited. If you have a large group (9 or more) and are having trouble getting confirmation,
                                                please email us at support@brs.com.ph</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="<?php echo base_url()?>resources/assets/users/assets/images/about.jpg" alt="about">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45">
                        <h6 class="sub-title">Testimonials</h6>
                        <h4 class="title">What Clients Says <br> About Us</h4>
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">We are really happy with the positive feedback we have received for the high quality of our work and our dedication to make every transaction a success,
                            and we are grateful for that. <br><br>This is what they have to say about us.</p>
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“The bus service is nice and had a good comfortable seat. Aside from that, the bus was on time.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="<?php echo base_url()?>resources/assets/users/assets/images/author-1.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Juan Dela Cruz</h5>
                                            <span class="sub-title">Social Media Influencer</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Very nice service and had a nice travel!”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                                <img src="<?php echo base_url()?>resources/assets/users/assets/images/author-2.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Dennis Santos</h5>
                                            <span class="sub-title">Actor</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“I strongly recommend BRS.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                                <img src="<?php echo base_url()?>resources/assets/users/assets/images/author-3.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Mark Lee</h5>
                                            <span class="sub-title">CEO of our rival company</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== TEAM START ======-->

    <!--====== TEAM  ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.227157676692!2d121.08190763653144!3d14.699742112570096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba7528549fb1%3A0x62d21f0cc60f364d!2sPolytechnic%20University%20of%20the%20Philippines%20Quezon%20City!5e0!3m2!1sen!2sph!4v1627026400299!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text"> Address 1, Address 2<br>Quezon City.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@ayroui.com</p>
                                <p class="text">support@uideck.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+333 789-321-654</p>
                                <p class="text">+333 985-458-609</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            
        </div> <!-- container -->
    </section>

    <div id="loginModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <form id="loginForm" method="post">
                    <div class="modal-header">				
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">				
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="loginEmail" id="loginEmail" required="required">
                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <label>Password</label>
                                
                            </div>
                            
                            <input type="password" class="form-control" name="loginPass" id="loginPass" required="required">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="<?php echo base_url()?>resources/assets/img/brs-logo-sm.png" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <!-- <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@brs_TEAM.com</span>
                    </div>
                    <!-- <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                    </div>  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->
   



    <!--====== Jquery js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <?php $this->load->view('includes/fixed_scripts.php')?>
    <?php $this->load->view('includes/core_js_files.php')?>

    <script>
    $('#loginForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#loginForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>login/userLogin/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                console.log(data)
                if(data.error == true){
                    Swal.fire(
                    'Login failed!',
                    data.message[0],
                    'warning'
                    )
                }
                else{
                    // window.location.href = "<?php echo base_url()?>"
                }
                
            }
        // ajax closing tag
        })
        
    });

    $('.btn_logout').on('click', function(e){
        window.location.href = "<?php echo base_url()?>logout"
    })

    
    </script>
    
    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="<?php echo base_url()?>resources/assets/users/assets/js/main.js"></script>
    
</body>

</html>
