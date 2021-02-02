<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Str;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 3; $i++){
            User::create([
                'name' => Str::random(10),
                'email' => Str::random(6).'@hello.com',
                'password' => Hash::make('secret'),
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
