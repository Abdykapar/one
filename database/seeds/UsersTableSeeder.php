<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.ru',
            'password' => bcrypt('secret'),
            'admin' => 1,
            'moderator' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Moderator',
            'email' => 'moderator@mail.ru',
            'password' => bcrypt('secret'),
            'admin' => 0,
            'moderator' => 1
        ]);
    }
}
