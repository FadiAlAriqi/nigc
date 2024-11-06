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
        $service = Service::all();
        $serves = Serve::all();
        $slideshow = Slideshow::all();
        $contact = Contact::latest()->first();
        $aboutUs = AboutUs::latest()->first();
        $messageAndVision = MessageAndVision::latest()->first();
        $socialMedia = SocialMedia::get();
        $ourBusinesses = OurBusiness::orderByDesc('id')->latest()->take(5)->get();
        $ourBusinessImages = OurBusinessImages::latest()->first();

        return view('website.index')->with([
            'services' => $service,
            'serves' => $serves,
            'slideshow' => $slideshow,
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
