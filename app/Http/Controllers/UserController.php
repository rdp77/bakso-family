<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        // dd($user);
        return view('pages.backend.user', ['user' => $user]);
    }

    public function create()
    {
        return view('pages.backend.userCreate');
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => 'max:255',
            'tlp' => 'numeric',
            'role' => 'required',
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'admin' => $req->role,
            'image' => 'default.svg',
        ]);

        return redirect('/user');
    }

    public function edit($id)
    {
        $product = User::find($id);
        return view('pages.backend.productEdit', ['product' => $product]);
    }

    public function update($id, Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'price' => 'required',
        ]);

        $product = User::find($id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->save();
        return redirect('/user');
    }

    public function delete($id)
    {
        $product = User::find($id);
        $product->delete();
        return redirect('/user');
    }

    public function history()
    {
        return view('pages.userHistory');
    }

    public function status()
    {
        return view('pages.userStatus');
    }

    public function password()
    {
        return view('pages.userPassword');
    }

    public function profile()
    {
        return view('pages.userProfile');
    }

    public function settings()
    {
        return view('pages.usersettings');
    }
}
