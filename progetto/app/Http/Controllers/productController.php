<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    function index() {
        $products= DB::table('product')
                    ->join('gallery', 'product.id', '=', 'gallery.product_id')
                    ->select('product.name', 'gallery.path' , 'product.id')
                    ->groupby('product.id', 'gallery.product_id')
                    ->get() ;


        return view('/shop', compact('products'));
    }


}
