<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentToSuitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('suits', function (Blueprint $table) {
            $table->string('shoulder')->comment('肩');
            $table->string('waist')->comment('ウエスト');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suits', function (Blueprint $table) {
            $table->dropColumn('shoulder');
            $table->dropColumn('waist');
        });
    }
}
