<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOpticianFieldsToNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ya_optician_data', function (Blueprint $table) {
            $table->string('dixiang_r')->nullable()->change();
            $table->string('jzsl_r')->nullable()->change();
            $table->string('tongju_r')->nullable()->change();
            $table->string('zhujing_l')->nullable()->change();
            $table->string('qiujing_r')->nullable()->change();
            $table->string('qiujing_l')->nullable()->change();
            $table->string('zhujing_r')->nullable()->change();
            $table->string('guangzhou_r')->nullable()->change();
            $table->string('lengjing_r')->nullable()->change();
            $table->string('guangzhou_l')->nullable()->change();
            $table->string('lengjing_l')->nullable()->change();
            $table->string('dixiang_l')->nullable()->change();
            $table->string('jzsl_l')->nullable()->change();
            $table->string('tongju_l')->nullable()->change();
            $table->string('total_tongju_l')->nullable()->change();
            $table->string('total_tongju_r')->nullable()->change();
            $table->float('jingjia_price')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('null', function (Blueprint $table) {
            //
        });
    }
}
