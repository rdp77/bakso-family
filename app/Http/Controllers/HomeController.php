<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        return view('welcome');
    }

    public function dashboard()
    {
        // $count = Product::sum('id');
        // dd($count);
        return view('home');
    }

    public function checkOut()
    {
        $items = \Cart::session(Auth::user()->id)->getContent();
        $product = $items->count();
        $subtotal = \Cart::getSubTotal();
        $total = \Cart::getTotal();
        return view('pages.checkout', [
            'items' => $items, 'product' => $product, 'subtotal' => $subtotal,
            'total' => $total,
        ]);
    }
}
