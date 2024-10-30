@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.contents')}}</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom: 10px; margin-right: 10px; margin-left: 10px;">
                <a href="{{route('admin.mainContent.create')}}" class="btn" style="color: white; background-color: #B5A362">{{__('dashboard.add_content')}}</a>
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
                                <th>{{__('dashboard.services_title')}}</th>
                                <th>{{__('dashboard.header_logo')}}</th>
                                <th>{{__('dashboard.footer_logo')}}</th>
{{--                                <th>{{__('dashboard.dashboard_logo')}}</th>--}}
                                <th>{{__('dashboard.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mainContents as $mainContent)
                                <tr>
                                    <td>
                                        {{$mainContent->id}}
                                    </td>

                                    <td>
                                        {{$mainContent['services_title_'.app()->getLocale()]}}
                                    </td>

                                    <td class="px-1">
{{--                                        <img src="{{asset('storage/'.$mainContent->header_logo)}}" style="width: 40%">--}}
                                        <img src="{{asset('storage/'.$mainContent['header_logo_'.app()->getLocale()])}}" style="width: 40%">
                                    </td>

                                    <td class="px-1">
{{--                                        <img src="{{asset('storage/'.$mainContent->footer_logo)}}" style=" width: 20%">--}}
                                        <img src="{{asset('storage/'.$mainContent['footer_logo_'.app()->getLocale()])}}" style=" width: 20%">
                                    </td>

{{--                                    <td class="px-1">--}}
{{--                                        <img src="{{asset('storage/'.$mainContent->dashboard_logo)}}" style=" width: 20%">--}}
{{--                                        <img src="{{asset('storage/'.$mainContent['dashboard_logo_'.app()->getLocale()])}}" style=" width: 20%">--}}
{{--                                    </td>--}}

                                    <td>
                                        <div class="dropdown mo-mb-2">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{__('dashboard.action')}}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <form method="get" class="dropdown-item" action="{{route('admin.mainContent.edit' , $mainContent->id)}}">
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">{{__('dashboard.edit')}}</button>
                                                </form>

                                                <form method="post" class="dropdown-item" action="{{route('admin.mainContent.destroy' , $mainContent->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="dropdown-item" type="submit" onclick="return confirm('Are u sure ?')">{{__('dashboard.delete')}}</button>
                                                </form>

                                                <form method="get" class="dropdown-item" action="{{route('admin.mainContent.show' , $mainContent->id)}}">
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">{{__('dashboard.show')}}</button>
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
