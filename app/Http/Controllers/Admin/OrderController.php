<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $shop = DB::table('shops')->where('user_id', Auth::id())->first();
        $orders = Order::where('shop_id', $shop->id)->where('status', '0')->latest()->paginate(3);
        return view('admin.order.index', compact('orders'));
    }
    public function vieworder($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.order.view',compact('orders'));
    }
    public function updateorder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('order')->with('status', "Order Updated Successfully");
    }
    public function orderhistory()
    {
        $shop = DB::table('shops')->where('user_id', Auth::id())->first();
        $orders = Order::where('shop_id', $shop->id)->where('status', '1')->latest()->paginate(3);
        return view('admin.order.history', compact('orders'));
    }
    public function orderhistoryview($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.order.historyview',compact('orders'));
    }

}
