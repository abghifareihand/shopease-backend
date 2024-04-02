<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'trx_number' => $this->trx_number,
            'status' => $this->status,
            'payment_method' => $this->payment_method,
            'payment_va_name' => $this->payment_va_name,
            'payment_va_number' => $this->payment_va_number,
            'shipping_service' => $this->shipping_service,
            'shipping_cost' => $this->shipping_cost,
            'total_price' => $this->total_price,
            'order_items' => OrderItemResource::collection($this->orderItems),
        ];
    }
}
