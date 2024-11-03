<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\error;

class UserController extends Controller
{

    public function index(User $user)
    {
        return view('admin.users.index')->with('users' , $user->all());
    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255' , 'unique:users'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable' , 'unique:users' , /*'regex:/^(((\+|00)9677|0?7)[01378]\d{7}|((\+|00)967|0)[1-7]\d{6})$/'*/],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:4'],
        ]);

        User::create([
            'name' => $request->name ,
            'username' => $request->username ,
            'email' => $request->email ,
            'phone' => $request->phone ,
            'password' => Hash::make($request['password'])
        ]);

        return redirect()->route('admin.user.index')->withsuccess('Operation accomplished successfully');
    }

    public function show(User $user)
    {
        return view('admin.users.show')->with('user' , $user);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit')->with('user' , $user);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'phone' => ['nullable' , /*'regex:/^(((\+|00)9677|0?7)[01378]\d{7}|((\+|00)967|0)[1-7]\d{6})$/'*/],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:4'],
        ]);

        User::whereId($id)->update([
            'name' => $request->name ,
            'username' => $request->username ,
            'email' => $request->email ,
            'phone' => $request->phone ,
            'password' => Hash::make($request['password']),

        ]);

        return redirect()->route('admin.user.index')->withsuccess('Operation accomplished successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->withsuccess('Operation accomplished successfully');
    }
}
