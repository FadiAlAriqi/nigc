<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex">
                <a href="mailto:ibrahim.alkhudhair@nigcc.com" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>support@nigcc.com</a>
                <a href="tel:0507895555" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>0507895555</a>
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
{{--        <div class="col-lg-4 text-center text-lg-end">--}}
{{--            <div class="d-inline-flex align-items-center" style="height: 45px;">--}}
{{--                <a href="#" class="text-muted me-2"> {{__('nigc.about')}}</a><small> / </small>--}}
{{--                <a href="#" class="text-muted mx-2"> {{__('nigc.support')}}</a><small> / </small>--}}
{{--                <a href="#" class="text-muted ms-2"> {{__('nigc.contact')}}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="display-5 text-secondary m-0"><img src="{{asset('website/img/brand-logo.png')}}" class="img-fluid" alt="">Travisa</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#" class="nav-item nav-link active">{{__('nigc.home')}}</a>
                <a href="#" class="nav-item nav-link">{{__('nigc.about')}}</a>
                <a href="#" class="nav-item nav-link">{{__('nigc.services')}}</a>
{{--                <div class="nav-item dropdown">--}}
{{--                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Pages</span></a>--}}
{{--                    <div class="dropdown-menu m-0">--}}
{{--                        <a href="#" class="dropdown-item">Feature</a>--}}
{{--                        <a href="#" class="dropdown-item">Countries</a>--}}
{{--                        <a href="#" class="dropdown-item">Testimonial</a>--}}
{{--                        <a href="#" class="dropdown-item">Training</a>--}}
{{--                        <a href="#" class="dropdown-item">404 Page</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <a href="#" class="nav-item nav-link">{{__('nigc.contact')}}</a>
                <a class="nav-item nav-link">
                    @if (app()->getLocale() == 'ar')
                        <a class="nav-link d-flex justify-content-center align-items-center  "
                           href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a>
                    @else
                        <a class="nav-link d-flex justify-content-center align-items-center "
                           href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a>
                    @endif
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
