<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travisa - Visa & Immigration Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
{{--    <link href="lib/animate/animate.min.css" rel="stylesheet">--}}
{{--    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('site/assets/lib/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}">


    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('site/assets/css/bootstrap.min.css')}}">
{{--    <link href="css/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Template Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('site/assets/css/style.css')}}">
{{--    <link href="css/style.css" rel="stylesheet">--}}
</head>



<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex">
                <a href="#" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>Example@gmail.com</a>
                <a href="#" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>+01234567890</a>
            </div>
        </div>
        <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#" class="text-muted me-2"> Help</a><small> / </small>
                <a href="#" class="text-muted mx-2"> Support</a><small> / </small>
                <a href="#" class="text-muted ms-2"> Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="display-5 text-secondary m-0"><img src="img/brand-logo.png" class="img-fluid" alt="">Travisa</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Pages</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Feature</a>
                        <a href="#" class="dropdown-item">Countries</a>
                        <a href="#" class="dropdown-item">Testimonial</a>
                        <a href="#" class="dropdown-item">Training</a>
                        <a href="#" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
            <a href="" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Get A Quote</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->


<!-- Carousel Start -->
<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h4>
                        <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Immigration Process Starts Here!</h1>
                        <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h5>
                        <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Best Visa Immigrations Services</h1>
                        <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
            <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
            <span class="visually-hidden-focusable">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->



<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded">
                    <img src="img/about-2.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                    <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                </div>
            </div>
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h5 class="sub-title pe-3">About the company</h5>
                <h1 class="display-5 mb-4">We’re Trusted Immigration Consultant Agency.</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt architecto consectetur iusto perferendis blanditiis assumenda dignissimos, commodi fuga culpa earum explicabo libero sint est mollitia saepe! Sequi asperiores rerum nemo!</p>
                <div class="row gy-4 align-items-center">
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <i class="fas fa-map-marked-alt fa-3x text-secondary"></i>
                        <h5 class="ms-4">Best Immigration Resources</h5>
                    </div>
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <i class="fas fa-passport fa-3x text-secondary"></i>
                        <h5 class="ms-4">Return Visas Availabile</h5>
                    </div>
                    <div class="col-4 col-md-3">
                        <div class="bg-light text-center rounded p-3">
                            <div class="mb-2">
                                <i class="fas fa-ticket-alt fa-4x text-primary"></i>
                            </div>
                            <h1 class="display-5 fw-bold mb-2">34</h1>
                            <p class="text-muted mb-0">Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-8 col-md-9">
                        <div class="mb-5">
                            <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Offer 100 % Genuine Assistance</p>
                            <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> It’s Faster & Reliable Execution</p>
                            <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Accurate & Expert Advice</p>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                    <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                    <div class="position-absolute" style="top: 0; left: 25px;">
                                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <span class="text-primary">Have any questions?</span>
                                <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">Free: +0123 456 7890</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Counter Facts Start -->
<div class="container-fluid counter-facts py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-passport"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Visa Categories</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">31</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Team Members</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">377</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Visa Process</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">4.9</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">K</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Success Rates</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">98</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">%</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Facts End -->


<!-- Services Start -->
<div class="container-fluid service overflow-hidden pt-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Visa Categories</h5>
            </div>
            <h1 class="display-5 mb-4">Enabling Your Immigration Successfully</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Job Visa</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Job Visa</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Business Visa</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Business Visa</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Diplometic Visa</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Diplometic Visa</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Students Visa</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Students Visa</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Residence Visa</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Residence Visa</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Tourist Visa</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Tourist Visa</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->



<!-- Features Start -->
<div class="container-fluid features overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Why Choose Us</h5>
            </div>
            <h1 class="display-5 mb-4">Offer Tailor Made Services That Our Client Requires</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-dollar-sign fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Cost-Effective</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fab fa-cc-visa fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Visa Assistance</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-atlas fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Faster Processing</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-users fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Direct Interviews</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Features</a>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->



<!-- Countries We Offer Start -->
<div class="container-fluid country overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">COUNTRIES WE OFFER</h5>
            </div>
            <h1 class="display-5 mb-4">Immigration & visa services following Countries</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/country-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="img/brazil.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Brazil</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/country-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="img/india.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">india</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/country-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="img/usa.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">New York</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                <div class="country-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/country-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country-flag">
                        <img src="img/italy.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div class="country-name">
                        <a href="#" class="text-white fs-4">Italy</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Countries</a>
            </div>
        </div>
    </div>
</div>
<!-- Countries We Offer End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial overflow-hidden pb-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">OUR CLIENTS RIVIEWS</h5>
            </div>
            <h1 class="display-5 mb-4">What Our Clients Say</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="img">
                    </div>
                    <div class="my-auto">
                        <h5>Person Name</h5>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="img">
                    </div>
                    <div class="my-auto">
                        <h5>Person Name</h5>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                    </p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="img">
                    </div>
                    <div class="my-auto">
                        <h5>Person Name</h5>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



<!-- Training Start -->
<div class="container-fluid training overflow-hidden bg-light py-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">CHECK OUR TRAINING</h5>
            </div>
            <h1 class="display-5 mb-4">Get the Best Coacing Service Training with Our Travisa</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">IELTS</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">
                        <a href="#"><h4 class="text-white">IELTS Coaching</h4></a>
                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">TOEFL</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">
                        <a href="#"><h4 class="text-white">TOEFL Coaching</h4></a>
                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">PTE</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">
                        <a href="#"><h4 class="text-white">PTE Coaching</h4></a>
                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a href="#" class="h4 text-white mb-0">OET</a>
                            <a href="#" class="h4 text-white mb-0">Coaching</a>
                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">
                        <a href="#"><h4 class="text-white">OET Coaching</h4></a>
                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">View More</a>
            </div>
        </div>
    </div>
</div>
<!-- Training End -->


<!-- Contact Start -->
<div class="container-fluid contact overflow-hidden pb-5">
    <div class="container py-5">
        <div class="office pt-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">Worlwide Offices</h5>
                </div>
                <h1 class="display-5 mb-4">Explore Our Office Worldwide</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">Australia</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">+123.456.7890</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-1.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">Canada</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">(012) 0345 6789</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-3.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">United Kingdom</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">01234.567.890</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-4.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">India</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">+123.45.67890</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Contact Info</h4>
                    <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                    <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                    <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                    <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-secondary me-2"></i>
                        <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Opening Time</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Mon - Friday:</h6>
                        <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Satday:</h6>
                        <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Vacation:</h6>
                        <p class="text-white mb-0">All Sunday is our vacation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Our Services</h4>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Business</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Evaluation</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Migrate</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Study</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Counselling</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Work / Career</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-secondary mb-4">Newsletter</h4>
                    <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="position-relative mx-auto rounded-pill">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('site/assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('site/assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('site/assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('site/assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('site/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

{{--<script src="lib/wow/wow.min.js"></script>--}}
{{--<script src="lib/easing/easing.min.js"></script>--}}
{{--<script src="lib/waypoints/waypoints.min.js"></script>--}}
{{--<script src="lib/counterup/counterup.min.js"></script>--}}
{{--<script src="lib/owlcarousel/owl.carousel.min.js"></script>--}}


<!-- Template Javascript -->
<script src="{{asset('site/assets/js/main.js')}}"></script>
{{--<script src="js/main.js"></script>--}}
</body>

</html>