<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parameters', function (Blueprint $table) {
            //

            $table->integer('weight')->comment('手机重量');
            $table->string('CPU')->comment('cpu');
            $table->string('GPU')->comment('GPU');
            $table->integer('front')->comment('前端像素');
            $table->integer('behind')->comment('后端像素');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parameters', function (Blueprint $table) {
            //
            $table->dropColumn('weight');
            $table->dropColumn('CPU');
            $table->dropColumn('GPU');
            $table->dropColumn('front');
            $table->dropColumn('behind');
           
        });
    }
}
