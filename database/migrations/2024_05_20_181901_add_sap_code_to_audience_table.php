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
        Schema::table('audience', function (Blueprint $table) {
            Schema::table('audience', function (Blueprint $table) {
                $table->string('SAP_Code')->nullable()->after('segment');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('audience', function (Blueprint $table) {
            //
        });
    }
};
