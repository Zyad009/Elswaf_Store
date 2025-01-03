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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("price");
            $table->string("QTY");
            $table->string("image");
            $table->json("sizes")->nullable();
            $table->string("color");
            $table->string("description");
            $table->string("offer")->default(0);
            $table->string("rating")->default(10);
            $table->boolean("is_active")->default(true);

            $table->foreignId("category_id")->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
