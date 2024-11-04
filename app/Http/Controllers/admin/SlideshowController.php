<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{

    public function index(Slideshow $slideshow)
    {
        return view('admin.slideshow.index')->with([
            'slideshow' => $slideshow->all(),
        ]);
    }

    public function create()
    {
        return view('admin.slideshow.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => ['required' /*, 'mimes:png,jpg,jpeg'*/]
        ]);

        foreach ($request->images as $image)
        {
            Slideshow::create([
                'image' => $image->store('slideshow' , 'public') ,
            ]);
        }

        return redirect()->route('admin.slideshow.index')->withsuccess('Operation accomplished successfully');
    }

    public function show(Slideshow $slideshow)
    {
        return view('admin.slideshow.show')->with('slideshow' , $slideshow);
    }

    public function edit(Slideshow $slideshow)
    {
        return view('admin.slideshow.edit')->with('slideshow' , $slideshow);
    }

    public function update(Request $request, string $id)
    {
//        dd($request->all());
        $request->validate([
            'image' => ['required' /*, 'mimes:png,jpg,jpeg'*/]
        ]);

        $image = '';
        $slideshow = Slideshow::whereId($id)->first()->image;
        if($request->image)
        {
            if ($slideshow)
            {
                unlink(storage_path('app/public/'.$slideshow));
            }
            $image = $request->file('image')->store('slideshow' , 'public') ;
        }
        else
        {
            $image = $slideshow;
        }

        Slideshow::whereId($id)->update([
            'image' => $image ,
        ]);


        return redirect()->route('admin.slideshow.index')->withsuccess('Operation accomplished successfully');
    }

    public function destroy(Slideshow $slideshow)
    {
        if ($slideshow->image)
        {
            unlink(storage_path('app/public/'.$slideshow->image));
        }
        $slideshow->delete();
        return redirect()->route('admin.slideshow.index')->withsuccess('Operation accomplished successfully');
    }
}
