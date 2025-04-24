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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            // Foreign keys
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('product_name');
            $table->string('slug');
            $table->unsignedDecimal('price', 8, 2);
            $table->unsignedInteger('QTY')->default(0);
            $table->string('color');
            $table->string('size');
            
            $table->unsignedDecimal('discount', 8, 2)->nullable();
            $table->enum('discount_type', ['percentage', 'value'])->nullable();
            $table->unsignedDecimal('final_price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
