<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">
            <a href="{{route('admin.index.index')}}" class="logo">
                <img src="{{asset('admin/images/logo.png')}}" height="60" alt="logo">
{{--                <img src="{{asset('storage/'.$mainContent['dashboard_logo_'.app()->getLocale()])}}" height="{{$mainContent['dashboard_logo_height_'.app()->getLocale()]}}px" width="{{$mainContent['dashboard_logo_width_'.app()->getLocale()]}}px" alt="Logo">--}}
            </a>
        </div>
    </div>

    <div class="sidebar-inner">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title"></li>

                <li>
                    <a href="{{route('admin.index.index')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span> {{__('dashboard.dashboard')}}</span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> {{__('dashboard.messages')}} </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.aboutUs.index')}}">{{__('dashboard.about_us')}}</a></li>
{{--                        <li><a href="{{route('admin.managerSpeech.index')}}">{{__('dashboard.manager_speech')}}</a></li>--}}
                        <li><a href="{{route('admin.messageAndVision.index')}}">{{__('dashboard.massage_and_vision')}}</a></li>
                    </ul>
                </li>

                <li>
{{--                    <a href="{{route('admin.aboutUs.index')}}" class="waves-effect">--}}
{{--                        <i class="dripicons-calendar"></i>--}}
{{--                        <span> {{__('dashboard.about_us')}} </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> {{__('dashboard.our_business')}} </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.ourBusiness.index')}}">{{__('dashboard.add_business')}}</a></li>
                        <li><a href="{{route('admin.ourBusinessImages.index')}}">{{__('dashboard.add_images')}}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('admin.service.index')}}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span> {{__('dashboard.services')}} </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.serve.index')}}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span> {{__('dashboard.serve')}} </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.slideshow.index')}}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span> {{__('dashboard.slideshow')}} </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.contact.index')}}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span> {{__('dashboard.contact_info')}} </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.socialMedia.index')}}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span> {{__('dashboard.social_media')}} </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.mainContent.index')}}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span> {{__('dashboard.main_contents')}} </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.user.index')}}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span> {{__('dashboard.users')}} </span>
                    </a>
                </li>

{{--                <li class="menu-title">Extra</li>--}}

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
