<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Services\Midtrans\CreateVAService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        // validate request order
        $request->validate([
            'payment_method' => 'required',
            'shipping_service' => 'required',
            'shipping_cost' => 'required',
            'items' => 'required',
        ]);

        // Hitung total harga produk
        $totalProductPrice = 0;
        foreach ($request->items as $item) {
            // Ambil harga produk dari database (Anda harus menyesuaikan dengan model produk Anda)
            $productPrice = Product::find($item['product_id'])->price;
            // Hitung total harga produk dengan mengalikan harga dengan jumlah
            $totalProductPrice += $productPrice * $item['quantity'];
        }

        // Hitung total harga keseluruhan dengan menambahkan biaya pengiriman
        $totalPrice = $totalProductPrice + $request->shipping_cost;

        $order = Order::create([
            'user_id' => $request->user()->id,
            'trx_number' => 'TRX' . time(),
            'status' => 'pending',
            'payment_method' => $request->payment_method,
            'shipping_service' => $request->shipping_service,
            'shipping_cost' => $request->shipping_cost,
            'total_price' => $totalPrice,
        ]);

        // payment va name
        if ($request->payment_va_name) {
            $order->update([
                'payment_va_name' => $request->payment_va_name,
            ]);
        }

        // create order item
        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
            ]);
        }

        // request ke midtrans
        $midtrans = new CreateVAService($order);
        $apiResponse = $midtrans->getVA();

        $order->payment_va_number = $apiResponse->va_numbers[0]->va_number;
        $order->save();

        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => 'Order success',
            // 'data' => $order
            'data' => new OrderResource($order)
        ]);
    }
}
