<?php

namespace App\Http\Controllers\nigc;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MainContent;
use App\Models\ManagerSpeech;
use Illuminate\Http\Request;

class ManagerSpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managerSpeech = ManagerSpeech::latest()->first();
        $mainContent = MainContent::latest()->first();
        $contact = Contact::latest()->first();


        return view('website.managerSpeech')->with([
            'managerSpeech' => $managerSpeech,
            'mainContent' => $mainContent,
            'contact' => $contact,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}