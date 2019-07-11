<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class category extends Controller
{
    function categoriaDonna($sex, $name ){
        $products = DB::table('product')
            ->join('category' , 'category.id' , '=', 'product.category_id' )
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->where('category.name', "=", $name)
            ->where('category.type',"=", $sex)
            ->get();

        return view('productInclude', compact('products'));

    }
    /*function category_filterAll($sex)
    {
        $products = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path', 'product.id', 'product.price', 'product.brand')
            ->where('category.type', '=', $sex)
            ->get();


        return view('productInclude', compact('products'));

    }*/
}
