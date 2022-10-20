<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy_policy;
use App\Models\FAQ;
use App\Models\Home;
use App\Models\Contactus;
use App\Models\Settings;
use GuzzleHttp\Psr7\Header;

class FrontendController extends Controller
{
    public function home()
    {
        $data = Home::all();
        $data2 = Settings::all();
        // $data3 = Header::all

        return view('frontend.home', ['data' => $data], ['data2' => $data2]);
    }

    public function faq()
    {
        $data = FAQ::all();
        $data2 = Settings::all();
        return view('frontend.faq', ['data' => $data], ['data2' => $data2]);
    }

    public function contactus()
    {
        $data = Contactus::all();
        $data2 = Settings::all();
        return view('frontend.contact_us', ['data' => $data], ['data2' => $data2]);
    }

    public function privacypolicy()
    {

        $data = Privacy_policy::all();
        $data2 = Settings::all();

        return view('frontend.privacy_policy', ['data' => $data], ['data2' => $data2]);
    }

    public function Header()
    {
        $data = Settings::all();

        return view('frontend.header', ['data' => $data]);
    }

    public function Footer()
    {
        $data = Settings::all();

        return view('frontend.footer', ['data' => $data]);
    }
}
