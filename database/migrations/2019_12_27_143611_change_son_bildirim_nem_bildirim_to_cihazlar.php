<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSonBildirimNemBildirimToCihazlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cihazlar', function (Blueprint $table) {
            $table->renameColumn('son_bildirim' ,'dolap_son_bildirim')->nullable()->change();
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
