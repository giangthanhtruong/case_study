<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homePage()
    {
        $products = DB::table('products')
                    ->limit(12)
                    ->get();
        return view('frontend.content',compact('products'));
    }

    public function deleteAll()
    {
        session()->flush();
        return redirect()->route('show.products');
    }
}
