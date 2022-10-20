<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactuspageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contact-uses")->insert([
            'Heading' => 'Contact Us',
            'Description' => "We'll write rarely, but only the best content.",

        ]);
    }
}
