<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class category extends Controller
{
    function categoriaDonna(Request $request, $sex, $name ){

        $products = DB::table('product')
            ->join('category' , 'category.id' , '=', 'product.category_id' )
            ->join('gallery','product.id','=','gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->where('category.name', "=", $name)
            ->where('category.type',"=", $sex)
            ->paginate(9);

        if($request->ajax())             return view('productInclude', compact('products'))->render();


        return view('productInclude', compact('products'));

    }
    function categoryPrice1(Request $request)
    {

        $products = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path', 'product.id', 'product.price', 'product.brand','category.type','category.name')
            ->where('product.price', '<=', 25)
            ->paginate(9);

        if($request->ajax())             return view('productInclude', compact('products'))->render();


        return view('productInclude', compact('products'));

    }

    function categoryPrice2(Request $request)
    {
        $products = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path', 'product.id', 'product.price', 'product.brand','category.type')
            ->where('product.price', ">", 25)
            ->where('product.price','<',50)
            ->paginate(9);

        if($request->ajax())             return view('productInclude', compact('products'))->render();

        return view('productInclude', compact('products'));

    }

    function categoryPrice3(Request $request)
    {
        $products = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path', 'product.id', 'product.price', 'product.brand','category.type')
            ->where('product.price', ">", 50)
            ->where('product.price','<=',100)
            ->paginate(9);

        if($request->ajax())             return view('productInclude', compact('products'))->render();

        return view('productInclude', compact('products'));

    }

    function categoryPrice4(Request $request)
    {
        $products = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path', 'product.id', 'product.price', 'product.brand','category.type')
            ->where('product.price', ">", 100)
            ->paginate(9);

        if($request->ajax())             return view('productInclude', compact('products'))->render();

        return view('productInclude', compact('products'));

    }
}
