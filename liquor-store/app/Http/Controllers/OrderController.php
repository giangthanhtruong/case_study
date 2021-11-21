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
        $order = new OrderModel();
        $order->userName = $request->userName;
        $order->phone = $request->phone;
        $order->product = $request->product;
        $order->quantity = $request->quantity;
        $order->totalPrice = $request->totalPrice;
        $order->save();
        return redirect()->route('orders.list');
    }



}
