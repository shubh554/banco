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
        Schema::create('dealer_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('product_type');
            $table->string('category');
            $table->string('dealer_name');
            $table->string('customer_name');
            $table->string('mobile');
            $table->string('city');
            $table->string('state');
            $table->string('area');
            $table->tinyInteger('verified')->default(0);
            $table->string('2-Wheeler')->nullable();
            $table->string('Car/MUV')->nullable();
            $table->string('LCV/HCV')->nullable();
            $table->string('Industrial')->nullable();
            $table->string('Genset')->nullable();
            $table->string('Agriculture')->nullable();
            $table->string('Tractor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer_contacts');
    }
};
