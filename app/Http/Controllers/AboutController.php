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
        (object) ['title' => 'My git', 'url' => 'https://github.com/LehhitAbdel/BackendWeb-laravel'],
        (object) ['title' => 'Laravel documentation', 'url' => 'https://laravel.com'],
        // Add more sources as needed
    ];

    return view('/about', compact('sources'));
}
}
