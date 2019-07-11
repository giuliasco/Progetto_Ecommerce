<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class singleproductController extends Controller
{
    function dettagli($id)
    {
        $details= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->where('product.id', "=", $id)
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;


        return view('/single-product-details', compact('details'));
    }

    function search (Request $request){
        $query = $request->input('query' );
        $products = DB::table('product')
            ->join('category','category.id', '=', 'product.category_id')
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand')
        ->where('product.name','like',"%{$query}%",'OR','product.brand','like',"%{$query}%" )
        ->where('category.name','like',"%{$query}%",'OR','product.brand','like',"%{$query}%" )
        ->where('product.brand','like',"%{$query}%",'OR','product.brand','like',"%{$query}%" )->get();

        $carts= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->join('shopping_cart', 'product.id', '=', 'shopping_cart.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;


        return view ('search_results' , compact('products' ));
    }

    function addtocart($id) {

        DB::table('shopping_cart')->insert([
            'product_id' => $id,
            'users_id' => 1

        ]);
        $carts= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->join('shopping_cart', 'product.id', '=', 'shopping_cart.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;

        return view('cart' , compact('carts', $carts));
    }

    function cartlist(){
        $carts= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->join('shopping_cart', 'product.id', '=', 'shopping_cart.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;
        return view('cart' )->with('carts', $carts);
    }
}
