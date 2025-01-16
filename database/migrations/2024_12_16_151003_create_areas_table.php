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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("city_id")->constrained()->onDelete("cascade");
            $table->integer("price_backup")->default(0);
            $table->unsignedDecimal("delivery_price_regular", 8, 2)->default(0);
            $table->unsignedDecimal("delivery_price_super", 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
