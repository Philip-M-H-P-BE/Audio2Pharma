<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ReplyToSubmittedContactForm;

class ContactPageController extends Controller
{
    public function index() {
        return view('contact');
    }
    public function processContactForm(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $boodschap = $request->boodschap;
        Mail::to($email)
            ->send(new ReplyToSubmittedContactForm($name, $boodschap));
        return response()->json($request);
        
    }
}
