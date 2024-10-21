<?php

use App\Models\Role;


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
