<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->nullable()->comment('医師ID');
            $table->string('patient_id')->nullable()->comment('患者ID');
            $table->binary('tooth_draw')->nullable()->comment('DataFormat形式');
            $table->integer('status')->comment('ステータス master_data:order_status');
            $table->integer('company_id')->nullable()->comment('発注先 会社ID');
            $table->integer('user_id')->nullable()->comment('発注先 担当者ID');
            $table->integer('created_company_id')->comment('発注元 会社ID');
            $table->integer('created_user_id')->comment('発注元 担当者ID');
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
        Schema::dropIfExists('orders');
    }
}
