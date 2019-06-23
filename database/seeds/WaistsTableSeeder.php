<?php

use Illuminate\Database\Seeder;

class WaistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //希望なしの場合
      $table = new \App\Waist([
        'name' =>'希望しない',
        'price' => 0
      ]);

      $table->save();

      //ウエストヒップ　詰め
      for($i=1.0;$i<=3.5;$i=$i+0.5){
        $table = new \App\Waist([
          'name' => $i.'cm 詰め（ウエストとヒップ）',
          'price' => 1200
        ]);

        $table->save();
      }
      //ウエストヒップ　出し
      for($i=1.0;$i<=3.5;$i=$i+0.5){
        $table = new \App\Waist([
          'name' => $i.'cm 出し（ウエストとヒップ）',
          'price' => 1200
        ]);

        $table->save();
      }

      //ウエストのみ　詰め
      for($i=1.0;$i<=3.5;$i=$i+0.5){
        $table = new \App\Waist([
          'name' => $i.'cm 詰め（ウエストのみ）',
          'price' => 1200
        ]);

        $table->save();
      }

      //ウエストのみ　出し
      for($i=1.0;$i<=3.5;$i=$i+0.5){
        $table = new \App\Waist([
          'name' => $i.'cm 出し（ウエストのみ）',
          'price' => 1200
        ]);

        $table->save();
      }

    }
}
