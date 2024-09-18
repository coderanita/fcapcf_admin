@if (auth()->user()->role)
  @include(roleViewPath(auth()->user()->role->name ). '.top-menu')
  {{-- @include(auth()->user()->role->name . '.sidebar-menu') --}}
@endif
