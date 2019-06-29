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

        //echo $details;
        return view('/single-product-details', compact('details'));
    }

    function search (Request $request){
        $query = $request->input('query' );
        $products = DB::table('product')
            ->join('category','category.id', '=', 'product.category_id')
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand')
        ->where('product.name','like',"%{$query}%",'OR','product.brand','like',"%{$query}%" )
        ->where('product.price','like',"%{$query}%",'OR','product.brand','like',"%{$query}%" )
        ->where('product.brand','like',"%{$query}%",'OR','product.brand','like',"%{$query}%" )->get();


        return view ('search_results')->with('products', $products);
    }
}
