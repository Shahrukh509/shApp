<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("f_a_q_s")->insert([
            'Question' => 'Do you pay fair prices for properties?',
            'Answer' => 'Many of the houses we purchase are below market value (we do this so we can resell it at a profit to another homeowner). We are looking to get a fair discount on a property. However, in our experience, many sellers aren’t necessarily expecting a large “windfall” on the property but rather appreciate that we can offer cash, we close very quickly (no waiting for financing), and no time or effort or expense is required on your part of fix up the property or pay agent fees. If that’s what you’re looking for and you see the value in getting your house sold fast… let’s see if we can come to a fair win-win price. (Besides, our no-obligation pricing commitment means that you do not have to move forward with the offer we give… but it’s good to know what we’re offering!)',
            'Status' => '1',


        ]);
    }
}
