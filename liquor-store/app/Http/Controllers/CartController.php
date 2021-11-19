<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {

        $cart = session()->get('carts');
        $product = Product::findOrFail($id);
        if (isset($cart[$id])){
            $cart[$id]['countItem'] = $cart[$id]['countItem'] + 1;
        } else {
            $cart[$id] = [
                    'name' => $product->name,
                    'image'=> $product->image,
                    'countItem'=>1,
                    'price'=>$product->price,
                    'description'=>$product->description,
            ];

        }
        session()->put('carts',$cart);
        $cart = session()->get('carts');
        $totalQuantity = 0;
        foreach ($cart as $item){
            $totalQuantity += $item['countItem'];
        }

        return response()->json([
        'code' => 200,
        'carts' => $cart,
        'cartCount' => count($cart),
        ], 200);
    }
}
