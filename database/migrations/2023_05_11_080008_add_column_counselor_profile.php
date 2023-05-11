<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('counselor_profiles', function (Blueprint $table) {
            //
            $table->string('kategori_pendekatan')->nullable()->default('Gestalt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('counselor_profiles', function (Blueprint $table) {
            //
        });
    }
};
