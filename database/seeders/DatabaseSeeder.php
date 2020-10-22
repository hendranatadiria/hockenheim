<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('penulis')->insert([
            'nama' => 'penulis',
            'email' => 'penulis@blog.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('admin')->insert([
            'nama' => 'Administrator',
            'email' => 'admin@blog.com',
            'password' => Hash::make('password'),
        ]);
    }
}
