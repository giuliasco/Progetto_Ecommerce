<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    function index(){

        $products= DB::table('wishlist')

            ->join('product', 'product.id','=','wishlist.product_id')
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand')
            ->groupby('product.id', 'gallery.product_id')
            ->get();

        return view('/wishlist', compact('products'));

    }
}
