@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.users')}}</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom: 10px; margin-right: 10px; margin-left: 10px;">
                <a href="{{route('admin.user.create')}}" class="btn" style="color: white; background-color: #B5A362">{{__('dashboard.add_user')}}</a>
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
                                <th>{{__('dashboard.name')}}</th>
                                <th>{{__('dashboard.username')}}</th>
                                <th>{{__('dashboard.email')}}</th>
                                <th>{{__('dashboard.phone')}}</th>
                                <th>{{__('dashboard.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    {{$user->id}}
                                </td>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->username}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    {{$user->phone}}
                                </td>
                                <td>
                                    <div class="dropdown mo-mb-2">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{__('dashboard.action')}}
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <form method="get" class="dropdown-item" action="{{route('admin.user.edit' , $user->id)}}">
                                                @csrf
                                                <button class="dropdown-item" type="submit">{{__('dashboard.edit')}}</button>
                                            </form>

                                            <form method="post" class="dropdown-item" action="{{route('admin.user.destroy' , $user->id)}}">
                                                @csrf
                                                @method('delete')
                                                <button class="dropdown-item" type="submit" onclick="return confirm('Are u sure ?')">{{__('dashboard.delete')}}</button>
                                            </form>

                                            <form method="get" class="dropdown-item" action="{{route('admin.user.show' , $user->id)}}">
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
