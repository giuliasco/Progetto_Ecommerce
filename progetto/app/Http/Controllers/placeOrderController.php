<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class placeOrderController extends Controller
{
    function complete()
    {

        $user_id = Auth::user()->getAuthIdentifier();
        $date = date("Y-m-d");
        $payment_id = DB::table('payment_method')
            ->select('payment_method.id')
            ->where('user_id', '=', $user_id)
            //->limit(1)
            ->get();

        $total_price = DB::table('shopping_cart')
            ->select('shopping_cart.subtotal')
            ->sum('subtotal');

        DB::table('order')->insert([
            'data' => $date,
            'user_id' => $user_id,
            'total_price' => $total_price,
            'payment_id' => 1
        ]);


        return view('/pippo');

    }

    function final(){

        $user_id=Auth::user()->getAuthIdentifier();

        $order_id= DB::table('order')
            ->select('order.id')
            ->where('order.user_id','=',$user_id)
            ->get()
        DB::table('')

    }

}
