<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
        return view('pages.apply');
    }

    public function saveApplication(Request $request)
    {
        return $request;
    }
}
