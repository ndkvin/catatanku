<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index() {
      $articles = Article::with(['category'])->get();

      return view('pages.admin.home', [
        'articles' => $articles
      ]);
    }
}
