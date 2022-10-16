<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();


        $admin = User::create([
            'name' => 'admin',
            'email' =>'admin@admin.com',
            'password' => Hash::make('Password')


        ]);


        $manager = User::create([
            'name' => 'manager',
            'email' =>'manager@manager.com',
            'password' => Hash::make('Password')


        ]);

        $utilisateur = User::create([
            'name' => 'utilisateur',
            'email' =>'utilisateur@utilisateur.com',
            'password' => Hash::make('Password')


        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $utilisateurRole = Role::where('name', 'utilisateur')->first();

        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $utilisateur->roles()->attach($utilisateurRole);

    }


}
