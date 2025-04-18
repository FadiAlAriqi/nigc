<!-- Footer Start -->
<div class="container-fluid button_footer footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Contact Info</h4>
                    <a href=""><i class="fa fa-map-marker-alt me-2"></i>{{$contact['address_'.app()->getLocale()]}}</a>
                    <a href="mailto:{{$contact->email}}"><i class="fas fa-envelope me-2"></i> {{$contact->email}}</a>
                    <a href="tel:{{$contact->phone}}"><i class="fas fa-phone me-2"></i> {{$contact->phone}}</a>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-secondary me-2"></i>

                        @foreach($socialMedia as $item)
                            <a class="btn mx-1" href="https://{{$item->url}}"><i class="fab fa-{{$item->icon}}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>

{{--            <div class="col-md-6 col-lg-6 col-xl-4">--}}
{{--                <div class="footer-item d-flex flex-column">--}}
{{--                    <h4 class="text-secondary mb-4">Opening Time</h4>--}}
{{--                    <div class="mb-3">--}}
{{--                        <h6 class="text-muted mb-0">Mon - Friday:</h6>--}}
{{--                        <p class="text-white mb-0">09.00 am to 07.00 pm</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <h6 class="text-muted mb-0">Satday:</h6>--}}
{{--                        <p class="text-white mb-0">10.00 am to 05.00 pm</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <h6 class="text-muted mb-0">Vacation:</h6>--}}
{{--                        <p class="text-white mb-0">All Sunday is our vacation</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--                <div class="footer-item d-flex flex-column">--}}
{{--                    <h4 class="text-secondary mb-4">Our Services</h4>--}}
{{--                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Business</a>--}}
{{--                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Evaluation</a>--}}
{{--                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Migrate</a>--}}
{{--                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Study</a>--}}
{{--                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Counselling</a>--}}
{{--                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Work / Career</a>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="footer-item" style="text-align: center">
                    <img src="{{asset('admin/images/logo.png')}}" class="img-fluid" alt="Logo">
                    <h2 class="display-5 text-secondary m-0">{{__('nigc.company_name')}}</h2>
                </div>
            </div>

{{--            <div class="col-md-6 col-lg-6 col-xl-4">--}}
{{--                <div class="footer-item">--}}
{{--                    <h4 class="text-secondary mb-4">Newsletter</h4>--}}
{{--                    <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                    <div class="position-relative mx-auto rounded-pill">--}}
{{--                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">--}}
{{--                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <?php echo date('Y'); ?> <span class="text-white"> &copy; <a href="#" class="border-bottom" style="color: #0E121D">NiGC</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-white">
                <span>Devoloped by :  <a class="border-bottom text-white" href="https://flamebases.com" target="_blank"><span style="color: #0E121D"> Flame Base</span></a> Team</span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>
