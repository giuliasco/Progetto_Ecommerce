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
            ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand','category.type')
            ->where('category.type','=', $sex)
            ->groupby('product.id', 'gallery.product_id')
            ->paginate(15);





        return view('/shop', compact('products'));

    }
    function collezione(Request $request) {
        $products= DB::table('product')

            ->join('category','category.id', '=', 'product.category_id')
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand','category.type')
            ->groupby('product.id', 'gallery.product_id')
            ->paginate(15);

        if($request->ajax())             return view('/shopping', compact('products'))->render();


        return view('/shopping', compact('products'));

    }

    function category_filter($sex)
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





