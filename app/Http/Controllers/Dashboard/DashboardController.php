<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
      $articles = Article::with(['category'])
                  ->where('user_id', Auth::user()->id)
                  ->get();

      return view('pages.dashboard.home', [
        'articles' => $articles
      ]);
    }
}
