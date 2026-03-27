<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return Auth::user()->orders()->with('items.product')->latest()->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email',
            'items' => 'required|array',
            'total' => 'required|numeric',
            'shipping' => 'required|numeric',
            'tax' => 'required|numeric',
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'full_name' => $request->fullName,
            'email' => $request->email,
            'total' => $request->total,
            'shipping' => $request->shipping,
            'tax' => $request->tax,
        ]);

        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'] ?? 0,
            ]);
        }

        return response()->json(['orderId' => $order->id, 'message' => 'Order created']);
    }
}
