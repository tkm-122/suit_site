<?php

use Illuminate\Database\Seeder;

class ButtonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table = new \App\Button([
        'name'=> 'button1',
        'image'=> 'img/product/button/button1.jpeg',
        'price'=> 0,
      ]);
      $table->save();

      $table = new \App\Button([
        'name'=> 'button2',
        'image'=> 'img/product/button/button2.jpeg',
        'price'=> 500,
      ]);
      $table->save();

      $table = new \App\Button([
        'name'=> 'button3',
        'image'=> 'img/product/button/button3.jpeg',
        'price'=> 1000,
      ]);
      $table->save();

      $table = new \App\Button([
        'name'=> 'button4',
        'image'=> 'img/product/button/button4.jpeg',
        'price'=> 1800,
      ]);
      $table->save();
    }
}
