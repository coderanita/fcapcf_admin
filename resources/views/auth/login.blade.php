<x-guest-layout>
 
  <!-- Form -->
  <form class="row g-2" method="POST" action="{{ route('login') }}">
    @csrf
    @method('post')
    <div class="d-flex d-lg-none justify-content-center">
      <div class="mb-4">
        <svg width="48" height="36" viewBox="0 0 48 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect class="fill-secondary" x="1.5" y="4.5" width="27" height="27" rx="13.5" />
          <rect class="fill-primary" x="13.5" y="1.5" width="33" height="33" rx="16.5" stroke="white"
            stroke-width="3" />
        </svg>
      </div>
    </div>
    <div class="col-12 text-center mb-4">
      <a href="{{ url('/') }}"><img src="{{ asset('img/firstchild.png') }}" alt="{{ config('app.name') }}" width="100px">
     </a>
      <h1>Sign in</h1>
      <span class="text-muted">Welcome back, you've been missed!</span>
    </div>
    <div class="col-12">
      <div class="mb-2">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control form-control-lg" name="email" :value="old('email')" required
          autofocus autocomplete="username">
          <x-input-error for='email' class="text-danger"/>
      </div>
    </div>
    <div class="col-12">
      <div class="mb-2">
        <div class="form-label">
          <span class="d-flex justify-content-between align-items-center"> Password
            @if (Route::has('password.request'))
              <a class="text-primary" href="{{ route('password.request') }}">Forgot Password?</a>
            @endif
          </span>
        </div>
        <input type="password" class="form-control form-control-lg" name="password" required
          autocomplete="current-password">
          <x-input-error for='password' class="text-danger"/>

      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
        
      </div>
    </div>
    <div class="col-12 text-center mt-4">
      <button class="btn btn-lg btn-block btn-dark lift text-uppercase" type="submit">SIGN IN</button>
    </div>
  </form>
  <!-- End Form -->
</x-guest-layout>
