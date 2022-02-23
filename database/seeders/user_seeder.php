<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = New User();
        $user->name = 'Tamaleros Cayolasoft';
        $user->email = 'su@gmail.com';
        $user->password = bcrypt('12345');
        $user->save();
        $user->assignRole('superuser');
    }
}
