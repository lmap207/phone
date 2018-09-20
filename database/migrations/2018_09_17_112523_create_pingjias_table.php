<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePingjiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pingjias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('phone_id')->comment('商品id');
            $table->string('user_id')->comment('用户id');
            $table->string('content')->comment('评价内容');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pingjias');
    }
}
