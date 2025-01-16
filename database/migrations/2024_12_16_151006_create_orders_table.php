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
            
            // Foreign keys
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId("cart_id")->constrained()->onDelete("cascade");
            $table->foreignId("payment_id")->constrained()->onDelete("cascade");
            $table->foreignId('area_id')->constrained()->onDelete('cascade');

            //Shipping information
            $table->enum(' receipt_method', ['backup', 'regular', 'super'])->comment('backup: your self, regular: normal, super: private');
            $table->unsignedDecimal('total', 10, 2);
            $table->unsignedDecimal('finally_total', 10, 2);

            //Customer information
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('delivery_address');

            //Order status
            $table->enum("status_order",["pending" , "processing" , "completed" , "canceled"])->default("pending");
            $table->boolean("status")->default(false);
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
