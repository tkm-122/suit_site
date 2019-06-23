<?php

use Illuminate\Database\Seeder;

class SkidproofsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //希望なしの場合
      $table = new \App\Skidproof([
        'name' =>'希望しない',
        'price' => 0
      ]);

      $table->save();

      //滑り止めありの場合
      $table = new \App\Skidproof([
        'name' =>'スベり止めをつける',
        'price' => 700
      ]);

      $table->save();

    }
}
