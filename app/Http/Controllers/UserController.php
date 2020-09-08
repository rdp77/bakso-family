<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        return view('pages.backend.user', ['user' => $user]);
    }

    public function create()
    {
        return view('pages.backend.userCreate');
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'price' => 'required',
        ]);

        User::create([
            'name' => $req->name,
            'price' => $newprice
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
}
