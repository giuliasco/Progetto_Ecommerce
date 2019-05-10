<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class singleproductController extends Controller
{
    function details()
    {
        $details = DB::table('product')
            ->select('product.description', 'product.price')
            ->get();


        return view('/single-product-details', compact('details'));
    }
}