<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contactFormSubmissions()
{
    return $this->hasMany(ContactFormSubmission::class);
}
}
