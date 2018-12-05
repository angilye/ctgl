<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcceuilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acceuils')->insert([
            'id' => 1,
            'bande' => 'CTGL_presentation',
            'title' => 'Association de Chiens de Traineau des Gorges du Loup - C.T.G.L.',
            'contenue' => "Présentation de l'association.",
            'image' => null,
            'link' => null,
            'version' => 1,
            'update_by' => 'Administrateur',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('acceuils')->insert([
            'id' => 2,
            'bande' => 'activite',
            'title' => 'Les activitées',
            'contenue' => "Présentation des activitées de l'association.",
            'image' => null,
            'link' => null,
            'version' => 1,
            'update_by' => 'Administrateur',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('acceuils')->insert([
            'id' => 3,
            'bande' => 'evenement',
            'title' => "Evénements",
            'contenue' => "Exposition des évenement de l'association.",
            'image' => null,
            'link' => null,
            'version' => 1,
            'update_by' => 'Administrateur',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('acceuils')->insert([
            'id' => 4,
            'bande' => "adherer",
            'title' => 'Adhérer à l\'associtation',
            'contenue' => "Pour adherer à l'association: prérequis, coût, etc....",
            'image' => null,
            'link' => null,
            'version' => 1,
            'update_by' => 'Administrateur',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('acceuils')->insert([
            'id' => 5,
            'bande' => 'contact',
            'title' => 'Nous contacter',
            'contenue' => "Vous pouvez nous contacter via le formulaire de contact.",
            'image' => null,
            'link' => null,
            'version' => 1,
            'update_by' => 'Administrateur',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
