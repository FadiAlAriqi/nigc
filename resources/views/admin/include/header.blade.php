<div class="topbar">

    <div class="topbar-left	d-none d-lg-block">
        <div class="text-center">
            <a href="{{route('admin.index.index')}}" class="logo"><img src="{{asset('admin/images/logo.png')}}" height="56" alt="logo"></a>
{{--            <a href="{{route('admin.index.index')}}" class="logo">--}}
{{--                <img src="{{asset('storage/'.$mainContent['header_logo_'.app()->getLocale()])}}" height="{{$mainContent['header_logo_height_'.app()->getLocale()]}}px" width="{{$mainContent['header_logo_width_'.app()->getLocale()]}}px" alt="Logo">--}}
{{--            </a>--}}
        </div>
    </div>

    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">

            <li class="list-inline-item dropdown notification-list nav-user">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('admin/images/users/avatar-6.jpg')}}" alt="user" class="rounded-circle">
                    <span class="d-none d-md-inline-block ml-1">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                    <a class="dropdown-item" href="#"><i class="dripicons-user"></i>{{Auth::user()->name}}</a>
                    <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="dripicons-exit text-muted"></i> {{ __('Log Out') }}</a>
                        </form>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>

            <li class="list-inline-item notification-list d-none d-sm-inline-block">
                <a href="{{route('index')}}" class="nav-link waves-effect" target="_blank">
                    {{__('dashboard.view_amd_site')}}
                </a>
            </li>

            <li class="list-inline-item notification-list d-none d-sm-inline-block">
                @if (app()->getLocale() == 'ar')
                    <a class="nav-link d-flex justify-content-center align-items-center  "
                       href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a>
                @else
                    <a class="nav-link d-flex justify-content-center align-items-center "
                       href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a>
                @endif
            </li>

        </ul>


    </nav>

</div>
