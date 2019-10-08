<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAttachedFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_attached_files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->comment('オーダーID');
            $table->integer('name')->comment('名称');
            $table->binary('attached_file')->comment('添付ファイル');
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
        Schema::dropIfExists('order_attached_files');
    }
}
