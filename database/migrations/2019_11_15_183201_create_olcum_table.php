<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlcumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olcum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sensor_id')->unsigned();
            $table->float('deger', 8, 2);
            $table->timestamp('tarih');
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
        Schema::dropIfExists('olcum');
    }
}
