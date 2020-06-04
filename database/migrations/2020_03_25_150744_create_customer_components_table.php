<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_components', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('组件名称');
            $table->string('identity')->comment('组件唯一标识');
            $table->tinyInteger('is_hidden')->default(0)->comment('是否显示');
            $table->string('datasrc')->comment('数据来源');
            $table->json('fields')->comment('字段');
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
        Schema::dropIfExists('customer_components');
    }
}
