<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index() {
        return view('contact');
    }
    public function processContactForm(Request $request) {
        return response()->json($request);
    }
}
