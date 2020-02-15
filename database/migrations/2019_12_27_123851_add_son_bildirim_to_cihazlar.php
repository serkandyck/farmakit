<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSonBildirimToCihazlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cihazlar', function (Blueprint $table) {
            $table->dateTime('son_bildirim')->nullable()->after('son_olcum');
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
