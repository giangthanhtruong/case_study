<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\OrderModel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrder()
    {

        $orders = session()->get('orders');

        return view('frontend.order',compact('orders'));

    }

    public function create()
    {
        return view('backend.orders.create');
    }

    public function store(AuthRequest $request)
    {
        $product = new OrderModel();
        $product->userName = $request->userName;
        $product->phone = $request->phone;
        $product->product = $request->product;
        $product->quantity = $request->quantity;
        $product->totalPrice = $request->totalPrice;
        $product->save();
        return redirect()->route('orders.list');
    }



}
