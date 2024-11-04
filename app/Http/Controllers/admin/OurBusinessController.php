<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\MainContent;
use App\Models\ManagerSpeech;
use App\Models\MessageAndVision;
use App\Models\OurBusiness;
use App\Models\OurBusinessImages;
use App\Models\Serve;
use App\Models\Service;
use App\Models\Slideshow;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurBusinessController extends Controller
{

    public function index()
    {
        $our_businesses = OurBusiness::all();
        return view('admin.ourBusiness.index')->with('our_businesses', $our_businesses);
    }

    public function create()
    {
        return view('admin.ourBusiness.add');
    }

    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'title_ar' => ['required', 'string'],
            'title_en' => ['required' , 'string'],
            'business_description_ar' => ['required', 'string'],
            'business_description_en' => ['required', 'string'],
            'business_images' => ['required'],
            'note_ar' => ['required', 'string'],
            'note_en' => ['required', 'string'],
        ]);

        DB::beginTransaction();
        try {
            $our_business = OurBusiness::create([
                'title_ar' => $request->title_ar ,
                'title_en' => $request->title_en ,
                'business_description_ar' => $request->business_description_ar ,
                'business_description_en' => $request->business_description_en ,
                'note_ar' => $request->note_ar ,
                'note_en' => $request->note_en ,
            ]);
            if ($our_business) {
                foreach ($request->business_images as $business_image) {
                    OurBusinessImages::create([
                        'image' => $business_image->store('our_business', 'public'),
                        'our_business_id' => $our_business->id,
                    ]);
                }
            }
            DB::commit();
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return redirect()->route('admin.ourBusiness.index')->withError($e->getMessage());
        }

        return redirect()->route('admin.ourBusiness.index');
    }

    public function show(string $id)
    {
        $ourBusiness = OurBusiness::whereId($id)->first();
        return view('admin.ourBusiness.show')->with('ourBusiness', $ourBusiness);
    }

    public function edit(string $id)
    {
        $ourBusiness = OurBusiness::whereId($id)->first();
        return view('admin.ourBusiness.edit')->with('ourBusiness', $ourBusiness);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_ar' => ['required', 'string'],
            'title_en' => ['required' , 'string'],
            'business_description_ar' => ['required', 'string'],
            'business_description_en' => ['required', 'string'],
            'business_images' => ['required'],
            'note_ar' => ['nullable', 'string'],
            'note_en' => ['nullable', 'string'],
        ]);

        DB::beginTransaction();
        try
        {
            OurBusiness::whereId($id)->update([
                'title_ar' => $request->title_ar ,
                'title_en' => $request->title_en ,
                'business_description_ar' => $request->business_description_ar ,
                'business_description_en' => $request->business_description_en ,
                'note_ar' => $request->note_ar ,
                'note_en' => $request->note_en ,
            ]);

            if ($request->has('business_images')) {
                foreach ($request->business_images as $business_image) {
                    OurBusinessImages::create([
                        'image' => $business_image->store('our_business', 'public'),
                        'our_business_id' => $id,
                    ]);
                }
            }

            DB::commit();
        }

        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.ourBusiness.index')->withError($e->getMessage());
        }


        return redirect()->route('admin.ourBusiness.index');
    }

    public function destroy(string $id)
    {
        $ourBusiness = OurBusiness::whereId($id)->first();
        $ourBusiness->delete();
        return redirect()->route('admin.ourBusiness.index');

    }

    public function showImages(string $id)
    {
        $ourBusinessImages = OurBusinessImages::whereOurBusinessId($id)->get();

        $ourBusiness = $id;
        return view('admin.ourBusiness.images.index')->with([
            'ourBusinessImages'=> $ourBusinessImages,
            'ourBusinessId'=> $ourBusiness,
        ]);
    }

    public function showDetails(string $id , $businessId)
    {
        $ourBusinesses = OurBusiness::whereId($id);
        $service = Service::get();
        $serve = Serve::get();
        $slideshow = Slideshow::get();
        $contact = Contact::latest()->first();
        $aboutUs = AboutUs::latest()->first();
        $messageAndVision = MessageAndVision::latest()->first();
        $socialMedia = SocialMedia::get();
        $ourBusinessImages = OurBusinessImages::where('our_business_id', $businessId)->get();

        return view('website.ourBusiness.business_details.index')->with([
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

    public function showAllBusinesses()
    {
        $ourBusinesses = OurBusiness::all();
        $service = Service::get();
        $serve = Serve::get();
        $slideshow = Slideshow::get();
        $contact = Contact::latest()->first();
        $aboutUs = AboutUs::latest()->first();
        $messageAndVision = MessageAndVision::latest()->first();
        $socialMedia = SocialMedia::get();
        $ourBusinessImages = OurBusinessImages::latest()->first();

        return view('website.ourBusiness.index')->with([
            'services' => $service->all(),
            'serves' => $serve->all(),
            'slideshow' => $slideshow->all(),
//            'mainContent' => $mainContent,
            'contact' => $contact,
            'aboutUs' => $aboutUs,
//            'managerSpeech' => $managerSpeech,
            'messageAndVision' => $messageAndVision,
            'socialMedia' => $socialMedia,
            'ourBusinesses' => $ourBusinesses,
            'ourBusinessImages' => $ourBusinessImages,
        ]);
    }
}
