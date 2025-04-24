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
            $table->foreignId('pickup_points_id')->nullable()->constrained()->onDelete('cascade');
            $table->enum("payment_method", ["card", "cash"]);
            $table->boolean("payment_status")->default(false);

            //Shipping information
            $table->enum('delivery_method', ['delivery', 'pickup']);
            $table->enum('delivery_type', ['regular', 'super'])
            ->comment('regular: normal, super: private')
            ->nullable();
            $table->string("city")->nullable();
            $table->string("area")->nullable();
            $table->string("pickup_code")->nullable();


            $table->unsignedDecimal('total', 10, 2);
            $table->unsignedDecimal('delivery_price', 10, 2)->nullable();
            $table->unsignedDecimal('finally_total', 10, 2);

            //Customer information
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->text('delivery_address');

            //Order status
            $table->text("notes")->nullable();
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
