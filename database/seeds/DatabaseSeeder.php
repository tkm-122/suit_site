<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuitsTableSeeder::class);
        $this->call(LiningsTableSeeder::class);
        $this->call(ButtonsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(InseamsTableSeeder::class);
        $this->call(HemsTableSeeder::class);
        $this->call(WaistsTableSeeder::class);
        $this->call(SkidproofsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
    }
}
