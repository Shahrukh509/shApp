<?php

namespace App\Http\Controllers;

use App\Models\Privacy_policy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $data = Privacy_policy::all();



        return view('admin.privacysection', ['data' => $data]);
    }

    public function form()
    {

        return view('admin.form');
    }

    public function store(Request $request)
    {

        $Description = $request->input('Description');



        $Privacy_policy = Privacy_policy::create([
            'Description' => $Description
        ]);

        $allPrivacy_policy = Privacy_policy::all();

        return redirect('/admin/privacy');
    }



    public function edit($id)
    {


        $data = Privacy_policy::find($id);


        return view('admin.privacysection', ['data' => $data]);
    }

    function update(Request $request)
    {
        // dd($request->Description);

        $update = Privacy_policy::find($request->id);



        $update->Description = $request->Description;


        $update->save();

        return redirect('/admin/privacy');
    }
}
