<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table = new \App\Size([
        'size' =>'4号（165cm）',
        'body' =>'Y体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'4号（165cm）',
        'body' =>'A体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'4号（165cm）',
        'body' =>'AB体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'4号（165cm）',
        'body' =>'BB体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'5号（170cm）',
        'body' =>'Y体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'5号（170cm）',
        'body' =>'A体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'5号（170cm）',
        'body' =>'AB体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'5号（170cm）',
        'body' =>'BB体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'6号（175cm）',
        'body' =>'Y体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'6号（175cm）',
        'body' =>'A体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'6号（175cm）',
        'body' =>'AB体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'6号（175cm）',
        'body' =>'BB体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'7号（180cm）',
        'body' =>'Y体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'7号（180cm）',
        'body' =>'A体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'7号（180cm）',
        'body' =>'AB体',
      ]);
      $table->save();

      $table = new \App\Size([
        'size' =>'7号（180cm）',
        'body' =>'BB体',
      ]);
      $table->save();

    }
}
