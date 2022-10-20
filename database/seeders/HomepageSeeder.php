<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("homepage")->insert([
            's1_Title' => 'Sell Your House Today With Properdeed For The Best Price.',
            's1_Description' => 'No commissions or fees, sell your house ”AS IS”.',
            's1_Image' => 'main-background-2.png',
            's2_Title' => 'Why Sell Your Home To Us At Properdeed?',
            's2_Heading1' => 'Experience And Reliable',
            's2_Description1' => 'We have over 10 years experience buying properties. We will treat you professionally.',
            's2_Heading2' => 'We Never Charge Fees Or Closing Cost',
            's2_Description2' => 'Save your money. We will pay all closing costs.',
            's2_Heading3' => 'We Buy Houses In AS-IS Condition',
            's2_Description3' => "You don't have to worry about clean-up or repairs. Leave any unwanted items behind. We'll take care of it for you, while you focus on your future.",
            's2_Heading4' => 'Convenience',
            's2_Description4' => 'We can close in as little as 10 days or you can pick your move out date. We make your life easy.',
            's2_Image' => '-oCcrsTU.jpeg',
            's3_Title' => 'Meet James and Donna',
            's3_Description' => '“We had a distress property that was costing us money. James contacted Properdeed to see if they might be interested in buying our property. The staff was professional and responsive and we were pleased with the offer. Selling was a seamless process. Properdeed team made this a very pleasent experience."',
            's3_Image' => 'Testimonial.jpg',
            's4_Title' => 'Ready To Move On?
            Get a Fair Cash Offer Today',
            's5_Title' => 'Our Process Is Fast And Easy',
            's5_Heading1' => 'Contact Us',
            's5_Description1' => ' Get My Cash Offer Now Form',
            's5_Image1' => 'shutterstock_1625233630__1_-removebg-preview.png',
            's5_Heading2' => 'Get An Offer',
            's5_Description2' => 'We present you with highest cash offer possible within 24 hours. No obligation and no fees.',
            's5_Image2' => 'N_CDigfQ-removebg-preview.png',
            's5_Heading3' => 'Get Paid',
            's5_Description3' => 'We close at a local reputable title company.',
            's5_Image3' => 'hMXKA53g-removebg-preview.png',
            's6_Title' => 'We’ve helped homeowners get a fresh start',
            's6_Paragraph' => 'We help property owners just like you, in all kinds of situations. We purchase outdated and distressed homes ‘as-is’ and we pay for all the repairs and for all your real estate fees. If you simply don’t want to put up with the hassle of owning that house any longer, and if you don’t want to put up with the hassle and time-consuming expense of selling your property the traditional way , let us know we ca provide you with cash in as little as 10 days. We promise to deliver peace of mind and support throughout the process.',
            's6_Image1' => 'repair_image-removebg-preview.png',
            's6_Description1' => 'Property in Need of Repairs',
            's6_Image2'  => 'bills-removebg-preview.png',
            's6_Description2' => 'Financial Distress',
            's6_Image3' => 'events.png',
            's6_Description3' => 'Unexpected Life Events',
            's6_Image4' => 'relocation.png',
            's6_Description4' => 'Downsizing Or Relocation',
            's6_Image5' => 'property.png',
            's6_Description5' => 'Inherited Property',
            's6_Image6' => 'alert.jpg',
            's6_Description6' => 'Problematic Property',
            's7_Heading' => 'Over 10,000 Offers Received.',
            's7_Description' => 'Each day homeowners get their offers on Properdeed.',
            's7_Image' => 'crop-sky-image.jpg',





        ]);
    }
}
