<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormSubmission;

use Auth;


class ContactFormController extends Controller
{
    function index()
    {
        return view('/contactform');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $submission = new ContactFormSubmission();
        $submission->user_id = Auth::id(); // Assuming the user is authenticated
        $submission->message = $request->message;
        $submission->save();

        // Redirect or return response
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
