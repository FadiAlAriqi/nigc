<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MainContent;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index(Message $message)
    {
        $mainContent = MainContent::latest()->first();
        return view('admin.messages.index')->with([
            'messages' => $message->all(),
            'mainContent' => $mainContent,
        ]);
    }

    public function create()
    {
        return view('admin.messages.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'message_ar' => ['required' , 'string'],
            'message_en' => ['required' , 'string'],
        ]);

        Message::create([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'message_ar' => $request->message_ar ,
            'message_en' => $request->message_en ,
        ]);

        return redirect()->route('admin.message.index')->withsuccess('Operation accomplished successfully');
    }

    public function show(Message $message)
    {
        return view('admin.messages.show')->with('message' , $message);
    }

    public function edit(Message $message)
    {
        return view('admin.messages.edit')->with('message' , $message);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_ar' => ['required' , 'string'],
            'title_en' => ['required' , 'string'],
            'message_ar' => ['required' , 'string'],
            'message_en' => ['required' , 'string'],
        ]);

        Message::whereId($id)->update([
            'title_ar' => $request->title_ar ,
            'title_en' => $request->title_en ,
            'message_ar' => $request->message_ar ,
            'message_en' => $request->message_en ,
        ]);

        return redirect()->route('admin.message.index')->withsuccess('Operation accomplished successfully');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.message.index')->withsuccess('Operation accomplished successfully');
    }
}
