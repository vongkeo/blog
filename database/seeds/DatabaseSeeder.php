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
        $seed = [
            User::class,
            category::class,
            tag::class,
            blog::class
        ];
        $this->call($seed);
    }
}
