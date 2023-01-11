<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    public function index()
    {
        $shop = DB::table('shops')->where('user_id', Auth::id())->first();
        $product = Product::where('shop_id', $shop->id)->paginate(8);
        return view('admin.product.index', compact('product', 'shop'));
    }
    public function add()
    {
        return view('admin.product.createproduct');
    }
    public function createproduct(Request $request)
    {
        $product = new Product();
        $shop = DB::table('shops')->where('user_id', Auth::id())->first();
        if($request->hasFile('product_img'))
        {
            $file = $request->file('product_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/productimage/',$filename);
            $product->product_img = $filename;
        }

        $product->product_name = $request->input('product_name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->shop_id = $shop->id;
        $product->save();
        return redirect('/product')->with('status', "Product is created successfully");
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.editproduct', compact('product'));
    }
    public function editproduct(Request $request, $id)
    {
        $product = Product::find($id);
        if($request->hasFile('product_img'))
        {
            $path = 'assets/upload/productimage/'.$product->product_img;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('product_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/productimage/',$filename);
            $product->product_img = $filename;
        }
        $product->product_name = $request->input('product_name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->update();

        return redirect('/product')->with('status', "Product is updated successfully");
    }
    public function deleteproduct($id)
    {
        $product = Product::find($id);
        if($product->product_img)
        {
            $path = 'assets/upload/productimage/'.$product->product_img;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('/product')->with('status', "Product is deleted successfully");
    }
    public function detailsProduct($id)
    {
        $product = Product::find($id);
        return view('admin.product.details', compact('product'));
    }
    public function searchadmin(Request $request, $id)
    {
        $search_product = $request->product_search;
        $shop = Shop::where('id', $id)->first();

        if(isset($search_product) && !empty($search_product))
        {
            $product = Product::where('shop_id', $id)->where('product_name', 'LIKE', '%'.$search_product.'%')->paginate(8);
            if(!$product->isEmpty())
            {
                return view('admin.product.index', compact('product', 'shop'));
            }
            else
            {
                $product = Product::paginate(8);
                return redirect('product')->with('status', "Product not exist");
            }
        }
        else{
            $product = Product::paginate(8);
            return redirect('product')->with('status', "Please insert product name");
        }
    }
}
