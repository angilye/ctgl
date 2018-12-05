<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
                'id' => 1,
                'name' => 'Presentation_CTGL',
                'update_by' => 'Administrateur',
                'content' => 'test',
                'version' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('pages')->insert(
            [
                'id' => 2,
                'name' => 'Les_activitees',
                'update_by' => 'Administrateur',
                'content' => 'test',
                'version' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('pages')->insert(
            [
                'id' => 3,
                'name' => 'Evenement',
                'update_by' => 'Administrateur',
                'content' => 'test',
                'version' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('pages')->insert(
            [
                'id' => 4,
                'name' => 'Adherer',
                'update_by' => 'Administrateur',
                'content' => 'test',
                'version' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        DB::table('pages')->insert(
            [
                'id' => 5,
                'name' => 'Contacts',
                'update_by' => 'Administrateur',
                'content' => 'test',
                'version' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
    }
}
