<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->paginate(5);
        return view('Frontend.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('Frontend.orders.view',compact('orders'));
    }
    public function addtocart2($id)
    {
        if(Auth::check())
        {
            $product_check =Product::where('id', $id)->first();

            if($product_check)
            {
                if(Cart::where('product_id', $id)->where('user_id', Auth::id())->exists())
                {
                    return Redirect::back()->with('status', $product_check->product_name." already added to cart");
                }
                else
                {
                    if($product_check->quantity == '0'){
                        return Redirect::back()->with('status', $product_check->product_name." out of stock");

                    }else{

                     $cartItem =new Cart();
                     $cartItem->product_id = $id;
                     $cartItem->user_id = Auth::id();
                     $cartItem->product_quantity = 1;
                     $cartItem->shop_id = $product_check->shop_id;
                     $cartItem->save();
                     return Redirect::back()->with(['status' => $product_check->product_name." added to cart"]);
                    }
                 
                }  
            }
        }
        else
        {
            return redirect('/home2')->with('status', "Login to the sistem");
        }
    }
    public function indexprofile()
    {
        $user = User::where('id', Auth::id())->first();
        return view('Frontend.profile.index', compact('user'));

    }
    public function editprofile(Request $request)
    {
        $user = User::where('id', Auth::id())->first();

        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->address1 = $request->input('address1');
        $user->city = $request->input('city');
        $user->postcode = $request->input('postcode');
        $user->state = $request->input('state');

        $user->update();

        return redirect('/profile')->with('status', "Profile is updated successfully");
    }
}
