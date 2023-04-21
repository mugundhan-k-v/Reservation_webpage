<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>BIT_HOSTEL_ROOM_RESERVATION</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-barber-shop.css" rel="stylesheet">
    </head>
    
    <body>

        <div class="container-fluid">
            <div class="row">

                <!--<button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>-->

                <nav id="sidebarMenu" class="navbar navbar-expand-sm">

                    <div class=" d-flex flex-row justify-content-center align-items-center">
                        <a class="navbar-brand" href="index.html">
                            <img src="bitlogo.png" alt="BANNARI AMMAN INSTITUTE OF TECHNOLOGY" class="logo-image img-fluid" align="justify-content-center">
                        </a>

                        <ul class="nav flex-row">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">HOSTEL</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Price List</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a link= "" class="btn custom-btn smoothscroll mb-2" href="index.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-----------SECTION1----------->
                <div class="align-items-center">
                    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-8 col-12">
                                        <h1 class="text-white mb-lg-3 mb-4"><strong>HOSTEL <em>ROOM RESERVATION</em></strong></h1>
                                        <br>
                                        <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">HOSTELS</a>

                                        <a class="btn custom-btn smoothscroll mb-2" href="#section_3">What are the prices? </a>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
                                <img src="" class="custom-block-image img-fluid" alt="">

                                <h4><strong class="text-white">Hurry Up! Book your room now.</strong></h4>

                                <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Book a room</a>
                            </div>
                    </section>
<!-----------SECTION2------------->

                    <section class="services-section section-padding" id="section_2">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h2 class="mb-5">HOSTELS</h2>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Four cotted rooms</h4>

                                            <strong class="services-thumb-price">Rs.25000</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Two cotted rooms</h4>

                                            <strong class="services-thumb-price">Rs.30000</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                    <div class="services-thumb">
                                        <img src="" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">A/C Rooms</h4>

                                            <strong class="services-thumb-price">Rs.40000</strong>
                                        </div>
                                    </div>
                                </div>

                    <section class="booking-section section-padding" id="booking-section">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <form action="#" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                    <div class="text-center mb-5">
                                        <h2 class="mb-1">Book a Room</h2>

                                        <p>Please fill out the form and we get back to you</p>
                                    </div>

                                    <div class="booking-form-body">
                                        <div class="row">

                                            <div class="col-lg-6 col-12">
                                                <input type="text" name="bb-name" id="bb-name" class="form-control" placeholder="Full name" required>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <input type="tel" class="form-control" name="bb-phone" placeholder="Mobile 010-020-0340" pattern=" " required="">
                                            </div>
                                        
                                            <div class="col-lg-6 col-12">
                                                <input class="form-control" type="time" name="bb-time" value="18:30" />
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <select class="form-select form-control" name="bb-branch" id="bb-branch" aria-label="Default select example">
                                                    <option selected="">Select hostel</option>
                                                    <option value="Embrald">Embrald</option>
                                                    <option value="Coral">Coral</option>
                                                    <option value="Pearl">Pearl</option>
                                                    <option value="Ruby">Ruby</option>
                                                    <option value="Diamond">Diamond</option>
                                                </select>

                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="date" name="bb-date" id="bb-date" class="form-control" placeholder="Date" required>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <input type="number" name="bb-number" id="bb-number" class="form-control" placeholder="Room Number" required>
                                            </div>
                                        </div>

                                        <textarea name="bb-message" rows="3" class="form-control" id="bb-message" placeholder="Comment (Optionals)"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Submit</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </section>

            <!----section_3----->
                    <section class="price-list-section section-padding" id="section_3">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12">
                                    <div class="price-list-thumb-wrap">
                                        <div class="mb-4">
                                            <h2 class="mb-2">Price List</h2>

                                            <strong>Starting at Rs.25000</strong>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Two Cotted 
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>Rs.30000</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Four Cotted
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>Rs.25000</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                A/C Room
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>Rs.40000</strong>
                                            </h6>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                                    <img src="" class="custom-block-bg-overlay-image img-fluid" alt="">
                                </div>

                            </div>
                        </div>
                    </section>

<!-----------section_4--------------------->
                <section class="contact-section" id="section_4">
                    <div class="section-padding section-bg">
                        <div class="container">
                            <div class="row">   

                                <div class="col-lg-8 col-12 mx-auto">
                                    <h2 class="text-center">Have a GoodDay</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-padding">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <h5 class="mb-3"><strong>Contact</strong> Information</h5>

                                    <p class="text-white d-flex mb-1">
                                        <a href="tel: 120-240-3600" class="site-footer-link">
                                            (+19) 
                                            04295-226-000
                                        </a>
                                    </p>

                                    <p class="text-white d-flex">
                                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                            stayahead@bitsathy.ac.in
                                        </a>
                                    </p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook">
                                            </a>
                                        </li>
            
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter">
                                            </a>
                                        </li>
            
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-instagram">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-youtube">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-linkedin">
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="col-lg-12 col-12 mx-auto mt-5 pt-5">
                                    <iframe class="google-map" src="https://www.google.com/maps/search/bannari+amman
                                    +institute+of+technology/@11.5048825,77.2749958,15z/data=!3m1!4b1" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <footer class="site-footer">

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                    <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                        <i class="bi-arrow-up-circle"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>