<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mechanic_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('product_type');
            $table->string('category');
            $table->string('garage_name');
            $table->string('customer_name');
            $table->string('mobile');
            $table->string('segment');
            $table->string('city');
            $table->string('state');
            $table->string('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanic_contacts');
    }
};
