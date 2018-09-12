<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phone_id')->comment('商品外键id');
            $table->string('tname')->comment('网络类型');
            $table->string('cname')->comment('机身颜色');
            $table->string('mname')->comment('手机内存');
            $table->integer('shuliang')->comment('购买数量');
            $table->string('money')->comment('总价');
            $table->string('dizhi')->comment('收货人地址');
            $table->string('username')->comment('收货人名字');
            $table->string('tel')->comment('收货人手机号');
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
        Schema::dropIfExists('cars');
    }
}
