<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\MainContent;
use App\Models\ManagerSpeech;
use Illuminate\Http\Request;

class ManagerSpeechController extends Controller
{

    public function index(ManagerSpeech $managerSpeech)
    {
        $mainContent = MainContent::latest()->first();
        return view('admin.messages.managerSpeech.index')->with([
            'managerSpeech' => $managerSpeech->all(),
            'mainContent' => $mainContent,
        ]);
    }

    public function create()
    {
        return view('admin.messages.managerSpeech.add');
    }

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
            $image = $request->file('image')->store('manager_speech' , 'public') ;
        }
        else
        {
            $image = '';
        }

        $existingRecord = ManagerSpeech::first();

        if (!$existingRecord) {
            ManagerSpeech::create([
                'title_ar' => $request->title_ar ,
                'title_en' => $request->title_en ,
                'message_ar' => $request->message_ar ,
                'message_en' => $request->message_en ,
                'image' => $image ,
            ]);
            return redirect()->route('admin.managerSpeech.index')->withsuccess('Operation accomplished successfully');
        }

        else
        {
            $notification = array(
                'message' => 'You can not add, there is already record, you can edit previous information ',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.managerSpeech.index')->with($notification);
        }

    }

    public function show(ManagerSpeech $managerSpeech)
    {
        return view('admin.messages.managerSpeech.show')->with('managerSpeech' , $managerSpeech);
    }

    public function edit(ManagerSpeech $managerSpeech)
    {
        return view('admin.messages.managerSpeech.edit')->with('managerSpeech' , $managerSpeech);
    }

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
        $managerSpeech = ManagerSpeech::whereId($id)->first()->image ;
        if($request->image)
        {
            if ($managerSpeech)
            {
                unlink(storage_path('app/public/'.$managerSpeech));
            }
            $image = $request->file('image')->store('manager_speech' , 'public') ;
        }
        else
        {
            $image = $managerSpeech;
        }

        ManagerSpeech::whereId($id)->update([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'message_ar' => $request->message_ar ,
            'message_en' => $request->message_en ,
            'image' => $image ,
        ]);

        return redirect()->route('admin.managerSpeech.index')->withsuccess('Operation accomplished successfully');
    }

    public function destroy(ManagerSpeech $managerSpeech)
    {
        if ($managerSpeech->image)
        {
            unlink(storage_path('app/public/'.$managerSpeech->image));
        }
        $managerSpeech->delete();
        return redirect()->route('admin.managerSpeech.index')->withsuccess('Operation accomplished successfully');
    }
}
