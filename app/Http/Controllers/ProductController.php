<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
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
        $product = Product::all();
        return view('pages.backend.product', ['product' => $product]);
    }

    public function create()
    {
        return view('pages.backend.productCreate');
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,svg|max:2000',
        ]);

        $id = Product::max('id') + 1;

        if ($req->hasFile('image')) {
            $imagePath = $req->file('image');
            $fileName =  $id . '.' . $imagePath->getClientOriginalExtension();
            $imagePath->move(public_path('storage/product'), $fileName);
        } else {
            $fileName =  'default.svg';
        }

        $newprice = str_replace(',', '', $req->price);

        Product::create([
            'name' => $req->name,
            'price' => $newprice,
            'image' => $fileName,
        ]);

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.backend.productEdit', ['product' => $product]);
    }

    public function update($id, Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'price' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->save();
        return redirect('/product');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }
}
