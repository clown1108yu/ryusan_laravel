<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_memos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->comment('会社ID');
            $table->text('overview')->nullable()->comment('概要');
            $table->integer('created_company_id')->comment('起票 会社ID');
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
        Schema::dropIfExists('company_memos');
    }
}
