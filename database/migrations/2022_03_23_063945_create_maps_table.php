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
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->string('first_bayan');
            $table->string('first_bayan_1st_time');
            $table->string('first_bayan_2nd_time');
            $table->string('second_bayan');
            $table->string('second_bayan_time');
            $table->string('thied_bayan');
            $table->string('third_bayan_time');
            $table->string('iframe_link');
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
        Schema::dropIfExists('maps');
    }
};
