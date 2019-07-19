<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class singleproductController extends Controller
{
    function dettagli($id)
    {

        $userid= Auth::user()->id;

        $wishlist= DB::table('wishlist')
            ->where('product_id', "=", $id)
            ->where('user_id', "=", $userid)
            ->count();

        $details= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
            ->where('product.id', "=", $id)
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;

        $measure=DB::table('product')
            ->join('availability', 'product.id','=', 'availability.product_id')
            ->select('availability.size')
            ->where('availability.product_id', "=", $id)
            ->get() ;



        return view('/single-product-details', compact('details','measure', 'wishlist'));
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

    function addtocart($id,$size) {

     //   $iduser= Auth::user()->getAuthIdentifier();



       $price=DB::table('product')
            ->select('price')
            ->where('id',"=", $id)
            ->pluck('price');

        $price1= $price[0];

       /* $subtotal= $price1 * 1;*/

       // $quantity= $request->input('quantity');

      /*  $idmeasure = DB::table('availability')
            ->select('id')
            ->where('availability.size', '=', $size)
            ->where('availability.product_id', '=', $id)
            ->pluck('id');

        $currDisp = DB::table('availability')
            ->select('quantity')
            ->where('id', '=', $idmeasure[0])
            ->pluck('quantity');

        $dispAfterCartAdd = $currDisp[0] - $quantity; */


        DB::table('shopping_cart')->insert([
            'product_id' => $id,
            'users_id' => 1,
            'size' => $size,
            'quantity'=> 1,
            'subtotal' => $price1

        ]);

     /*   DB::table('availability')
            ->where('id', '=', $idmeasure[0])
            ->update(['quantity' => $dispAfterCartAdd]); */


        $carts= DB::table('shopping_cart')
            ->join('product', 'product.id', '=', 'shopping_cart.product_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            //->join('availability', 'product.id', '=', 'availability.product_id')
            ->select('product.name', 'gallery.path' ,'product.id','shopping_cart.size', 'shopping_cart.subtotal',
                'product.description', 'product.price','product.brand')
           // ->where('shopping_cart.subtotal',"=", $subtotal)
            //->where('shopping_cart.size', "=", $size)
            ->get() ;

        $cartsubtotal=DB::table('shopping_cart')
            ->select('subtotal')
            ->sum('subtotal');


        return view('cart' , compact( 'carts', 'cartsubtotal'));
    }

    /*function cartlist(){
        $carts= DB::table('product')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->join('shopping_cart', 'product.id', '=', 'shopping_cart.product_id')
            ->select('product.name', 'gallery.path' , 'product.id', 'product.description',
                'product.price','product.brand')
            ->groupby('product.id', 'gallery.product_id')
            ->get() ;
        return view('cart' )->with('carts', $carts);
    }*/
}
