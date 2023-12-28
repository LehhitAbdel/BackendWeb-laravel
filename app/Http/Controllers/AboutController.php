<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index()
    {
        
    }

    public function show()
{
    $sources = [
        (object) ['title' => 'Laravel documentation', 'url' => 'https://laravel.com'],
        (object) ['title' => 'Source 2 Title', 'url' => 'http://source2.com'],
        // Add more sources as needed
    ];

    return view('/about', compact('sources'));
}
}
