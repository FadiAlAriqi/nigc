@extends('website.layout.master')
@section('content')



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
                            <h3>{{__('nigc.done_projects')}}</h3>
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
                            <h3>{{__('nigc.our_team')}}</h3>
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
                            <h3>{{__('nigc.process_projects')}}</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">4.9</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">K</h4>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">--}}
{{--                    <div class="counter">--}}
{{--                        <div class="counter-icon">--}}
{{--                            <i class="fas fa-handshake"></i>--}}
{{--                        </div>--}}
{{--                        <div class="counter-content">--}}
{{--                            <h3>Success Rates</h3>--}}
{{--                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                <span class="counter-value" data-toggle="counter-up">98</span>--}}
{{--                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">%</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->


    <!-- Projects Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{{__('nigc.our_projects')}}</h5>
                </div>
                <h1 class="display-5 mb-4">{{__('nigc.brief_projects')}}</h1>

{{--                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>--}}

            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{asset('website/img/service-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
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
                                <img src="{{asset('website/img/service-2.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
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
                                <img src="{{asset('website/img/service-3.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
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
                                <img src="{{asset('website/img/service-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
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
                                <img src="{{asset('website/img/service-2.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
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
                                <img src="{{asset('website/img/service-3.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
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
    <!-- Projects End -->

@stop
