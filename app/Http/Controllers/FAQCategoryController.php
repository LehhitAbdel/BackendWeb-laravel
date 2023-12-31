<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqCategory;

class FaqCategoryController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::all();
        return view('admin.faq_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.faq_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        FaqCategory::create($request->all());
        return redirect()->route('faq-categories.index');
    }

    public function edit(FaqCategory $faqCategory)
    {
        return view('admin.faq_categories.edit', compact('faqCategory'));
    }

    public function update(Request $request, FaqCategory $faqCategory)
    {
        $request->validate(['name' => 'required']);
        $faqCategory->update($request->all());
        return redirect()->route('faq-categories.index');
    }

    public function destroy(FaqCategory $faqCategory)
    {
        $faqCategory->delete();
        return redirect()->route('faq-categories.index');
    }
}

