<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
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
                ->orderBy('id', 'desc')
                ->first();
    $trendings = Article::with(['category'])->take(3)->get();
    $technologys = Article::with(['category'])
                  ->whereHas('category', function(Builder $category) {
                    $category->where('name', 'technology');
                  })
                  ->take(3)
                  ->get();
    return view('pages.home', [
      'headline' => $headline,
      'trendins' => $trendings,
      'technologys' => $technologys
    ]);
  }
}
