<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next, string $role): Response
  {
    if ($request->user()->hasRole($role) && $request->user()->active) {
      return $next($request);
    }




    auth()->logout();
    abort(403, "Kindly contact the administrator as either your account is currently suspended or you do not possess the necessary permissions to access this route");
  }
}
