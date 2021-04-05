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
         \App\Models\User::create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => bcrypt(123456),
             'type' => 'admin',
         ]);

        \App\Models\User::create([
            'name' => 'student',
            'email' => 'student@student.com',
            'password' => bcrypt(123456),
            'type' => 'student',
        ]);

        \App\Models\User::create([
            'name' => 'faculty',
            'email' => 'faculty@faculty.com',
            'password' => bcrypt(123456),
            'type' => 'faculty',
        ]);

        \App\Models\ResearchGroup::create([
            'name' => 'ResearchGroup 1 ',
            'description' => 'ResearchGroup 1 desc',
        ]);

        \App\Models\ResearchGroup::create([
            'name' => 'ResearchGroup 2 ',
            'description' => 'ResearchGroup 2 desc',
        ]);
        \App\Models\ResearchGroup::create([
            'name' => 'ResearchGroup 3 ',
            'description' => 'ResearchGroup 3 desc',
        ]);
    }
}
