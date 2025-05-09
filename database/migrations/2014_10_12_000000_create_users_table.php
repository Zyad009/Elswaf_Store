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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug');
            $table->index("slug");
            $table->string('email')->unique();
            $table->enum("gender", ["male", "female"])->nullable();

            $table->string("phone")->nullable();
            $table->string("whatsapp")->nullable();
            $table->text("address")->nullable();
            $table->string('password');
            $table->boolean("is_active")->default(true);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
