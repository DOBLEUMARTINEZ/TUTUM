<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'  => 'Alberto Arroyo',
            'email'  => 'a1@b.com',
            'password'  => bcrypt('qwerty01'),
        ])->syncRoles('rol-uno');

        User::factory(50)->create();
    }
}
