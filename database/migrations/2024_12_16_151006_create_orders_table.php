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
            $table->enum("method_shipping",["fast order(motoer)" , "reguler order" , "super order(privet)"]);
            $table->string("shipping_cost");
            $table->string("total_amount");
            $table->boolean("status");

            $table->foreignId("cart_id")->constrained();

            $table->dateTime("order_date");
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
