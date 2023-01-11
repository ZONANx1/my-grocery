<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Shop;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class FrontendProductController extends Controller
{
    public function shopproduct($id)
    {
        $shops = Shop::where('id', $id)->first();
        $product = Product::where('shop_id', $id)->paginate(8);
        return view('Frontend.productshop', compact('product', 'shops'));
    }
    public function categoryshop($id, $category)
    {
        $shops = Shop::where('id', $id)->first();
        $product = Product::where('shop_id', $id)->where('category', $category)->paginate(8);
        return view('Frontend.productshop', compact('product', 'shops'));


    }
    public function searchproductshop(Request $request, $id)
    {
        $search_product = $request->product_search;
        $shops = Shop::where('id', $id)->first();

        if(isset($search_product) && !empty($search_product))
        {
            $product = Product::where('shop_id', $id)->where('product_name', 'LIKE', '%'.$search_product.'%')->paginate(3);
            if(!$product->isEmpty())
            {
                return view('Frontend.searchshop', compact('product', 'shops'));
            }
            else
            {
                return Redirect::back()->with('status', "Product not exist");
            }
        }
        else{
            return Redirect::back()->with('status', "Please insert product name");
        }
    }
    public function frontendproduct()
    {
        $product = Product::paginate(9);
        return view('Frontend.products.index', compact('product'));
    }
    public function categoryproduct($category)
    {
        $product = Product::where('category', $category)->paginate(9);
        return view('Frontend.products.index', compact('product'));
    }
    public function searchproduct(Request $request)
    {
        $search_product = $request->product_search;

        if(isset($search_product) && !empty($search_product))
        {
            $product = Product::where('product_name', 'LIKE', '%'.$search_product.'%')->paginate(9);
            if(!$product->isEmpty())
            {
                return view('Frontend.products.search', compact('product'));
            }
            else
            {
                $product = Product::paginate(9);
                return redirect('frontend-product')->with('status', "Product not exist");
            }
        }
        else{
            $product = Product::paginate(9);
            return redirect('frontend-product')->with('status', "Please insert product name");
        }
    }
}
