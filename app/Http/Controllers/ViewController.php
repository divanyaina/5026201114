<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showETS()
    {
        return view('pwebets');
    }

    function funcProcess(Request $request)
    {
        return view('processcolor');
    }

    function showForm()
    {
        return view('formcolor');
    }

}
