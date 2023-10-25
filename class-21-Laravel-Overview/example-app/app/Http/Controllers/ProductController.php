<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productShowPage(){
        return view('product.productpage');
    }
}
