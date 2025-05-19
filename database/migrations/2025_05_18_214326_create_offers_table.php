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
            $table->string('highlight_text')->nullable(); // "ON THIS WEEK", "WELCOME FRESHEAT"
            $table->string('title');                      // "SPICY FRIED CHICKEN"
            $table->string('subtitle')->nullable();       // "Limits Time Offer"
            $table->string('badge')->nullable();          // "50% OFF"
            $table->string('button_text')->default('Order Now');
            $table->string('button_link')->nullable();    // Link to order
            $table->string('image');                      // Product image
            $table->boolean('is_active')->default(true);
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
