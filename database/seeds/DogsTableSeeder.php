<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dogs')->truncate();
        \DB::table('dogs')->insert(['name' => 'Joe']);
        \DB::table('dogs')->insert(['name' => 'Jock']);
        \DB::table('dogs')->insert(['name' => 'Jackie']);
        \DB::table('dogs')->insert(['name' => 'Jane']);
    }
}
