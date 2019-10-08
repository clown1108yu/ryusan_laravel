<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('company_id')->comment('会社ID');
            $table->string('name')->comment('担当者');
            $table->string('login_id', 25)->unique()->comment('ログインID');
            $table->string('password')->comment('パスワード');
            $table->tinyInteger('type')->comment('タイプ 1:病院,2:技工');
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
}
