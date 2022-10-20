<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    public function index()
    {
        $data = FAQ::all();

        return view('admin.faqsection', ['data' => $data]);
    }


    public function form()
    {


        return view('admin.addfaq');
    }

    public function store(Request $request)
    {
        // dd($request);
        $Question = $request->input('Question');
        $Answer = $request->input('Answer');
        $Status = $request->input('Status');




        $FAQ = FAQ::create([
            'Question' => $Question, 'Answer' => $Answer, 'Status' => $Status
        ]);

        $allFAQ = FAQ::all();

        return redirect('/admin/faq');
    }

    public function edit($id)
    {


        $data = FAQ::find($id);


        return view('admin.editfaq', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $update = FAQ::find($id);

        $update->Question = $request->input('Question');
        $update->Answer = $request->input('Answer');
        $update->Status = $request->input('Status');

        $update->update();
        return redirect('/admin/faq');
    }


    public function delete(Request $request, $id)
    {
        $allFAQ = FAQ::find($id);


        if ($allFAQ) {

            $allFAQ->delete();

            return redirect('/admin/faq');
        } else {

            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
