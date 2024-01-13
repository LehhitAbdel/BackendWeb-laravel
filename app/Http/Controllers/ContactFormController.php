<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;


use Auth;


class ContactFormController extends Controller
{
    function index()
    {
        return view('/contactform');
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'email' => 'required|email'
        ]);

        //TODO send form in email to admin.
        // Prepare the email data
        $data = [
            'email' => $request->get('email'),
            'content' => $request->get('message')
        ];

        // use mailtrap and setup .env
        
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('admin@ehb.be') // Replace with actual admin email
                    ->subject('New Contact Form Submission');
            $message->from($data['email']);
        }); 
        
        


        // Redirect or return response
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
