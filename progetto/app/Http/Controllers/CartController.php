<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    function removefromcart($id) {


        DB::table('shopping_cart')->where('product_id', '=' , $id)//->where('size','=','$size')
            ->delete();

        $carts= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->join('shopping_cart', 'product.id', '=', 'shopping_cart.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;

        $cartsubtotal=DB::table('shopping_cart')
            ->select('subtotal')
            ->sum('subtotal');

        return view('cart' , compact('carts', 'cartsubtotal'));

    }
}
