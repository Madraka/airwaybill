<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\UserRole::create([
            'role' =>'admin'
        ]);
        App\Models\UserRole::create([
            'role' =>'staff'
        ]);
        App\Models\UserRole::create([
            'role' =>'customer'
        ]);
        
    }
}
