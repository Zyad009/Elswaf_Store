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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string('slug');
            $table->index("slug");
            $table->enum('discount_type', ['percentage', 'value']);
            $table->unsignedDecimal("discount", 5, 2);
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
