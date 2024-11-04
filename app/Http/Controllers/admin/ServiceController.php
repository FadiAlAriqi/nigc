<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(Service $service)
    {
        return view('admin.services.index')->with([
            'services' => $service->all(),
        ]);
    }

    public function create()
    {
        return view('admin.services.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'service_ar' => ['required' , 'string'],
            'service_en' => ['required' , 'string'],
            'image' => ['nullable' , 'mimes:jpeg,jpg,png'],
        ]);

        $image = '';
        if($request->image)
        {
            $image = $request->file('image')->store('service' , 'public') ;
        }
        else
        {
            $image = '';
        }

        Service::create([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'service_ar' => $request->service_ar ,
            'service_en' => $request->service_en ,
            'image' => $image ,
        ]);

        return redirect()->route('admin.service.index')->withsuccess('Operation accomplished successfully');
    }

    public function show(Service $service)
    {
        return view('admin.services.show')->with('service' , $service);
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit')->with('service' , $service);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'service_ar' => ['required' , 'string'],
            'service_en' => ['required' , 'string'],
            'image' => ['nullable' , 'mimes:jpeg,jpg,png']
        ]);

        $image = '';
        $service = Service::whereId($id)->first()->image ;
        if($request->image)
        {
            if ($service)
            {
                unlink(storage_path('app/public/'.$service));
            }
            $image = $request->file('image')->store('service' , 'public') ;
        }
        else
        {
            $image = $service;
        }

        Service::whereId($id)->update([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'service_ar' => $request->service_ar ,
            'service_en' => $request->service_en ,
            'image' => $image ,
        ]);

        return redirect()->route('admin.service.index')->withsuccess('Operation accomplished successfully');
    }

    public function destroy(Service $service)
    {
        if ($service->image)
        {
            unlink(storage_path('app/public/'.$service->image));
        }
        $service->delete();
        return redirect()->route('admin.service.index')->withsuccess('Operation accomplished successfully');
    }
}
