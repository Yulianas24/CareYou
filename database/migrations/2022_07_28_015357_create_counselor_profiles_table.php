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
            $table->foreignId('user_id');
            $table->foreignId('pend_s1');
            $table->foreignId('pend_s2');
            $table->text('tentang');
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
