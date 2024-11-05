@extends('website.layout.master')
@section('content')

{{--    الصور الرئيسية علشان تكون متحركة --}}
    <!-- Carousel Start -->
<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-touch="true">
        <ol class="carousel-indicators d-none d-md-flex">
            @foreach($slideshow as $index => $slide)
                <li data-bs-target="#carouselId" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($slideshow as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $slide->image) }}" class="d-block w-100" alt="Slide {{ $index + 1 }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

    {{-- About Start --}}
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="{{asset('storage/'.$aboutUs->image)}}" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h1 class="sub-title pe-3">{{__('dashboard.about_us')}}</h1>
                    <h1 class="display-5 mb-4">{{$aboutUs['title_'.app()->getLocale()]}}</h1>
                    <h5 class="mb-4">{{$aboutUs['message_'.app()->getLocale()]}}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

{{-- الرسالة والرؤية--}}
<!-- Message And Vision Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded">
                    <img src="{{asset('storage/'.$messageAndVision->image)}}" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                </div>
            </div>
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h1 class="sub-title pe-3">{{__('dashboard.massage_and_vision')}}</h1>
                <h1 class="display-5 mb-4">{{$messageAndVision['title_'.app()->getLocale()]}}</h1>
                <h5 class="mb-4">{{$messageAndVision['message_'.app()->getLocale()]}}</h5>
            </div>
        </div>
    </div>
</div>
<!-- Message And Vision End -->

{{--هنا من نخدم ونفس الكلام هذا--}}
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

{{--هنا الاعمال واذا امكن نسوي مع اضافة مشروع صورة تكون صورة الغلاف له ومن إضافة صور تكون لأجل إضافة صور أخرى --}}
    <!-- Projects Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h1 class="sub-title text-primary px-3">{{__('nigc.our_projects')}}</h1>
                </div>
                <h1 class="display-5 mb-4">{{__('nigc.brief_projects')}}</h1>

{{--                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>--}}

            </div>
            <div class="row g-4">
                @foreach($ourBusinesses as $business)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item shadow-lg rounded overflow-hidden position-relative">
                            <div class="service-img">
                                @if ($business->defaultImage)
                                    <img src="{{ asset('storage/' . $business->defaultImage->image) }}" class="img-fluid w-100 fixed-size" alt="Image">
                                @else
                                    <img src="{{ asset('storage/default-image-path.jpg') }}" class="img-fluid w-100 fixed-size" alt="Default Image">
                                @endif
                            </div>
                            <div class="service-details position-absolute w-100 text-center">
                                <div class="p-3">
                                    <h4 class="text-primary">{{ $business->title_en }}</h4>
                                    <p class="text-muted">{{ $business->business_description_en }}</p>
                                    <form action="{{ route('ourBusiness.showDetails', $business->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary rounded-pill">{{ __('dashboard.details') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 text-center mt-4">
                <form action="{{ route('ourBusiness.showAllBusinesses') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s">
                        {{ __('dashboard.show_all') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Projects End -->


{{--هنا عمل خدمات مع الحفاظ على التنسيق والايقونات--}}
    <!-- Features Start -->
    <div class="container-fluid features overflow-hidden py-5">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{{__('dashboard.why_choose_us')}}</h5>
                </div>
                <h1 class="display-5 mb-4">{{__('nigc.solidity')}}</h1>
            </div>
            <div class="row g-4 justify-content-center text-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-building fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{__('dashboard.trust')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-briefcase fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{__('dashboard.efficiency')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-calendar-check fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{__('dashboard.commitment')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-handshake fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{__('dashboard.loyalty')}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    {{-- او هنا الخدمات مع الحفاظ على التنسيق شوف اين الافضل وسويه--}}

    <!-- Training Start -->
    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h1 class="sub-title text-primary px-3">{{__('nigc.our_field')}}</h1>
                </div>
                <h3 class="mb-4">{{__('nigc.nigc_field')}}</h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach($services as $service)
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ url('storage/' . $service->image) }}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <a href="#" class="h4 text-white mb-0">{{ $service["title_".app()->getLocale()] }}</a>
                            </div>
                        </div>
                        <div class="training-content bg-secondary rounded-bottom p-4">
                            <a href="#"><h4 class="text-white">{{ $service["title_".app()->getLocale()] }}</h4></a>
                            <p class="text-white-50">{{ $service["service_".app()->getLocale()] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Training End -->
{{--وبيانات التواصل اللي في الفوتر شوف كيف ننسقها تكون في الوسط او ايش نضيف لها علشان تظهر بشكل اجمل--}}
@stop
