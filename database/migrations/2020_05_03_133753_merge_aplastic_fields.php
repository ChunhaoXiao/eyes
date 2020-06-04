<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MergeAplasticFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ya_aplastic', function (Blueprint $table) {
            $table->text('zhusu')->nullable();
            $table->text('bmzk_r')->nullable();
            $table->text('bmzk_l')->nullable();
            $table->text('byzk_r')->nullable();
            $table->text('byzk_l')->nullable();
            $table->text('chuzhi_r')->nullable();
            $table->text('chuzhi_l')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ya_aplastic', function (Blueprint $table) {
            //
        });
    }
}
