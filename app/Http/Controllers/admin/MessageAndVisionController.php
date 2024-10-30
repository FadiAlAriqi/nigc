<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MainContent;
use App\Models\MessageAndVision;
use Illuminate\Http\Request;

class MessageAndVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MessageAndVision $messageAndVision)
    {
        $mainContent = MainContent::latest()->first();
        return view('admin.messages.messageAndVision.index')->with([
            'messageAndVision' => $messageAndVision->all(),
            'mainContent' => $mainContent,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.messages.messageAndVision.add');
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
            'image' => ['nullable' , 'mimes:jpeg,jpg,png'],
        ]);

        $image = '';
        if($request->image)
        {
            $image = $request->file('image')->store('message_and_vision' , 'public') ;
        }
        else
        {
            $image = '';
        }

        $existingRecord = MessageAndVision::first();

        if (!$existingRecord) {
            MessageAndVision::create([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
                'message_ar' => $request->message_ar,
                'message_en' => $request->message_en,
                'image' => $image,
            ]);
            return redirect()->route('admin.messageAndVision.index')->withsuccess('Operation accomplished successfully');
        }

        else
        {
            $notification = array(
                'message' => 'You can not add, there is already record, you can edit previous information ',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.messageAndVision.index')->with($notification);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(MessageAndVision $messageAndVision)
    {
        return view('admin.messages.messageAndVision.show')->with('messageAndVision' , $messageAndVision);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MessageAndVision $messageAndVision)
    {
        return view('admin.messages.messageAndVision.edit')->with('messageAndVision' , $messageAndVision);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

//        dd($request->all());

        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'message_ar' => ['required' , 'string'],
            'message_en' => ['required' , 'string'],
            'image' => ['nullable' , 'mimes:jpeg,jpg,png'],
        ]);

        $image = '';
        $messageAndVision = MessageAndVision::whereId($id)->first()->image ;

        if($request->image)
        {
            if ($messageAndVision)
            {
                unlink(storage_path('app/public/'.$messageAndVision));
            }
            $image = $request->file('image')->store('message_and_vision' , 'public') ;
        }
        else
        {
            $image = $messageAndVision;
        }

        MessageAndVision::whereId($id)->update([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'message_ar' => $request->message_ar ,
            'message_en' => $request->message_en ,
            'image' => $image ,
        ]);

        return redirect()->route('admin.messageAndVision.index')->withsuccess('Operation accomplished successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MessageAndVision $messageAndVision)
    {
        if ($messageAndVision->image)
        {
            unlink(storage_path('app/public/'.$messageAndVision->image));
        }
        $messageAndVision->delete();
        return redirect()->route('admin.messageAndVision.index')->withsuccess('Operation accomplished successfully');
    }
}
