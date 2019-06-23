<?php

use Illuminate\Database\Seeder;

class SuitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new \App\Suit([
          'name'=> 'british',
          'image'=> 'img/product/british.png',
          'price'=> 0 ,
          'shoulder'=> '肩パットが入り、やや角ばる',
          'waist'=> '人体に沿って絞り込まれる',
        ]);
        $table->save();

        $table = new \App\Suit([
          'name'=> 'italian',
          'image'=> 'img/product/italian.png',
          'price'=> 0 ,
          'shoulder'=> '肩はパッドが入らずナチュラル。丸みのあるシルエット',
          'waist'=> 'ソフトに絞り込まれる',
        ]);
        $table->save();

        $table = new \App\Suit([
          'name'=> 'american',
          'image'=> 'img/product/american.png',
          'price'=> 3000 ,
          'shoulder'=> '薄いパッドもしくは入らない。ナチュラルなスタイル',
          'waist'=> 'ストレートなBOX型',
        ]);
        $table->save();

    }
}
