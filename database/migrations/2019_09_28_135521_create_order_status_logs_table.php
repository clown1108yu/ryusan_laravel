<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderStatusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_status_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('order_id')->comment('オーダーID');
            $table->tinyInteger('status')->comment('master_data:order_status');
            $table->integer('company_id')->comment('会社ID');
            $table->integer('user_id')->comment('担当者ID');
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
        Schema::dropIfExists('order_status_logs');
    }
}
