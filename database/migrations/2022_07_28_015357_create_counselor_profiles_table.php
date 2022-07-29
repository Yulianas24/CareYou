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
        Schema::create('counselor_profiles', function (Blueprint $table) {
            $table->id('id');
            $table->String('username');
            $table->String('pend_s1')->nullable();
            $table->String('pend_s2')->nullable();
            $table->String('pend_s3')->nullable();
            $table->String('penanganan_masalah')->nullable();

            $table->text('tentang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counselor_profiles');
    }
};
