<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_quantity = $request->input('product_quantity');

        if(Auth::check())
        {
            $product_check =Product::where('id', $product_id)->first();

            if($product_check)
            {
                if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => $product_check->product_name." already added to cart"]);
                }
                else
                {
                    if($product_check =Product::where('quantity', '0')){
                        return response()->json(['status' => $product_check->product_name." Out of stock"]);

                    }else{
                     $cartItem =new Cart();
                     $cartItem->product_id = $product_id;
                     $cartItem->user_id = Auth::id();
                     $cartItem->shop_id = $product_check->shop_id;
                     $cartItem->product_quantity = $product_quantity;
                     $cartItem->save();
                     return response()->json(['status' => $product_check->product_name." added to cart"]);
                    }
                }  
            }
        }
        else
        {
            return response()->json(['status' => "Login to the sistem"]);
        }
    }
    public function viewcart()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('Frontend.cart', compact('cartitems'));
    }
    public function deleteproduct(Request $request)
    {
        if(Auth::check())
        {
            $product_id = $request->input('product_id');
            if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
            {
                $cartitem = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cartitem->delete();
                return response()->json(['status' => "Product Deleted Successfully"]);
            }
        }
        else
        {
            return response()->json(['status' => "Login to Continue"]);
        }
        
    }
    public function updatecart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_quantity = $request->input('product_quantity');

        if(Auth::check())
        {
            if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
            {
                $cart = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cart->product_quantity = $product_quantity;
                $cart->update();
                return response()->json(['status'=> "Updated Quantity"]);
            }
        }
    }
    public function cartcount()
    {
        $cartcount = Cart::where('user_id', Auth::id())->count();
        return response()->json(['count'=> $cartcount]);
    }
}
