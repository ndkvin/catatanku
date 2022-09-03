<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Article\CreateArticle;
use App\Http\Requests\Article\EditArticle;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $articles = Article::with(['category'])->get();

    return view('pages.admin.article.home', [
      'articles' => $articles,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Category::all();

    return view('pages.admin.article.create', [
      'categories' => $categories,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateArticle $request)
  {
    if (Auth::user()->role == 'ADMIN') {
      $data = $request->all();
      $data['slug'] = Str::slug($data['title']);
      $data['image_poster'] = $request->file('image_poster')->store('assets/article', 'public');
      $data['user_id'] = Auth::user()->id;
      Article::create($data);

      return redirect()->route('article.index')
        ->with('status', 'Article created successfully');
    }

    return redirect()->route('article.inde')
      ->withErrors([
        'error' => 'You don\'t have permission to access this content',
      ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $article = Article::findOrFail($id);
    $categories = Category::all();

    return view('pages.admin.article.edit', [
      'article' => $article,
      'categories' => $categories,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(EditArticle $request, $id)
  {
    if (Auth::user()->role == 'ADMIN') {
      $data = $request->all();
      $article = Article::findOrFail($id);
      if ($request->file('image_poster')) {
        $data['image_poster'] = $request->file('image_poster')->store('assets/article', 'public');
      }

      $article->update($data);
      return redirect()->route('article.index')
        ->with('status', 'Article updated successfully');
    }

    return redirect()->route('article.inde')
      ->withErrors([
        'error' => 'You don\'t have permission to access this content',
      ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    if (Auth::user()->role == 'ADMIN') {
      $article = Article::findOrFail($id);

      $article->delete();
      return redirect()->route('article.index')
        ->with('status', 'Article deleted successfully');
    }

    return redirect()->route('article.index')
      ->withErrors([
        'error' => 'You don\'t have permission to access this resource',
      ]);
  }
}
