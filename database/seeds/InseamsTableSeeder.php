<?php

use Illuminate\Database\Seeder;

class InseamsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    //希望なしの場合
    $table = new \App\Inseam([
      'name' =>'希望しない',
      'price' => 0
    ]);

    $table->save();

    //選択
    for($i=65.5;$i<=87.5;$i=$i+0.5){
      $table = new \App\Inseam([
        'name' => $i.'cm',
        'price' => 0
      ]);

      $table->save();
    }

  }
}
