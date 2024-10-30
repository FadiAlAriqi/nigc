@extends('website.layout.master')

@section('navContent')
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title" style="text-align: center">{{__('amd.manager_speech')}}</div>
                    <!-- <div class="page-subtitle">Awward winning hosting in 2018</div> -->
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="text-photo-sc container-fluid blue-bg">
        <div class="row">
            <div class="col-md-6 photo-holder" style="padding: 0">
                <img src="{{asset('storage/'.$managerSpeech->image)}}">
            </div>
            <div class="col-md-6 text-holder text1">
                <div class="text-box">
                    <h4 style="text-align: center">{{$managerSpeech['title_'.app()->getLocale()]}}</h4>
                    <p style="text-align: start"> {{$managerSpeech['message_'.app()->getLocale()]}} </p>
                </div>
            </div>
        </div>
    </div>
@stop
