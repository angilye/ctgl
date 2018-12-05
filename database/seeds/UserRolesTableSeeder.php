<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert(
            [
                'user_id' => 1,
                'roles_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
    }
}
