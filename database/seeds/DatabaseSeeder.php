<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Factory(App\User::class,6)->create();
        Factory(App\Post::class,2000)->create();
        Factory(App\Category::class,10)->create();
    }
}
