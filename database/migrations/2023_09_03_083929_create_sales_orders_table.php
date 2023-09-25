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
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_date',50);
            $table->string('invoice')->nullable(true);
            $table->decimal('total_amount',10,2);
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade')->nullable();
            $table->enum('payment_status',['unpaid','paid'])->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
