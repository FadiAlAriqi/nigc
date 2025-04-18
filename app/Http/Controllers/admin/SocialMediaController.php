<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{

    public function index(SocialMedia $socialMedia)
    {
        return view('admin.socialMedia.index')->with([
            'socialMedia' => $socialMedia->all(),
        ]);
    }

    public function create()
    {
        return view('admin.socialMedia.add');
    }

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

    public function show(SocialMedia $socialMedia)
    {
        return view('admin.socialMedia.show')->with('socialMedia' , $socialMedia);
    }

    public function edit(SocialMedia $socialMedia)
    {
        return view('admin.socialMedia.edit')->with('socialMedia' , $socialMedia);
    }

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

    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return redirect()->route('admin.socialMedia.index')->withsuccess('Operation accomplished successfully');
    }
}
