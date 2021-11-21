<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductSingleController extends Controller
{
    public function productSingle()
    {
        return view('frontend.product-single');
    }
}
