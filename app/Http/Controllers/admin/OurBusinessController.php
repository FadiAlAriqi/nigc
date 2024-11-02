<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OurBusiness;
use App\Models\OurBusinessImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurBusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_businesses = OurBusiness::all();
        return view('admin.ourBusiness.index')->with('our_businesses', $our_businesses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ourBusiness.add');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ourBusiness = OurBusiness::whereId($id)->first();
        return view('admin.ourBusiness.show')->with('ourBusiness', $ourBusiness);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ourBusiness = OurBusiness::whereId($id)->first();
        return view('admin.ourBusiness.edit')->with('ourBusiness', $ourBusiness);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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

    /**
     * Remove the specified resource from storage.
     */
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
}
