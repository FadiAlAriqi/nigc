<?php

namespace App\Http\Controllers\nigc;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\MessageAndVision;
use App\Models\OurBusiness;
use App\Models\OurBusinessImages;
use App\Models\Serve;
use App\Models\Service;
use App\Models\Slideshow;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{

    public function index()
    {
        $service = Service::get();
        $serve = Serve::get();
        $slideshow = Slideshow::get();
        $contact = Contact::latest()->first();
        $aboutUs = AboutUs::latest()->first();
        $messageAndVision = MessageAndVision::latest()->first();
        $socialMedia = SocialMedia::get();
        $ourBusinesses = OurBusiness::get();
        $ourBusinessImages = OurBusinessImages::latest()->first();

        return view('website.index')->with([
            'services' => $service->all(),
            'serves' => $serve->all(),
            'slideshow' => $slideshow->all(),
            'contact' => $contact,
            'aboutUs' => $aboutUs,
            'messageAndVision' => $messageAndVision,
            'socialMedia' => $socialMedia,
            'ourBusinesses' => $ourBusinesses,
            'ourBusinessImages' => $ourBusinessImages,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
