<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'name' => 'Administrateur',
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('roles')->insert(
            [
                'name' => 'Developpeur',
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('roles')->insert(
            [
                'name' => 'Bureau',
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('roles')->insert(
            [
                'name' => 'Moderateur',
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('roles')->insert(
            [
                'name' => 'Editeur',
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('roles')->insert(
            [
                'name' => 'Organisateur',
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('roles')->insert(
            [
                'name' => 'Membres',
                'created_at' => date("Y-m-d H:i:s"),
            ]);
    }
}
