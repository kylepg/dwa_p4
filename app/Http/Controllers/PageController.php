<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class PageController extends Controller
{
    public function __construct(Request $request)
    {
    }

    public function home()
    {
        $product = Product::orderBy('status_updated_at', 'desc')->first();
        $updatedBy = User::where('id', '=', $product->last_updated_by)->first();
        return view('pages/home')->with([
          'updated_at' => $product->status_updated_at,
          'updated_by_fn' => $updatedBy->first_name,
          'updated_by_ln' => $updatedBy->last_name,
        ]);
    }

    public function coffee()
    {
        return view('pages/coffee');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function account()
    {
        return view('pages/account');
    }
}
