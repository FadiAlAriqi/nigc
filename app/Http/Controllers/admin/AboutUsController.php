<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\MainContent;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AboutUs $aboutUs)
    {
        $mainContent = MainContent::latest()->first();
        return view('admin.aboutUs.index')->with([
            'aboutUs' => $aboutUs->all(),
            'mainContent' => $mainContent,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aboutUs.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'message_ar' => ['required' , 'string'],
            'message_en' => ['required' , 'string'],
            'image' => ['required' , 'mimes:jpeg,jpg,png'],
        ]);

        $image = '';
        if($request->image)
        {
            $image = $request->file('image')->store('about_us' , 'public') ;
        }
        else
        {
            $image = '';
        }

        $existingRecord = AboutUs::first();

        if (!$existingRecord) {
            AboutUs::create([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
                'message_ar' => $request->message_ar,
                'message_en' => $request->message_en,
                'image' => $image,
            ]);
            return redirect()->route('admin.aboutUs.index')->withsuccess('Operation accomplished successfully');
        }

        else
        {
            $notification = array(
                'message' => 'You can not add, there is already record, you can edit previous information ',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.aboutUs.index')->with($notification);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aboutUs = AboutUs::whereId($id)->first();
        return view('admin.aboutUs.show')->with('aboutUs' , $aboutUs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aboutUs = AboutUs::whereId($id)->first();
        return view('admin.aboutUs.edit')->with('aboutUs' , $aboutUs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'message_ar' => ['required' , 'string'],
            'message_en' => ['required' , 'string'],
            'image' => ['nullable' , 'mimes:jpeg,jpg,png'],
        ]);

        $image = '';
        $aboutUs = AboutUs::whereId($id)->first()->image ;
        if($request->image)
        {
            if ($aboutUs)
            {
                unlink(storage_path('app/public/'.$aboutUs));
            }
            $image = $request->file('image')->store('about_us' , 'public') ;
        }
        else
        {
            $image = $aboutUs;
        }


        AboutUs::whereId($id)->update([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'message_ar' => $request->message_ar ,
            'message_en' => $request->message_en ,
            'image' => $image ,
        ]);

        return redirect()->route('admin.aboutUs.index')->withsuccess('Operation accomplished successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutUs = AboutUs::whereId($id)->first();
        if ($aboutUs->image)
        {
            unlink(storage_path('app/public/'.$aboutUs->image));
        }
        $aboutUs->delete();
        return redirect()->route('admin.aboutUs.index')->withsuccess('Operation accomplished successfully');
    }
}
