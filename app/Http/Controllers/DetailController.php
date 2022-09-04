<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DetailController extends Controller
{
    public function index(Request $req, $slug) {
        $article = Article::with(['category', 'user'])
                   ->where('slug', $slug)
                   ->first();

        return view('pages.detail', [
          'article' => $article,
        ]);
    }
}
