<nav id="nav" class="navbar navbar-full">
    <div class="container-fluid">
        <div class="container container-nav">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-header" style="position: absolute">
                        <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('index')}}">
                            <img src="{{asset('storage/'.$mainContent['header_logo_'.app()->getLocale()])}}" height="{{$mainContent['header_logo_height_'.app()->getLocale()]}}px" width="{{$mainContent['header_logo_width_'.app()->getLocale()]}}px" alt="Logo">
                        </a>
                    </div>

                    <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                        <ul class="nav navbar-nav navbar-nav-centered">
                            <li class="nav-item1"><a class="nav-link" href="{{route('index')}}">{{__('amd.home')}}</a></li>
                            <li class="nav-item2"><a class="nav-link" href="#services">{{__('amd.our_service')}}</a></li>
                            <li class="nav-item3"><a class="nav-link" href="#about_as">{{__('amd.about')}}</a></li>
                            <li class="nav-item4"><a class="nav-link" href="#manager_speech">{{__('amd.manager_speech')}}</a></li>
                            <li class="nav-item5"><a class="nav-link" href="#Message_and_vision">{{__('amd.massage_and_vision')}}</a></li>
                            <li class="nav-item6 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('amd.language')}} <img src="{{asset('website/images/language-svg.png')}}" width="20px" alt=""> </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a></li>
                                    <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
