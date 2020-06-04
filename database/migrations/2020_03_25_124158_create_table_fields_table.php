<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_fields', function (Blueprint $table) {
            $table->id();
            $table->string('label')->comment('字段标签');
            $table->string('name')->comment('字段名');
            $table->integer('sort')->default(0)->comment('字段排序');
            $table->string('component')->comment('表单组件');
            $table->tinyInteger('is_hidden')->default(0)->comment('是否显示，1前台不显示， 2前后台都不显示');
            $table->integer('group_id')->comment('字段所属分组');
            $table->integer('table_id')->comment('字段所属表')->nullable();
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
        Schema::dropIfExists('table_fields');
    }
}
