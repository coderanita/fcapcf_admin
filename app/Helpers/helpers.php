<?php

use App\Models\Role;
use Carbon\Carbon;

if (!function_exists('getAccessLevels')) {
  function getAccessLevels()
  {
    return  ["administrator", "manager", "staff", "volunteer"];
    // return Role::all();
  }
}


// redirect()->intended($role['name'] . '/dashboard') : 
if (!function_exists('roleViewPath')) {
  function roleViewPath($role)
  {
    return is_dir(resource_path('views/_' . $role)) ? '_' . $role : abort(404);
  }
}

if (!function_exists('dateToWordWithTime')) {
  function dateToWordWithTime($date)
  {
    return Carbon::parse($date)->format('F j, Y, g:i A');
  }
}

if (!function_exists('dateToWord')) {
  function dateToWord($date)
  {
    return Carbon::parse($date)->format('F j, Y');
  }
}

if (!function_exists('formatMoney')) {
  function formatMoney($number)
  {
    return number_format($number, 2, '.', ',');
  }
}
