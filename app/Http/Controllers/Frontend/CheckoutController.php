<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
       
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('Frontend.checkout', compact('cartitems'));
    }
    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->shop_id = $request->input('shop_id');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->postcode = $request->input('postcode');

        //Calculate the price
        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $product)
        {
            $total += $product->products->price * $product->product_quantity;
        }

        $order->total_price = $total;

        $order->tracking_no = 'grocery'.rand(1111,9999);
        $order->save();

       
        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems as $cartitem)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $cartitem->product_id,
                'qty' => $cartitem->product_quantity,
                'price' => $cartitem->products->price * $cartitem->product_quantity,

            ]);
            $product = Product::where('id', $cartitem->product_id)->first();
            $product->quantity = $product->quantity - $cartitem->product_quantity;
            $product->update();
        }
        
        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

        return redirect('/home2')->with('status', "order placed successfully");

    }
    public function success()
    {
       return view('success');
    }
  
}
