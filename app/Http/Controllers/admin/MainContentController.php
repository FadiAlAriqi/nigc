<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MainContent;
use Illuminate\Http\Request;

class MainContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MainContent $mainContent)
    {
//        $mainContent = MainContent::latest()->first();
        return view('admin.mainContent.index')->with([
            'mainContents' => $mainContent->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mainContent.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'services_title_ar' => ['required', 'string'],
            'services_title_en' => ['required', 'string'],

            'header_logo_ar' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'header_logo_height_ar' => ['nullable', 'numeric', 'between:0,500'],
            'header_logo_width_ar' => ['nullable', 'numeric', 'between:0,500'],

            'header_logo_en' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'header_logo_height_en' => ['nullable', 'numeric', 'between:0,500'],
            'header_logo_width_en' => ['nullable', 'numeric', 'between:0,500'],

            'footer_logo_ar' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'footer_logo_height_ar' => ['nullable', 'numeric', 'between:0,500'],
            'footer_logo_width_ar' => ['nullable', 'numeric', 'between:0,500'],

            'footer_logo_en' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'footer_logo_height_en' => ['nullable', 'numeric', 'between:0,500'],
            'footer_logo_width_en' => ['nullable', 'numeric', 'between:0,500'],
        ]);

        $header_logo_ar = '';
        $header_logo_en = '';

        $footer_logo_ar = '';
        $footer_logo_en = '';

        if($request->header_logo_ar)
        {
            $header_logo_ar = $request->file('header_logo_ar')->store('logo' , 'public') ;
        }

        if($request->header_logo_en)
        {
            $header_logo_en = $request->file('header_logo_en')->store('logo' , 'public') ;
        }


        if($request->footer_logo_ar)
        {
            $footer_logo_ar = $request->file('footer_logo_ar')->store('logo' , 'public') ;
        }

        if($request->footer_logo_en)
        {
            $footer_logo_en = $request->file('footer_logo_en')->store('logo' , 'public') ;
        }

        else
        {
            $header_logo_ar = '';
            $header_logo_en = '';

            $footer_logo_ar = '';
            $footer_logo_en = '';
        }

        $existingRecord = MainContent::first();

        if (!$existingRecord)
        {
            MainContent::create([
                'services_title_ar' => $request->services_title_ar ,
                'services_title_en' => $request->services_title_en ,
                'header_logo_ar' => $header_logo_ar ,
                'header_logo_en' => $header_logo_en ,
                'header_logo_height_ar' => $request->header_logo_height_ar ,
                'header_logo_height_en' => $request->header_logo_height_en ,
                'header_logo_width_ar' => $request->header_logo_width_ar ,
                'header_logo_width_en' => $request->header_logo_width_en ,
                'footer_logo_ar' => $footer_logo_ar ,
                'footer_logo_en' => $footer_logo_en ,
                'footer_logo_height_ar' => $request->footer_logo_height_ar ,
                'footer_logo_height_en' => $request->footer_logo_height_en ,
                'footer_logo_width_ar' => $request->footer_logo_width_ar ,
                'footer_logo_width_en' => $request->footer_logo_width_en ,
            ]);

            return redirect()->route('admin.mainContent.index')->withsuccess('Operation accomplished successfully');
        }

        else
        {
            $notification = array(
                'message' => 'You can not add, there is already record, you can edit previous content information ',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.mainContent.index')->with($notification);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(MainContent $mainContent)
    {
        return view('admin.mainContent.show')->with('mainContent' , $mainContent);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainContent $mainContent)
    {
        return view('admin.mainContent.edit')->with('mainContent' , $mainContent);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'services_title_ar' => ['required', 'string'],
            'services_title_en' => ['required', 'string'],

            'header_logo_ar' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'header_logo_height_ar' => ['nullable', 'numeric', 'between:0,500'],
            'header_logo_width_ar' => ['nullable', 'numeric', 'between:0,500'],

            'header_logo_en' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'header_logo_height_en' => ['nullable', 'numeric', 'between:0,500'],
            'header_logo_width_en' => ['nullable', 'numeric', 'between:0,500'],

            'footer_logo_ar' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'footer_logo_height_ar' => ['nullable', 'numeric', 'between:0,500'],
            'footer_logo_width_ar' => ['nullable', 'numeric', 'between:0,500'],

            'footer_logo_en' => ['nullable' , 'mimes:jpeg,jpg,png'],
            'footer_logo_height_en' => ['nullable', 'numeric', 'between:0,500'],
            'footer_logo_width_en' => ['nullable', 'numeric', 'between:0,500'],
        ]);

        $header_ar= '';
        $header_en= '';

        $footer_ar= '';
        $footer_en= '';

        $header_logo_ar = MainContent::whereId($id)->first()->header_logo_ar ;
        $header_logo_en = MainContent::whereId($id)->first()->header_logo_en ;

        $footer_logo_ar = MainContent::whereId($id)->first()->footer_logo_ar ;
        $footer_logo_en = MainContent::whereId($id)->first()->footer_logo_en ;

        if($request->header_logo_ar || $request->header_logo_en || $request->footer_logo_ar || $request->footer_logo_en)
        {
            if ($request->header_logo_ar)
            {
                unlink(storage_path('app/public/'.$header_logo_ar));
                $header_ar = $request->file('header_logo_ar')->store('logo' , 'public') ;
            }

            if ($request->header_logo_en)
            {
                unlink(storage_path('app/public/'.$header_logo_en));
                $header_en = $request->file('header_logo_en')->store('logo' , 'public') ;
            }


            if ($request->footer_logo_ar)
            {
                unlink(storage_path('app/public/'.$footer_logo_ar));
                $footer_ar = $request->file('footer_logo_ar')->store('logo' , 'public') ;
            }

            if ($request->footer_logo_en)
            {
                unlink(storage_path('app/public/'.$footer_logo_en));
                $footer_en = $request->file('footer_logo_en')->store('logo' , 'public') ;
            }
        }
        else
        {
            $header_ar = $header_logo_ar;
            $header_en = $header_logo_en;

            $footer_ar = $footer_logo_ar;
            $footer_en = $footer_logo_en;
        }

        MainContent::whereId($id)->update([
            'services_title_ar' => $request->services_title_ar ,
            'services_title_en' => $request->services_title_en ,
            'header_logo_ar' => $header_ar ,
            'header_logo_en' => $header_en ,
            'header_logo_height_ar' => $request->header_logo_height_ar ,
            'header_logo_height_en' => $request->header_logo_height_en ,
            'header_logo_width_ar' => $request->header_logo_width_ar ,
            'header_logo_width_en' => $request->header_logo_width_en ,
            'footer_logo_ar' => $footer_ar ,
            'footer_logo_en' => $footer_en ,
            'footer_logo_height_ar' => $request->footer_logo_height_ar ,
            'footer_logo_height_en' => $request->footer_logo_height_en ,
            'footer_logo_width_ar' => $request->footer_logo_width_ar ,
            'footer_logo_width_en' => $request->footer_logo_width_en ,
        ]);

        return redirect()->route('admin.mainContent.index')->withsuccess('Operation accomplished successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainContent $mainContent)
    {
        if ($mainContent->header_logo_ar  or $mainContent->header_logo_en or $mainContent->footer_logo_ar or $mainContent->footer_logo_en)
        {
            unlink(storage_path('app/public/'.$mainContent->header_logo_ar));
            unlink(storage_path('app/public/'.$mainContent->header_logo_en));
            unlink(storage_path('app/public/'.$mainContent->footer_logo_ar));
            unlink(storage_path('app/public/'.$mainContent->footer_logo_en));
        }
        $mainContent->delete();
        return redirect()->route('admin.mainContent.index')->withsuccess('Operation accomplished successfully');
    }
}
