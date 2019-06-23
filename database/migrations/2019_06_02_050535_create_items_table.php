<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('商品名');
            $table->string('code')->comment('商品番号')->nullable();
            $table->string('image_top')->nullable();
            $table->string('image_cloth')->nullable();
            $table->string('image_sub1')->nullable();
            $table->string('image_sub2')->nullable();
            $table->string('image_sub3')->nullable();
            $table->string('image_sub4')->nullable();
            $table->string('image_sub5')->nullable();
            $table->string('image_sub6')->nullable();
            $table->text('description')->nullable();
            $table->text('comment')->nullable();
            $table->integer('price')->comment('価格');
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
        Schema::dropIfExists('items');
    }
}
