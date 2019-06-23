<?php

use Illuminate\Database\Seeder;

class LiningsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table = new \App\Lining([
        'name'=>'lining1',
        'image'=>'img/product/lining/lining1.jpeg',
        'price'=>0,
      ]);
      $table->save();

      $table = new \App\Lining([
        'name'=>'lining2',
        'image'=>'img/product/lining/lining2.jpeg',
        'price'=>0,
      ]);
      $table->save();

      $table = new \App\Lining([
        'name'=>'lining3',
        'image'=>'img/product/lining/lining3.jpeg',
        'price'=>1000,
      ]);
      $table->save();

      $table = new \App\Lining([
        'name'=>'lining4',
        'image'=>'img/product/lining/lining4.jpeg',
        'price'=>2000,
      ]);
      $table->save();
    }
}
