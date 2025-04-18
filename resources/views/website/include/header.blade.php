<!-- Topbar Start -->
{{--<div class="container-fluid bg-primary px-5 d-none d-lg-block">--}}
<div class="container-fluid top_header px-5 d-none d-lg-block d-md-block d-sm-inline-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex">
                <a href="mailto:{{$contact->email}}" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>{{$contact->email}}</a>
                <a href="tel:{{$contact->phone}}" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>{{$contact->phone}}</a>
            </div>
        </div>
        <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                @foreach($socialMedia as $item)
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="https://{{$item->url}}"><i class="fab fa-{{$item->icon}} fw-normal text-secondary"></i></a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="nav-item nav-link">
                    @if (app()->getLocale() == 'ar')
                        <a class="text-muted me-2"
                           href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a>
                    @else
                        <a class="text-muted me-2"
                           href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a>
                    @endif
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
{{--            <h1 class="display-5 text-secondary m-0"><img src="img/brand-logo.png" class="img-fluid" alt="">Travisa</h1>--}}
            <!-- <img src="img/logo.png" alt="Logo"> -->
            <h1 class="display-5 text-secondary m-0"><img src="{{asset('admin/images/logo_nigc.svg')}}" class="img-fluid" alt="Logo">{{__('nigc.name')}}</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('index')}}" class="nav-item nav-link active">{{__('nigc.home')}}</a>
                <a href="{{route('index')}}#about_us" class="nav-item nav-link">{{__('nigc.about')}}</a>
                <a href="{{route('index')}}#message_and_vision" class="nav-item nav-link">{{__('nigc.massage_and_vision')}}</a>
                <a href="{{route('index')}}#our_businesses" class="nav-item nav-link">{{__('nigc.our_projects')}}</a>
                <a href="{{route('index')}}#why_choose_us" class="nav-item nav-link">{{__('dashboard.why_choose_us')}}</a>
{{--                <a href="#" class="nav-item nav-link">{{__('nigc.services')}}</a>--}}
{{--                <div class="nav-item dropdown">--}}
{{--                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">{{__('nigc.language')}}</span></a>--}}
{{--                    <div class="dropdown-menu m-0">--}}
{{--                        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a>--}}
{{--                        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="dropdown">
                <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">{{__('nigc.language')}}</span></a>
                <div class="dropdown-menu m-0">
                    <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a>
                    <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a>
                </div>
            </div>
{{--            <button class="btn btn-close-white btn-md-square border-white"></button>--}}
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->

{{--<script>--}}
{{--    document.addEventListener("DOMContentLoaded", function() {--}}
{{--        const navLinks = document.querySelectorAll('.nav-item.nav-link');--}}
{{--        const currentHash = window.location.hash;--}}

{{--        navLinks.forEach(link => {--}}
{{--            // تحقق مما إذا كان href يحتوي على hash--}}
{{--            const linkHash = link.getAttribute('href');--}}

{{--            if (linkHash === currentHash) {--}}
{{--                link.classList.add('active');--}}
{{--            } else {--}}
{{--                link.classList.remove('active');--}}
{{--            }--}}
{{--        });--}}

{{--        // إضافة حدث لتحديث الحالة عند تغيير الـ hash--}}
{{--        window.addEventListener('hashchange', function() {--}}
{{--            const newHash = window.location.hash;--}}
{{--            navLinks.forEach(link => {--}}
{{--                const linkHash = link.getAttribute('href');--}}

{{--                if (linkHash === newHash) {--}}
{{--                    link.classList.add('active');--}}
{{--                } else {--}}
{{--                    link.classList.remove('active');--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll('.nav-item.nav-link');
        const currentHash = window.location.hash || '#home'; // تعيين القيمة الافتراضية لـ #home

        navLinks.forEach(link => {
            const linkHash = link.getAttribute('href');

            if (linkHash === currentHash) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });

        // إضافة حدث لتحديث الحالة عند تغيير الـ hash
        window.addEventListener('hashchange', function() {
            const newHash = window.location.hash;
            navLinks.forEach(link => {
                const linkHash = link.getAttribute('href');

                if (linkHash === newHash) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    });
</script>
