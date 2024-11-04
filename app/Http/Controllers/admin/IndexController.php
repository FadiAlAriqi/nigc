<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Serve;
use App\Models\Service;
use App\Models\Slideshow;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $users = User::all();
        $services = Service::all();
        $socialMedia = SocialMedia::all();
        $slider = Slideshow::all();
        return view('admin.index')->with([
            'users' => $users,
            'services' => $services,
            'slider' => $slider,
            'socialMedia' => $socialMedia,
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
