<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class singleproductController extends Controller
{
    function dettagli($id)
    {
        $details= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price')
            ->where('product.id', "=", $id)
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;

        //echo $details;
        return view('/single-product-details', compact('details'));
    }
}