@if (auth()->user()->role)
  @include(roleViewPath(auth()->user()->role->access_level ). '.top-menu')
  {{-- @include(auth()->user()->role->name . '.sidebar-menu') --}}
@endif
