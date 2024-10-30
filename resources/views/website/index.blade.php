@extends('website.layout.master')
@section('navContent')

    <section class="wrapper1">
        <div class="flexslider">
            <ul class="slides">
                @foreach($slideshow as $slideshow)
                    <li>
                        <img src="{{asset('storage/'.$slideshow->image)}}" alt="slider" />
                    </li>
                @endforeach

            </ul>
        </div>
    </section>
@stop


@section('content')

    {{--    Start of Services Section   --}}

    <div class="services section" id="services">
        <div class="container">
            <div>
                <h2 style="font-size:30px; color: #f89a52 ; text-align: center; padding-bottom: 30px;"><b>{{__('amd.services')}}</b></h2>
                <p style="font-size:20px; color: #444444 ; text-align: center; padding-bottom: 30px;">{{$mainContent['services_title_'.app()->getLocale()]}}</p>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{asset('storage/'.$service->image)}}" alt="online degrees" style="height: 75px; width: 80px">
                            </div>
                            <div class="main-content">
                                <h4 style="color:#444444;">{{$service['title_'.app()->getLocale()]}}</h4>
                                <p style="font-size:15px">{{$service['service_'.app()->getLocale()]}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{--    End of Services Section   --}}




    {{--    Start of About us Section   --}}

    <div class="about_as section" id="about_as">

        <div class="text-photo-sc container-fluid">
            <div class="row SectionHead1">
                <div class="row">
                    <h2><b>{{__('amd.about_us')}}</b></h2>
                </div>
                <div class="col-md-6 photo-holder" style="padding: 0">
                    <img src="{{asset('storage/'.$aboutUs->image)}}">
                </div>
                <div class="col-md-6 text-holder text1">
                    <div class="text-box">
                        <p style="font-size: 20px;"> {{$aboutUs['message_'.app()->getLocale()]}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    End of About us Section   --}}



    {{--    Satart of Serve more than Section   --}}

    <div class="serve section" id="serve">
        <div class="row SectionHead2">
            <h2><b>{{__('amd.serve')}}</b></h2>
        </div>
        <div class="counter-up">
            <div class="content">
                @foreach($serves as $serve)
                    <div class="box">
                        <div class="icon">
                            <img src="{{asset('storage/'.$serve->image)}}" style="width: 140px">
                        </div>
                        <div class="nums">
                            <div class="num" data-goal="{{$serve->number}}">0</div>
                        </div>
                        <div class="text">{{$serve['title_'.app()->getLocale()]}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{--    End of Serve more than Section   --}}



    {{--    Start of Manager Speech Section   --}}

    <div class="manager_speech section" id="manager_speech">

        <div class="text-photo-sc container-fluid">
            <div class="row SectionHead1">
                <div class="row">
                    <h2><b>{{__('amd.manager_speech')}}</b></h2>
                </div>
                <div class="col-md-6 photo-holder" style="padding: 0">
                    <img src="{{asset('storage/'.$managerSpeech->image)}}">
                </div>
                <div class="col-md-6 text-holder text1">
                    <div class="text-box">
                        <p style="font-size: 20px"> {{$managerSpeech['message_'.app()->getLocale()]}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    End of Manager Speech Section   --}}



    {{--    Start of Message and Vision Section   --}}

    <div class="Message_and_vision section" id="Message_and_vision">

        <div class="text-photo-sc container-fluid blue-bg">
            <div class="row SectionHead2">
                <div class="row">
                    <h2><b>{{__('amd.massage_and_vision')}}</b></h2>
                </div>
                <div class="col-md-6 photo-holder" style="padding: 0">
                    <img src="{{asset('storage/'.$messageAndVision->image)}}">
                </div>
                <div class="col-md-6 text-holder text1">
                    <div class="text-box">
                        <p style="font-size: 20px"> {{$messageAndVision['message_'.app()->getLocale()]}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    End of Message and Vision Section   --}}
@stop
