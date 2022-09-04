<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class DetailController extends Controller
{
    public function index(Request $req, $slug) {
        $article = Article::with(['category', 'user'])
                   ->where('slug', $slug)
                   ->first();

        $categories = Category::all();

        return view('pages.detail', [
          'article' => $article,
          'categories' => $categories,
        ]);
    }
}
