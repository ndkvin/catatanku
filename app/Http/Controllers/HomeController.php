<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $headline = Article::with(['category'])
      ->orderBy('id', 'asc')
      ->first();
    $trendings = Article::with(['category'])->take(3)->get();
    $technologys = Article::with(['category'])
      ->whereHas('category', function (Builder $category) {
        $category->where('name', 'technology');
      })
      ->take(3)
      ->get();
    $categories = Category::all();

    return view('pages.home.home', [
      'headline' => $headline,
      'trendings' => $trendings,
      'technologys' => $technologys,
      'categories' => $categories,
    ]);
  }

  public function lastest()
  {
    $articles = Article::with(['category'])
      ->orderBy('created_at', 'desc')
      ->get();
    $categories = Category::all();

    return view('pages.home.orderby', [
      'categories' => $categories,
      'articles' => $articles,
      'name' => 'Lastest'
    ]);
  }

  public function oldest()
  {
    $articles = Article::with(['category'])
      ->orderBy('created_at', 'asc')
      ->get();
    $categories = Category::all();

    return view('pages.home.orderby', [
      'categories' => $categories,
      'articles' => $articles,
      'name' => 'Oldest'
    ]);
  }
}
