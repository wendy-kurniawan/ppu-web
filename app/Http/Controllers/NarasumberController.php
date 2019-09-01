<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NarasumberController extends Controller
{
    public function index() {
        return view('pages.narasumber');
    }
}
