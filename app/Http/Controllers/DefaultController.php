<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    public function shop()
    {
        $product = Product::all();
        $total = DB::table('product')->select('*')->count();
        if (Auth::check()) {
            $cart = \Cart::session(Auth::user()->id)->getContent()->count();
            return view('pages.shop', ['product' => $product, 'total' => $total, 'cart' => $cart]);
        } else {
            return view('pages.shop', ['product' => $product, 'total' => $total]);
        }
    }

    public function show(Product $id)
    {
        // return $id;
        $list = explode(",", $id->list);
        return view('pages.shopDetails', ['product' => $id, 'list' => $list]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
