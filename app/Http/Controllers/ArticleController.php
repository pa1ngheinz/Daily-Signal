<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with('category')->paginate(5);

        return view('editor.articles', compact('articles'));
    }

    public function create(){
        return view('editor.add-article');
    }
}
