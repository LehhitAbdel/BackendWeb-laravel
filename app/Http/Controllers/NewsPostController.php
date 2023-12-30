<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Http\Request;

use Carbon\Carbon;


class NewsPostController extends Controller
{
    public function index()
    {
        $newsPosts = NewsPost::orderBy('published_at', 'desc')->paginate(10);
        return view('news.index', compact('newsPosts'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->cover_image->extension();  
        $request->cover_image->move(public_path('images'), $imageName);
    
        NewsPost::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'cover_image' => $imageName, // Assuming $imageName is set from the image upload code
            'content' => $request->content,
            'published_at' => Carbon::now(),
        ]);
        return redirect('/news');
    }

    public function edit(NewsPost $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, NewsPost $news)
    {
        $news->update($request->all());
        return redirect('/news');
    }

    public function destroy(NewsPost $news)
    {
        $news->delete();
        return redirect('/news');
    }
}

