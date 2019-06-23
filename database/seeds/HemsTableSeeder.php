<?php

use Illuminate\Database\Seeder;

class HemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //希望なしの場合
      $table = new \App\Hem([
        'name' =>'希望しない',
        'price' => 0
      ]);

      $table->save();

      //シングルの場合
      $table = new \App\Hem([
        'name' =>'シングル',
        'price' => 0
      ]);

      $table->save();

      //選択（ダブル）
      for($i=3.0;$i<=5.0;$i=$i+0.5){
        $table = new \App\Hem([
          'name' => 'ダブル'.$i.'cm',
          'price' => 0
        ]);

        $table->save();
      }

    }
}
