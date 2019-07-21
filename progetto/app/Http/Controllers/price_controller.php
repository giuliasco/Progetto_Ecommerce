<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class price_controller extends Controller
{
    function cazzi(Request $request)
    {
        $products = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path', 'product.id', 'product.price', 'product.brand','category.type')
            ->where('product.price', ">", 0)
            ->where('category.type',"=",'Woman')
            ->paginate(9);

        if($request->ajax())             return view('productInclude', compact('products'))->render();

        return view('productInclude', compact('products'));

    }
}
