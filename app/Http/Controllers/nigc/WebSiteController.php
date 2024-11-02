<?php

namespace App\Http\Controllers\nigc;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\MainContent;
use App\Models\ManagerSpeech;
use App\Models\Message;
use App\Models\MessageAndVision;
use App\Models\Serve;
use App\Models\Service;
use App\Models\Slideshow;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::get();
        $serve = Serve::get();
        $slideshow = Slideshow::get();
        $mainContent = MainContent::latest()->first();
        $contact = Contact::latest()->first();
        $aboutUs = AboutUs::latest()->first();
        $managerSpeech = ManagerSpeech::latest()->first();
        $messageAndVision = MessageAndVision::latest()->first();
        $socialMedia = SocialMedia::get();

        return view('website.index')->with([
            'services' => $service->all(),
            'serves' => $serve->all(),
            'slideshow' => $slideshow->all(),
            'mainContent' => $mainContent,
            'contact' => $contact,
            'aboutUs' => $aboutUs,
            'managerSpeech' => $managerSpeech,
            'messageAndVision' => $messageAndVision,
            'socialMedia' => $socialMedia,
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
