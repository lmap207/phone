<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYjfksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yjfks', function (Blueprint $table) {
            $table->increments('id');
            // 用户id
            $table->integer('user_id');
            //用户邮箱
            $table->string('uemail');
            //用户意见
             $table->text('yijian');
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
        Schema::dropIfExists('yjfks');
    }
}
