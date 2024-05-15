<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('templates', function (Blueprint $table) {
            $table->string('type')->after('message'); 
            $table->string('file')->nullable()->after('status');
        });
    }

  
    public function down(): void
    {
        Schema::table('templates', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('file');
        });
    }
};
