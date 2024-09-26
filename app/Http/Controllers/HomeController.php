<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    if (auth()->check() && auth()->user()->role) {
      // dd('admin');
      return to_route(auth()->user()->role->access_level . '.dashboard');
    }

    auth()->logout();
    return redirect('login');
  }
}
