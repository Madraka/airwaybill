<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= App\User::create([
            'name' => 'Ricky Maharjan',
            'email' => 'info@cosmioinfotech.com',
            'password' => Hash::make('password'),
        ]);

    }
}
