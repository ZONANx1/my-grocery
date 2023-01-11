<?php

namespace App\Http\Controllers\admin;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminShopController extends Controller
{
    public function index()
    {
        $shop = DB::table('shops')->where('user_id', Auth::id())->get();
        return view('admin.shop.index', compact('shop'));
    }
    public function add()
    {
        return view('admin.shop.createshop');
    }
    public function createshop(Request $request)
    {
        $shop = new Shop();
        if($request->hasFile('shop_img'))
        {
            $file = $request->file('shop_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/shopimage/',$filename);
            $shop->shop_img = $filename;
        }

        $shop->shop_name = $request->input('shop_name');
        $shop->tell_no = $request->input('tell_no');
        $shop->address = $request->input('address');
        $shop->city = $request->input('city');
        $shop->postcode = $request->input('postcode');
        $shop->state = $request->input('state');
        $shop->user_id = $request->input('user_id');
        $shop->save();
        return redirect('/shop')->with('status', "Shop is created successfully");
    }
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('admin.shop.editshop', compact('shop'));
    }
    public function editshop(Request $request, $id)
    {
        $shop = Shop::find($id);
        if($request->hasFile('shop_img'))
        {
            $path = 'assets/upload/shopimage/'.$shop->shop_img;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('shop_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/shopimage/',$filename);
            $shop->shop_img = $filename;
        }
        $shop->shop_name = $request->input('shop_name');
        $shop->tell_no = $request->input('tell_no');
        $shop->address = $request->input('address');
        $shop->city = $request->input('city');
        $shop->postcode = $request->input('postcode');
        $shop->state = $request->input('state');
        $shop->update();

        return redirect('/shop')->with('status', "Shop is updated successfully");
    }
    public function deleteshop($id)
    {
        $shop = Shop::find($id);
        if($shop->shop_img)
        {
            $path = 'assets/upload/shopimage/'.$shop->shop_img;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $shop->delete();
        return redirect('/shop')->with('status', "Shop is deleted successfully");
    }
    public function detailsShop($id)
    {
        $shop = Shop::find($id);
        return view('admin.shop.details', compact('shop'));
    }
    
}
