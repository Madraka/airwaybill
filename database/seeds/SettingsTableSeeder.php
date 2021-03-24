<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'favicon'=>'favicon.png',
            'company_name'=>'Cosmio Infotech',
            'company_logo'=>'logo.png',
            'company_description'=>'Company Description',
            'company_email'=>'maharjanricky@gmail.com',
            'company_address'=>'Koteshwor-35,Kathmandu',
            'company_phone'=>'01-5100619',
            'company_mobile'=>'+977-9843744484',
            'copyright'=>'Copyright © 2020 Cosmio Infotech. All Rights Reserved.',
        ]);
    }
}
