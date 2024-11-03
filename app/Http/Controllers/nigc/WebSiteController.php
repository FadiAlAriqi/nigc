<?php

namespace App\Http\Controllers\nigc;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\MainContent;
use App\Models\ManagerSpeech;
use App\Models\Message;
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
        $mainContent = MainContent::latest()->first();
        $contact = Contact::latest()->first();
        $aboutUs = AboutUs::latest()->first();
        $managerSpeech = ManagerSpeech::latest()->first();
        $messageAndVision = MessageAndVision::latest()->first();
        $socialMedia = SocialMedia::get();
        $ourBusiness = OurBusiness::latest()->first();
        $ourBusinessImages = OurBusinessImages::latest()->first();

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
            'ourBusiness' => $ourBusiness,
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
