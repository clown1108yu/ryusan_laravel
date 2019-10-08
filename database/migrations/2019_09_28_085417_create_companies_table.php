<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->comment('メールアドレス');
            // $table->string('login_id', 25)->unique()->comment('ログインID');
            // $table->string('password')->comment('パスワード');
            $table->tinyInteger('type')->comment('タイプ 1:病院,2:技工');
            $table->string('name')->nullable()->comment('会社名');
            $table->text('overview')->nullable()->comment('概要');
            $table->text('location')->nullable()->comment('住所');
            $table->string('telephone',16)->nullable()->comment('電話番号');
            $table->binary('icon')->nullable()->comment('アイコン');
            // $table->rememberToken();
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
        Schema::dropIfExists('companies');
    }
}
