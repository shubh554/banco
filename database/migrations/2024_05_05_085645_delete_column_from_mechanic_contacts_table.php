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
        Schema::table('mechanic_contacts', function (Blueprint $table) {
            // Drop the 'phone_number' column
            $table->dropColumn('segment');
        });
    }

   
};
