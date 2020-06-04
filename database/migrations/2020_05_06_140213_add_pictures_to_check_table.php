<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPicturesToCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ya_check', function (Blueprint $table) {
            $table->text('map')->nullable();
            $table->text('yandi')->nullable();
            $table->text('shengwu')->nullable();
            $table->text('fuzhen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ya_chaeck', function (Blueprint $table) {
            //
        });
    }
}
