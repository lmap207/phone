<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户id');
            $table->string('shname')->comment('收货人姓名');
            $table->string('shtel')->comment('收货人手机号');
            $table->string('shadd')->comment('收货人地址');
            $table->string('xadd')->comment('收货人详细地址');            
            $table->timestamps();
        });
    }

    /**
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('url');
    }
}
