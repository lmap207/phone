<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age')->comment('用户年龄');
            $table->integer('sex')->comment('用户性别');
            $table->string('emil')->comment('用户邮箱');
            $table->string('xueli')->comment('用户学历');
            $table->string('gongzuo')->comment('用户工作');
            $table->string('csny')->comment('出生年月日');
            $table->string('jtdz')->comment('家庭地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('sex');
            $table->dropColumn('emil');
            $table->dropColumn('xueli');
            $table->dropColumn('gongzuo');
            $table->dropColumn('csny');
            $table->dropColumn('jtdz');
        });
    }
}
