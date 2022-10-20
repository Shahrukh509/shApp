<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactusController extends Controller
{
    public function store(Request $request, $id)
    {
        $update = Contactus::find($id);

        $update->Heading = $request->input('Heading');
        $update->Description = $request->input('Description');

        $update->update();

        return redirect('/admin/pages');
    }
}
