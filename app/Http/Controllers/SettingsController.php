<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        $data = Settings::all();

        return view('admin.settingssection', ['data' => $data]);
    }


    public function logo(Request $request, $id)
    {


        $update = Settings::find($id);



        $Images = $request->file('Image')->getClientOriginalName();

        // dd($update);

        $Image = $request->Image->move(public_path('/frontend/images'), $Images);

        $update->Image = $Images;

        $update->update();



        return redirect('/admin/settings');
    }


    public function contact(Request $request, $id)
    {

        $update = Settings::find($id);


        $update->Contact = $request->input('Contact');
        $update->Address = $request->input('Address');
        $update->Phone = $request->input('Phone');
        $update->Timings = $request->input('Timings');
        $update->Email = $request->input('Email');
        $update->Email2 = $request->input('Email2');

        $update->update();



        // $Settings = Settings::create([
        //     'Contact' => $Contact, 'Address' => $Address, 'Phone' => $Phone, 'Timings' => $Timings, 'Email' => $Email, 'Email2' => $Email2,
        // ]);

        // $allSettings = Settings::all();

        return redirect('/admin/settings');
    }


    public function footer(Request $request, $id)
    {

        $update = Settings::find($id);
        // dd($update = Settings::find($id));

        // $update = $request->input('Footer');

        $update->Footer = $request->input('Footer');

        $update->update();

        // $Footer = $request->input('Footer');




        // $Footer = Settings::create([
        //     'Footer' => $Footer
        // ]);

        // $allSettings = Settings::all();

        return redirect('/admin/settings');
    }
}
