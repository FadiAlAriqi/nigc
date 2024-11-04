<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Serve;
use App\Models\Service;
use Illuminate\Http\Request;

class ServeController extends Controller
{

    public function index(Serve $serve)
    {
        return view('admin.serve.index')->with([
            'serves' => $serve->all(),
        ]);
    }

    public function create()
    {
        return view('admin.serve.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'number' => ['required' , 'numeric'],
            'image' => ['nullable' , 'mimes:svg,png'],
            'height' => ['nullable', 'numeric', 'between:0,500'],
            'width' => ['nullable', 'numeric', 'between:0,500'],
        ]);

        $image = '';
        if($request->image)
        {
            $image = $request->file('image')->store('serve' , 'public') ;
        }
        else
        {
            $image = '';
        }

        Serve::create([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'number' => $request->number ,
            'image' => $image ,
            'height' => $request->height,
            'width' => $request->width,
        ]);

        return redirect()->route('admin.serve.index')->withsuccess('Operation accomplished successfully');
    }

    public function show(Serve $serve)
    {
        return view('admin.serve.show')->with('serve' , $serve);
    }

    public function edit(Serve $serve)
    {
        return view('admin.serve.edit')->with('serve' , $serve);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'number' => ['required' , 'numeric'],
            'image' => ['nullable' , 'mimes:svg,png'],
            'height' => ['nullable', 'numeric', 'between:0,500'],
            'width' => ['nullable', 'numeric', 'between:0,500'],
        ]);

        $image = '';
        $serve = Serve::whereId($id)->first()->image ;
        if($request->image)
        {
            if ($serve)
            {
                unlink(storage_path('app/public/'.$serve));
            }
            $image = $request->file('image')->store('serve' , 'public') ;
        }
        else
        {
            $image = $serve;
        }

        Serve::whereId($id)->update([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'number' => $request->number ,
            'image' => $image ,
            'height' => $request->height,
            'width' => $request->width,
        ]);

        return redirect()->route('admin.serve.index')->withsuccess('Operation accomplished successfully');
    }

    public function destroy(Serve $serve)
    {
        if ($serve->image)
        {
            unlink(storage_path('app/public/'.$serve->image));
        }
        $serve->delete();
        return redirect()->route('admin.serve.index')->withsuccess('Operation accomplished successfully');
    }
}
