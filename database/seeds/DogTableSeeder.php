<?php

use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Dog::truncate();

        \App\Dog::create(['name' => 'Joe', 'age' => 5 ]);
        \App\Dog::create(['name' => 'Jock', 'age' => 7 ]);
        \App\Dog::create(['name' => 'Jackie', 'age' => 2 ]);
        \App\Dog::create(['name' => 'Jane', 'age' => 9 ]);
    }
}
