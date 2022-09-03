<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\EditRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = User::all();
    return view('pages.admin.user.home', [
      'users' => $user,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
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
    $user = User::findOrFail($id);

    return view('pages.admin.user.edit', [
      'user' => $user,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(EditRequest $request, $id)
  {
    if (Auth::user()->role == 'ADMIN') {
      $data = $request->all();
      $user = User::findOrFail($id);

      $user->update($data);

      return redirect()->route('user.index')
        ->with('status', 'User updated successfully');
    }

    return redirect()->route('user.index')
      ->withErrors([
        'error' => 'You don\'t have permission to access this content'
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
      $user = User::findOrFail($id);

      $user->delete();

      return redirect()->route('user.index')
        ->with('status', 'User deleted successfully');
    }

    return redirect()->route('user.index')
      ->withErrors([
        'error' => 'You don\'t have permission to access this content'
      ]);
  }
}
