<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MainContent;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        $mainContent = MainContent::latest()->first();
        return view('admin.services.index')->with([
            'services' => $service->all(),
            'mainContent' => $mainContent,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.add');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show')->with('service' , $service);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit')->with('service' , $service);
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
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
