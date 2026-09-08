<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with('category')->paginate(5);

        return view('editor.articles', compact('articles'));
    }

    public function create(){
        $categories = Category::all();

        return view('editor.add-article', compact('categories'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,web|max:3048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        Article::create($validated);

        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }
}
