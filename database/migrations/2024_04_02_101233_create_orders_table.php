<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('trx_number');
            $table->enum('status', ['pending', 'paid', 'on_delivery', 'delivered', 'expired', 'canceled']);
            $table->enum('payment_method', ['bank_transfer', 'ewallet']);
            $table->integer('total_price');

            // shipping
            $table->string('shipping_service')->nullable();
            $table->integer('shipping_cost');

            // payment virtual account
            $table->string('payment_va_name')->nullable();
            $table->string('payment_va_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
