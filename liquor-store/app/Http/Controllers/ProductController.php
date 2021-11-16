<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        return view('frontend.product.list');
    }
}
