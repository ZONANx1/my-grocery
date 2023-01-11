<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Prodcuct;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {   
    	 $userid=Auth::id();
        $orders = Order::orderby('created_at','desc')->get();
        $totalsales = Order::where('shop_id',$userid)->sum('total_price');
        $OrderNotComplete = Order::whereDate('created_at', Carbon::now())->where('shop_id',$userid)->where('status',0)->count();
        $OrderComplete = Order::whereDate('created_at', Carbon::now())->where('shop_id',$userid)->where('status',1)->count();
        $todaySales = Order::whereDate('created_at', Carbon::now())->where('shop_id',$userid)->where('status',1)->sum('total_price');

        //chart
        $dt = Carbon::now();
  	    $one_week_ago = $dt->subDays(7);
  	    $labels = [];
  	    $count = [];
        $Arrcategory = [];

	    $sales = DB::table('orders')
	      ->where('status', 1)
	      ->where('created_at', '>', $one_week_ago)
	      ->orderBy('created_at', 'asc')
	      ->select(DB::raw("DATE_FORMAT(created_at, '%Y %m %e') as date"), DB::raw('SUM(`total_price`) as 
	      total'))
	      ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y %m %e')"))
	      ->get();

	      foreach ($sales as $sale) {
	        array_push($labels, $sale->date);
	        array_push($count, $sale->total);
	      }


        /*$prod_id= DB::table('order_items')
            ->get(['prod_id']);

        $products=DB::table('products')
             ->where('id' , $prod_id);
             ->select(DB::raw('category as category') , DB::raw('category as category'));
             ->get();

        

        foreach ($products as $product) {
          array_push($Arrcategory, $product->category)
        }*/

        return view('admin.dashboard.index',[
            'orders'=>$orders,
            'totalsales'=>$totalsales,
            'OrderNotComplete'=>$OrderNotComplete,
            'OrderComplete'=>$OrderComplete,
            'todaySales'=>$todaySales,


        ],)->with('labels',json_encode($labels,JSON_NUMERIC_CHECK))->with('count',json_encode($count,JSON_NUMERIC_CHECK));//->with('Arrcategory',json_encode($Arrcategory,JSON_NUMERIC_CHECK)); 
       
    }
    
}
