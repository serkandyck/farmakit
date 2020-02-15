<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTarihlerToCihazlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cihazlar', function (Blueprint $table) {
            $table->dateTime('ortam_son_bildirim')->nullable()->after('dolap_son_bildirim');
            $table->dateTime('nem_son_bildirim')->nullable()->after('ortam_son_bildirim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cihazlar', function (Blueprint $table) {
            //
        });
    }
}
