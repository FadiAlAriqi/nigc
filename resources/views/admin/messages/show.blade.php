@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.message_details')}}</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom: 10px; margin-right: 10px; margin-left: 10px;">
                <a href="{{route('admin.message.index')}}" class="btn" style="color: white; background-color: #B5A362">{{__('dashboard.back')}}</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.title_ar')}}</label>
                        <div class="col-sm-10">
                            <input name="title_ar" value="{{$message->title_ar}}" class="form-control" type="text" id="example-text-input" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.title_en')}}</label>
                        <div class="col-sm-10">
                            <input name="title_en" value="{{$message->title_en}}" class="form-control" type="text" id="example-text-input" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.message_ar')}}</label>
                        <div class="col-sm-10">
                            <textarea name="message_ar" id="textarea" class="form-control" rows="3" placeholder="Type your message here" readonly>{{$message->message_ar}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.message_en')}}</label>
                        <div class="col-sm-10">
                            <textarea name="message_en" id="textarea" class="form-control" rows="3" placeholder="Type your message here" readonly>{{$message->message_en}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
