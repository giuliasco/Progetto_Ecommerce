<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    function index($sex) {
        $products= DB::table('product')

            ->join('category','category.id', '=', 'product.category_id')
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand')
            ->where('category.type','=', $sex)
            ->groupby('product.id', 'gallery.product_id')
            ->get();


        return view('/shop', compact('products'));

    }
    function collezione() {
        $products= DB::table('product')

            ->join('category','category.id', '=', 'product.category_id')
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand')
            ->groupby('product.id', 'gallery.product_id')
            ->get();


        return view('/shop', compact('products'));

    }

    function ciaociao($sex)
    {
        $products = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path', 'product.id', 'product.price', 'product.brand')
            ->where('category.type', '=', $sex)
            ->groupby('product.id', 'gallery.product_id')
            ->get();

        return view('/productInclude', compact('products'));

    }


}
/*->join('gallery', 'product.id', '=', 'gallery.product_id')
                   ->select('product.name', 'gallery.path' , 'product.id')
                   ->groupby('product.id', 'gallery.product_id')
                   ->get() ;*/

function search (Request $request){
     return view ('search_results');
}



