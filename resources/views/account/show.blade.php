<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Profile') }}
      </h2>
  </x-slot>

  <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
          @if (Laravel\Fortify\Features::canUpdateProfileInformation())
              @livewire('account.update-profile-information-form')

              <x-section-border />
          @endif

          @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
              <div class="mt-10 sm:mt-0">
                  @livewire('account.update-password-form')
              </div>

              <x-section-border />
          @endif

          @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
              <div class="mt-10 sm:mt-0">
                  @livewire('account.two-factor-authentication-form')
              </div>

              <x-section-border />
          @endif

          <div class="mt-10 sm:mt-0">
              @livewire('account.logout-other-browser-sessions-form')
          </div>

          @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
              <x-section-border />

              <div class="mt-10 sm:mt-0">
                  @livewire('account.delete-user-form')
              </div>
          @endif
      </div>
  </div>
</x-app-layout>
