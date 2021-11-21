<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductSingleController extends Controller
{
    public function productSingle($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.product-single',compact('product'));
    }
}
