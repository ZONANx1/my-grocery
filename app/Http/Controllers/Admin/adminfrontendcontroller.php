<?php

namespace App\Http\Controllers\admin;

use App\Models\Shop;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class adminfrontendcontroller extends Controller
{
    public function index ()
    {
        return view('admin.index');
    }
    public function customer ()
    {
        if(Auth::check())
        {
        $shop = Shop::where('city', Auth::user()->city)->get();
        $product =Product::paginate(8);
        return view('Frontend.index', compact('shop','product'));
        }else{
            return Redirect::back()->with('status', "Login to Continue");
        }
    }
    public function productdetails($id)
    {
        $product = Product::find($id);
        return view('Frontend.productdetails',compact('product'));

    }
    public function shopdetails($id)
    {
        $shop = Shop::find($id);
        return view('Frontend.shopdetails', compact('shop'));
    }
    public function homepage()
    {
        $shop = Shop::all();
        $product =Product::latest()->paginate(8);
        return view('Frontend.index',compact('shop','product'));
    }
}
