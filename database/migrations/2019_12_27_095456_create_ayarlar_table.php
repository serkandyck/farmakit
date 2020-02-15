<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyarlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayarlar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cihaz_id');
            $table->float('ortam_min', 8, 2)->default(15);
            $table->float('ortam_maks', 8, 2)->default(25);
            $table->float('dolap_min', 8, 2)->default(2);
            $table->float('dolap_maks', 8, 2)->default(8);
            $table->float('nem_min', 8, 2)->default(0);
            $table->float('nem_maks', 8, 2)->default(65);
            $table->integer('olcum_aralik')->default(60);
            $table->boolean('cihaz_bildirim')->default(1);
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
        Schema::dropIfExists('ayarlar');
    }
}
