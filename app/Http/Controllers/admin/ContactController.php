<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MainContent;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contact $contact)
    {
        $mainContent = MainContent::latest()->first();
        return view('admin.contact.index')->with([
            'contacts' => $contact->all(),
            'mainContent' => $mainContent,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address_ar' => ['required', 'string', 'max:255'],
            'address_en' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required' , 'numeric'],
        ]);

        $existingRecord = Contact::first();

        if (!$existingRecord)
        {
            Contact::create([
                'address_ar' => $request->address_ar ,
                'address_en' => $request->address_en ,
                'email' => $request->email ,
                'phone' => $request->phone ,
            ]);
            return redirect()->route('admin.contact.index')->withsuccess('Operation accomplished successfully');
        }

        else
        {
            $notification = array(
                'message' => 'You can not add, there is already record, you can edit previous contact information ',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.contact.index')->with($notification);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show')->with('contact' , $contact);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit')->with('contact' , $contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'address_ar' => ['required', 'string', 'max:255'],
            'address_en' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'numeric'],
        ]);

        Contact::whereId($id)->update([
            'address_ar' => $request->address_ar ,
            'address_en' => $request->address_en ,
            'email' => $request->email ,
            'phone' => $request->phone ,
        ]);

        return redirect()->route('admin.contact.index')->withsuccess('Operation accomplished successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact.index')->withsuccess('Operation accomplished successfully');
    }
}