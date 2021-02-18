<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Service::create([
            'name' => 'Express Document',
            'slug' => 'express-document'
        ]);
        App\Models\Service::create([
            'name' => 'Express Parcel',
            'slug' => 'express-parcel'
        ]);
    }
}
