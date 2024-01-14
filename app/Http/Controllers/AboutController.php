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
        (object) ['title' => 'Laravel documentation (+breeze)', 'url' => 'https://laravel.com'],
        (object) ['title' => 'Chat GPT', 'url' => 'https://chat.openai.com'],
        (object) ['title' => 'Laravel daily (youtube)', 'url' => 'https://www.youtube.com/@LaravelDaily'],


        // Add more sources as needed
    ];

    return view('/about', compact('sources'));
}
}
