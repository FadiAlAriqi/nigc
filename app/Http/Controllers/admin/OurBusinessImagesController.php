<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OurBusiness;
use App\Models\OurBusinessImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurBusinessImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OurBusinessImages $ourBusinessImages)
    {
        return view('admin.ourBusiness.images.index')->with('ourBusinessImages', $ourBusinessImages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $OurBusiness = OurBusiness::whereId($id)->first();

        return view('admin.ourBusiness.images.add')->with('OurBusiness', $OurBusiness);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $OurBusinessId = $request->OurBusinessId ;

        DB::beginTransaction();
        try {
            if ($request->business_images) {
                foreach ($request->business_images as $business_image) {
                    OurBusinessImages::create([
                        'image' => $business_image->store('our_business', 'public'),
                        'our_business_id' => $OurBusinessId,
                    ]);
                }
            }
            DB::commit();
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return redirect()->route('admin.ourBusiness.showImages', $OurBusinessId);
        }

        return redirect()->route('admin.ourBusiness.showImages', $OurBusinessId);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ourBusinessImage = OurBusinessImages::whereId($id)->first();

        $ourBusinessId = $ourBusinessImage->our_business_id;
        return view('admin.ourBusiness.images.show',compact('ourBusinessImage', 'ourBusinessId'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ourBusinessImage = OurBusinessImages::whereId($id)->first();
        $ourBusinessId = $ourBusinessImage->our_business_id;

        return view('admin.ourBusiness.images.edit',compact('ourBusinessImage', 'ourBusinessId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $ourBusinessImageId = $request->ourBusinessId;

        $image = '';
        $oldImage = OurBusinessImages::whereId($id)->first()->image ;
        if($request->image)
        {
            if ($oldImage)
            {
                unlink(storage_path('app/public/'.$oldImage));
            }
            $image = $request->file('image')->store('our_business' , 'public') ;
        }
        else
        {
            $image = $oldImage;
        }

        $ourBusinessImage = OurBusinessImages::whereId($id)->update([
            'image'=>$image,
        ]);

        if ($ourBusinessImage)
        {
            return redirect()->route('admin.ourBusiness.showImages', $ourBusinessImageId);
        }
        return redirect()->route('admin.ourBusiness.showImages', $ourBusinessImageId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ourBusinessImage = OurBusinessImages::whereId($id)->first();
        $ourBusinessId = $ourBusinessImage->our_business_id;

        if ($ourBusinessImage->image)
        {
            unlink(storage_path('app/public/'.$ourBusinessImage->image));
        }

        $ourBusinessImage->delete();

        return redirect()->route('admin.ourBusiness.showImages', $ourBusinessId);
    }
}
