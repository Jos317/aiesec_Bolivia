<?php

namespace Database\Seeders;

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
        $this->call(role_seeder::class);
        $this->call(user_seeder::class);
        $this->call(ContactoSeeder::class);
    }
}
