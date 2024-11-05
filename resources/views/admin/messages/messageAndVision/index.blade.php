@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('nigc.massage_and_vision')}}</h4>
                    </div>
                </div>
                @if(Session::has('success'))
                    <p class="text-gold">{{Session::get('success')}}</p>
                @endif
            </div>
            <div class="d-flex" style="margin-bottom: 10px; margin-right: 10px; margin-left: 10px;">
                <a href="{{route('admin.messageAndVision.create')}}" class="btn" style="color: white; background-color: #B5A362">{{__('dashboard.add_message')}}</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>{{__('dashboard.id')}}</th>
                                <th>{{__('dashboard.title_ar')}}</th>
                                <th>{{__('dashboard.message_ar')}}</th>
                                <th>{{__('dashboard.image')}}</th>
                                <th>{{__('dashboard.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messageAndVision as $messageAndVision)
                                <tr>
                                    <td>
                                        {{$messageAndVision->id}}
                                    </td>

                                    <td>
                                        {{$messageAndVision['title_'.app()->getLocale()]}}
                                    </td>

                                    <td class="longText">
                                        {{$messageAndVision['message_'.app()->getLocale()]}}
                                    </td>

                                    <td class="px-1">
                                        <img src="{{asset('storage/'.$messageAndVision->image)}}" style=" width: 10%">
                                    </td>

                                    <td>
                                        <div class="dropdown mo-mb-2">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{__('dashboard.action')}}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <form method="get" class="dropdown-item" action="{{route('admin.messageAndVision.edit' , $messageAndVision->id)}}">
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">{{__('dashboard.edit')}}</button>
                                                </form>

                                                <form method="get" class="dropdown-item" action="{{route('admin.messageAndVision.show' , $messageAndVision->id)}}">
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">{{__('dashboard.show')}}</button>
                                                </form>

                                                <form method="post" class="dropdown-item" action="{{route('admin.messageAndVision.destroy' , $messageAndVision->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="dropdown-item" onclick="return confirm('Are u sure ?')">{{__('dashboard.delete')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
