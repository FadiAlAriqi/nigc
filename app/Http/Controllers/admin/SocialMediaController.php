<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\MainContent;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SocialMedia $socialMedia)
    {
        $mainContent = MainContent::latest()->first();
        return view('admin.socialMedia.index')->with([
            'socialMedia' => $socialMedia->all(),
            'mainContent' => $mainContent,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.socialMedia.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'social_media_name_ar' => ['required', 'string', 'max:255'],
            'social_media_name_en' => ['required', 'string', 'max:255'],
            'social_media_url' => ['required', 'string', 'max:255'],
            'social_media_icon' => ['required', 'string', 'max:255'],
        ]);

        SocialMedia::create([
            'name_ar' => $request->social_media_name_ar ,
            'name_en' => $request->social_media_name_en ,
            'url' => $request->social_media_url ,
            'icon' => $request->social_media_icon ,
        ]);
        return redirect()->route('admin.socialMedia.index')->withsuccess('Operation accomplished successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialMedia $socialMedia)
    {
        return view('admin.socialMedia.show')->with('socialMedia' , $socialMedia);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialMedia $socialMedia)
    {
        return view('admin.socialMedia.edit')->with('socialMedia' , $socialMedia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'social_media_name_ar' => ['required', 'string', 'max:255'],
            'social_media_name_en' => ['required', 'string', 'max:255'],
            'social_media_url' => ['required', 'string', 'max:255'],
            'social_media_icon' => ['required', 'string', 'max:255'],
        ]);

        SocialMedia::whereId($id)->update([
            'name_ar' => $request->social_media_name_ar ,
            'name_en' => $request->social_media_name_en ,
            'url' => $request->social_media_url ,
            'icon' => $request->social_media_icon ,
        ]);
        return redirect()->route('admin.socialMedia.index')->withsuccess('Operation accomplished successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return redirect()->route('admin.socialMedia.index')->withsuccess('Operation accomplished successfully');
    }
}
