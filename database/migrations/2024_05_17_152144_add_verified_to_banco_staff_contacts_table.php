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
        Schema::table('banco_staff_contacts', function (Blueprint $table) {
            $table->boolean('Verified')->default(false)->after('Zone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banco_staff_contacts', function (Blueprint $table) {
            //
        });
    }
};
