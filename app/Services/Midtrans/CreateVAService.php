<?php

namespace App\Services\Midtrans;

use Midtrans\CoreApi;

class CreateVAService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();

        $this->order = $order;
    }

    public function getVA()
    {

        $itemDetails = [];
        foreach ($this->order->orderItems as $orderItem) {
            $itemDetails[] = [
                'id' => $orderItem->product->id,
                'price' => $orderItem->product->price,
                'quantity' => $orderItem->quantity,
                'name' => $orderItem->product->name,
            ];
        }

        $itemDetails[] = [
            'id' => 'SHIPPING_COST',
            'price' => $this->order->shipping_cost,
            'quantity' => 1,
            'name' => 'SHIPPING_COST',
        ];

        $params = [
            'transaction_details' => [
                'order_id' => $this->order->trx_number,
                'gross_amount' => $this->order->total_price,
            ],
            'item_details' => $itemDetails,
            'payment_type' => 'bank_transfer',
            "bank_transfer" => [
                'bank' => $this->order->payment_va_name,
            ],
            'customer_details' => [
                'first_name' => $this->order->user->name,
                'email' => $this->order->user->email,
            ]
        ];

        $response = CoreApi::charge($params);
        return $response;
    }
}
