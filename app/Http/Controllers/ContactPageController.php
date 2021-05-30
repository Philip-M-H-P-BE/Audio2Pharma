<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\RespondToContactFormSubmission; 

class ContactPageController extends Controller
{
    public function index() {
        return view('contact');
    }
    public function processContactForm(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $boodschap = $request->boodschap;
        RespondToContactFormSubmission::dispatch($email, $name, $boodschap)->onQueue('emailsToUsers');
        
        return response()->json($request);        
    }
}