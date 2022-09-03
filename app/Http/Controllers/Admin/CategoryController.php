<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategory;
use App\Http\Requests\Category\UpdateCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::all();

    return view('pages.admin.category.home', [
      'categories' => $categories,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pages.admin.category.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateCategory $request)
  {
    if (Auth::user()->role == 'ADMIN') {
      $data = $request->all();

      $data['slug'] = Str::slug($data['name']);
      $data['image'] = $request->file('image')->store('assets/category', 'public');

      Category::create($data);

      return redirect()
        ->route('admin.category.index')
        ->with('status', 'Category created successfully');
    }

    return redirect()->route('admin.category.index')
      ->withErrors([
        'error' => 'you don\'t have permission to access this content'
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
    $category = Category::findOrfail($id);

    return view('pages.admin.category.edit', [
      'category' => $category,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateCategory $request, $id)
  {
    if (Auth::user()->role == 'ADMIN') {
      $data = $request->all();

      if ($request->file('image')) {
        $data['image'] = $request->file('image')->store('assets/category', 'public');
      }

      $category = Category::findOrFail($id);
      $category->update($data);
      return redirect()->route('admin.category.index')
        ->with('status', 'Category updated successfully');
    }

    return redirect()->route('admin.category.index')
      ->withErrors([
        'error' => 'you don\'t have permission to access this content'
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
      $category = Category::findOrFail($id);

      $category->delete();

      return redirect()->route('admin.category.index')
        ->with('status', 'Category Removed');
    }

    return redirect()->route('admin.category.index')
      ->withErrors([
        'error' => 'you don\'t have permission to access this content'
      ]);
  }
}
