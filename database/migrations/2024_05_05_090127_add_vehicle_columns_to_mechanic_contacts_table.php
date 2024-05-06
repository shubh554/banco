<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('mechanic_contacts', function (Blueprint $table) {
           
            $table->string('2-Wheeler', 3)->default('No');
            $table->string('Car/MUV', 3)->default('No');
            $table->string('LCV/HCV', 3)->default('No');
            $table->string('Industrial', 3)->default('No');
            $table->string('Genset', 3)->default('No');
            $table->string('Agriculture', 3)->default('No');
            $table->string('Tractor', 3)->default('No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mechanic_contacts', function (Blueprint $table) {
           
            $table->dropColumn(['2-Wheeler', 'Car/MUV', 'LCV/HCV', 'Industrial', 'Genset', 'Agriculture', 'Tractor']);
        });
    }
};
