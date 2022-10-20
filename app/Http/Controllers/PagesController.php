<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\FaqHeading;

class PagesController extends Controller
{
    public function index()
    {
        $data = Home::all();
        $data2 = Contactus::all();
        $data3 = FaqHeading::all();

        // dd($data3);

        return view('admin.pagessection', compact("data", "data2", "data3"));
    }

    public function first(Request $request, $id)
    {
        $update = Home::find($id);

        $update->s1_Title = $request->input('s1_Title');
        $update->s1_Description = $request->input('s1_Description');



        $s1_Image = $request->file('s1_Image')->getClientOriginalName();

        $Image = $request->s1_Image->move(public_path('/frontend/images'), $s1_Image);

        $update->s1_Image = $s1_Image;
        $update->update();


        return redirect('/admin/pages');
    }


    public function second(Request $request, $id)
    {
        $update = Home::find($id);

        $update->s2_Title = $request->input('s2_Title');
        $update->s2_Heading1 = $request->input('s2_Heading1');
        $update->s2_Description1 = $request->input('s2_Description1');
        $update->s2_Heading2 = $request->input('s2_Heading2');
        $update->s2_Description2 = $request->input('s2_Description2');
        $update->s2_Heading3 = $request->input('s2_Heading3');
        $update->s2_Description3 = $request->input('s2_Description3');
        $update->s2_Heading4 = $request->input('s2_Heading4');
        $update->s2_Description4 = $request->input('s2_Description4');
        // $update->s2_Image = $request->input('s2_Image');




        $s2_Image = $request->file('s2_Image')->getClientOriginalName();

        $Image = $request->s2_Image->move(public_path('/frontend/images'), $s2_Image);

        $update->s2_Image = $s2_Image;
        $update->update();



        return redirect('/admin/pages');
    }
    public function third(Request $request, $id)
    {

        $update = Home::find($id);

        $update->s3_Title = $request->input('s3_Title');
        $update->s3_Description = $request->input('s3_Description');
        $update->s3_Image = $request->input('s3_Image');




        $s3_Image = $request->file('s3_Image')->getClientOriginalName();

        $Image = $request->s3_Image->move(public_path('/frontend/images'), $s3_Image);

        $update->s3_Image = $s3_Image;
        $update->update();



        return redirect('/admin/pages');
    }
    public function fourth(Request $request, $id)
    {
        $update = Home::find($id);

        $update->s4_Title = $request->input('s4_Title');


        $update->update();

        return redirect('/admin/pages');
    }
    public function fifth(Request $request, $id)
    {
        $update = Home::find($id);

        $update->s5_Title = $request->input('s5_Title');
        $update->s5_Heading1 = $request->input('s5_Heading1');
        $update->s5_Description1 = $request->input('s5_Description1');
        // $s5_Image1 = $request->input('s5_Image1');



        $s5_Image1 = $request->file('s5_Image1')->getClientOriginalName();

        $Image = $request->s5_Image1->move(public_path('/frontend/images'), $s5_Image1);



        $update->s5_Heading2 = $request->input('s5_Heading2');
        $update->s5_Description2 = $request->input('s5_Description2');
        // $s5_Image2 = $request->input('s5_Image2');



        $s5_Image2 = $request->file('s5_Image2')->getClientOriginalName();

        $Image = $request->s5_Image2->move(public_path('/frontend/images'), $s5_Image2);


        $update->s5_Heading3 = $request->input('s5_Heading3');
        $update->s5_Description3 = $request->input('s5_Description3');
        // $s5_Image3 = $request->input('s5_Image3');



        $s5_Image3 = $request->file('s5_Image3')->getClientOriginalName();

        $Image = $request->s5_Image3->move(public_path('/frontend/images'), $s5_Image3);

        $update->s5_Image1 = $s5_Image1;
        $update->s5_Image2 = $s5_Image2;
        $update->s5_Image3 = $s5_Image3;

        $update->update();



        return redirect('/admin/pages');
    }
    public function sixth(Request $request, $id)
    {
        $update = Home::find($id);


        $update->s6_Title = $request->input('s6_Title');
        $update->s6_Paragraph = $request->input('s6_Paragraph');
        // $s6_Image1 = $request->input('s6_Image1');



        $s6_Image1 = $request->file('s6_Image1')->getClientOriginalName();

        $Image = $request->s6_Image1->move(public_path('/frontend/images'), $s6_Image1);

        $update->s6_Description1 = $request->input('s6_Description1');
        // $s6_Image2 = $request->input('s6_Image2');



        $s6_Image2 = $request->file('s6_Image2')->getClientOriginalName();

        $Image = $request->s6_Image2->move(public_path('/frontend/images'), $s6_Image2);


        $update->s6_Description2 = $request->input('s6_Description2');
        // $s6_Image3 = $request->input('s6_Image3');



        $s6_Image3 = $request->file('s6_Image3')->getClientOriginalName();

        $Image = $request->s6_Image3->move(public_path('/frontend/images'), $s6_Image3);



        $update->s6_Description3 = $request->input('s6_Description3');
        // $s6_Image4 = $request->input('s6_Image4');



        $s6_Image4 = $request->file('s6_Image4')->getClientOriginalName();

        $Image = $request->s6_Image4->move(public_path('/frontend/images'), $s6_Image4);


        $update->s6_Description4 = $request->input('s6_Description4');
        // $s6_Image5 = $request->input('s6_Image5');



        $s6_Image5 = $request->file('s6_Image5')->getClientOriginalName();

        $Image = $request->s6_Image5->move(public_path('/frontend/images'), $s6_Image5);



        $update->s6_Description5 = $request->input('s6_Description5');
        // $s6_Image6 = $request->input('s6_Image6');



        $s6_Image6 = $request->file('s6_Image6')->getClientOriginalName();

        $Image = $request->s6_Image6->move(public_path('/frontend/images'), $s6_Image6);



        $update->s6_Description6 = $request->input('s6_Description6');

        $update->s6_Image1 = $s6_Image1;
        $update->s6_Image2 = $s6_Image2;
        $update->s6_Image3 = $s6_Image3;
        $update->s6_Image4 = $s6_Image4;
        $update->s6_Image5 = $s6_Image5;
        $update->s6_Image6 = $s6_Image6;
        $update->update();


        return redirect('/admin/pages');
    }
    public function seventh(Request $request, $id)
    {
        $update = Home::find($id);

        $update->s7_Heading = $request->input('s7_Heading');
        $update->s7_Description = $request->input('s7_Description');
        // $s7_Image = $request->input('s7_Image');



        $s7_Image = $request->file('s7_Image')->getClientOriginalName();

        $Image = $request->s7_Image->move(public_path('/frontend/images'), $s7_Image);


        $update->s7_Image = $s7_Image;

        $update->update();

        return redirect('/admin/pages');
    }
}
