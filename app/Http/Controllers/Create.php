<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Create extends Controller
{
    function create()
    {
        return view('livewire.create');
    }

    function add(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'paragraph' => 'required',
        ]);
        DB::table('Blog')->insert([
            'Heading' => $request->input('heading'),
            'Paragraph' => $request->input('paragraph')
        ]);

        return redirect('/Blog');
    }
}
