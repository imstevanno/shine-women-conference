<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function registration () {
        return view('pages.registration.index');
    }
}
