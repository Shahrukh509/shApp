<?php

namespace App\Http\Controllers;

use App\Models\Faqheading;
use Illuminate\Http\Request;

class FaqheaderController extends Controller
{
    public function store(Request $request, $id)
    {
        $update = Faqheading::find($id);

        $update->Heading = $request->input('Heading');

        $update->update();

        // $Faqheading = Faqheading::create([
        //     'Heading' => $Heading
        // ]);

        // $allFaqheading = Faqheading::all();

        return redirect('/admin/pages');
    }
}
