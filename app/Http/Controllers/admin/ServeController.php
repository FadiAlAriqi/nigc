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
            'icon' => ['required'],
        ]);

        Serve::create([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'number' => $request->number ,
            'icon' => $request->icon ,
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
            'icon' => ['required'],
        ]);

        Serve::whereId($id)->update([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'number' => $request->number ,
            'icon' => $request->icon ,
        ]);

        return redirect()->route('admin.serve.index')->withsuccess('Operation accomplished successfully');
    }

    public function destroy(Serve $serve)
    {
        $serve->delete();
        return redirect()->route('admin.serve.index')->withsuccess('Operation accomplished successfully');
    }
}
