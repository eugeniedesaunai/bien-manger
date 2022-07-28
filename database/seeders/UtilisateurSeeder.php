<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Utilisateur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::where('role','Super-administrateur')->first();
        Utilisateur::create([
            "nom"=>'Desaunai',
            "prenom"=>'Eugénie',
            "mail"=>'eugeniedesaunai@gmail.com',
            "mdp"=>bcrypt('edesaunai28'),
            "permission_id"=>$permission->id,
        ]);
    }
}
