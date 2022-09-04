<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoryController extends Controller
{
  public function index(Request $req, $slug)
  {
    $categories = Category::all();
    $articles = Article::with(['category'])
      ->whereHas('category', function ($category) use ($slug) {
        $category->where('slug', $slug);
      })
      ->get();
    $name = Category::where('slug', $slug)
      ->first();

    return view('pages.category', [
      'categories' => $categories,
      'articles' => $articles,
      'name' => $name,
    ]);
  }
}
