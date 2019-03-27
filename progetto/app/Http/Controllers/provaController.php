<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\View;
class provaController extends Controller
{
    function prova(){
        $categories = Category::all();
        return view('/index', compact('categories'));
    }
}
