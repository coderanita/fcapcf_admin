<x-guest-layout>

  <form class="row g-2" method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('post')
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
      <!-- <img src="assets/img/auth-password-reset.svg" class="w240 mb-4" alt="" /> -->
      <img src="{{asset('img/firstchild.png')}}" alt="" width="100px">
      <h1>Forgot password?</h1>
      <span>Enter the email address and we'll send you instructions to reset your password.</span>
    </div>
    <div class="col-12">
      <div class="mb-2">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control form-control-lg" name="email" :value="old('email')" required
          autofocus autocomplete="username">
      </div>
    </div>
    <div class="col-12">
      <div class="mb-2">
        <div class="form-label">
          <span class="d-flex justify-content-between align-items-center"> New Password</span>
        </div>
        <input type="password" class="form-control form-control-lg" name="password" required
          autocomplete="new-password">
      </div>
    </div>

    <div class="col-12">
      <div class="mb-2">
        <div class="form-label">
          <span class="d-flex justify-content-between align-items-center"> Confirm Password</span>
        </div>
        <input type="password" class="form-control form-control-lg" name="password_confirmation" required
          autocomplete="new-password">
      </div>
    </div>
    <div class="col-12 text-center mt-4">

      <button class="btn btn-lg btn-block btn-dark lift text-uppercase" type="submit">Reset Password</button>

    </div>

  </form>
</x-guest-layout>
