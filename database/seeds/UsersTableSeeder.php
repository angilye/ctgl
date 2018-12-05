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
            'name' => 'Administrateur',
            'email' => 'the_sword_demon@hotmail.fr',
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
