<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('projects')->insert([
            [
                'name' => Str::random(12),
                'description' => Str::random(20),
                'status' => 0,
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => Str::random(12),
                'description' => Str::random(20),
                'status' => 0,
                'user_id' => 2,
                'created_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => Str::random(12),
                'description' => Str::random(20),
                'status' => 1,
                'user_id' => 3,
                'created_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
