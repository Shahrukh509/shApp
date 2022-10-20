<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("settings")->insert([
            'Image' => 'LOGO-C7.png',
            'Contact' => '(949) 520-1924',
            'Address' => 'San Francisco, CA 94126,
            United States',
            'Phone' => '+ 01 234 567 89,',
            'Timings' => 'Mon - Fri, 8:00-22:00',
            'Email' => 'info@gmail.com',
            'Email2' => 'sale@gmail.com',
            'Footer' => 'Copyrights   © Properdeed | All Rights Reserved | Privacy policy | Faq | Contact Us',
        ]);
    }
}
