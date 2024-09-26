<div>
  <x-breadcrumb title="System Users" sub_title="User list">
    <x-slot name="page_action">
      <div class="page-action">
        <a wire:click='create'>
          <button class="btn d-none d-sm-inline-flex rounded-pill" type="button">
            <span class="me-1 d-none d-lg-inline-block">Create New</span>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7 0C7.23206 0 7.45462 0.0921874 7.61872 0.256282C7.78281 0.420376 7.875 0.642936 7.875 0.875V6.125H13.125C13.3571 6.125 13.5796 6.21719 13.7437 6.38128C13.9078 6.54538 14 6.76794 14 7C14 7.23206 13.9078 7.45462 13.7437 7.61872C13.5796 7.78281 13.3571 7.875 13.125 7.875H7.875V13.125C7.875 13.3571 7.78281 13.5796 7.61872 13.7437C7.45462 13.9078 7.23206 14 7 14C6.76794 14 6.54538 13.9078 6.38128 13.7437C6.21719 13.5796 6.125 13.3571 6.125 13.125V7.875H0.875C0.642936 7.875 0.420376 7.78281 0.256282 7.61872C0.0921874 7.45462 0 7.23206 0 7C0 6.76794 0.0921874 6.54538 0.256282 6.38128C0.420376 6.21719 0.642936 6.125 0.875 6.125H6.125V0.875C6.125 0.642936 6.21719 0.420376 6.38128 0.256282C6.54538 0.0921874 6.76794 0 7 0V0Z"
                fill="white" />
            </svg>
          </button>
        </a>

        <div class="btn-group">
          <button type="button" class="btn dropdown-toggle after-none rounded-pill" data-bs-toggle="dropdown">
            <span class="me-1 d-none d-lg-inline-block">Filter</span>
            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 1.00018C0 0.867575 0.0526784 0.740398 0.146447 0.64663C0.240215 0.552862 0.367392 0.500183 0.5 0.500183H12.5C12.6326 0.500183 12.7598 0.552862 12.8536 0.64663C12.9473 0.740398 13 0.867575 13 1.00018V3.00018C13 3.12349 12.9544 3.24244 12.872 3.33418L8.5 8.19218V13.0002C8.49992 13.1051 8.46685 13.2073 8.40547 13.2924C8.3441 13.3774 8.25752 13.441 8.158 13.4742L5.158 14.4742C5.08287 14.4992 5.00288 14.506 4.9246 14.4941C4.84632 14.4821 4.772 14.4518 4.70775 14.4055C4.6435 14.3592 4.59116 14.2983 4.55504 14.2279C4.51893 14.1574 4.50006 14.0794 4.5 14.0002V8.19218L0.128 3.33418C0.0456082 3.24244 2.21504e-05 3.12349 0 3.00018V1.00018ZM1 1.50018V2.80818L5.372 7.66618C5.45439 7.75792 5.49998 7.87688 5.5 8.00018V13.3062L7.5 12.6402V8.00018C7.50002 7.87688 7.54561 7.75792 7.628 7.66618L12 2.80818V1.50018H1Z"
                fill="white" />
            </svg>
          </button>
          <ul class="dropdown-menu border-0 shadow">
            <li><a class="dropdown-item" href="page-profile.html#">Today</a></li>
            <li><a class="dropdown-item" href="page-profile.html#">Yesterday</a></li>
            <li><a class="dropdown-item" href="page-profile.html#">Last 7 Days</a></li>
            <li><a class="dropdown-item" href="page-profile.html#">Last 30 Days</a></li>
            <li><a class="dropdown-item" href="page-profile.html#">This Month</a></li>
            <li><a class="dropdown-item" href="page-profile.html#">Last Month</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="page-profile.html#">Custom Range</a></li>
          </ul>
        </div>
        <!-- btn:: more action -->
        <button class="btn d-none d-sm-inline-flex bg-secondary rounded-pill" type="button">
          <span class="me-1 d-none d-lg-inline-block">Download</span>
          <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M7.64602 9.354C7.69247 9.40056 7.74764 9.43751 7.80839 9.46271C7.86913 9.48792 7.93425 9.50089 8.00002 9.50089C8.06579 9.50089 8.13091 9.48792 8.19165 9.46271C8.2524 9.43751 8.30758 9.40056 8.35402 9.354L10.354 7.354C10.4005 7.30751 10.4374 7.25232 10.4625 7.19158C10.4877 7.13084 10.5007 7.06574 10.5007 7C10.5007 6.93426 10.4877 6.86916 10.4625 6.80842C10.4374 6.74768 10.4005 6.69249 10.354 6.646C10.3075 6.59951 10.2523 6.56264 10.1916 6.53748C10.1309 6.51232 10.0658 6.49937 10 6.49937C9.93428 6.49937 9.86918 6.51232 9.80844 6.53748C9.7477 6.56264 9.69251 6.59951 9.64602 6.646L8.50002 7.793V4C8.50002 3.86739 8.44734 3.74021 8.35358 3.64645C8.25981 3.55268 8.13263 3.5 8.00002 3.5C7.86741 3.5 7.74024 3.55268 7.64647 3.64645C7.5527 3.74021 7.50002 3.86739 7.50002 4V7.793L6.35402 6.646C6.26013 6.55211 6.1328 6.49937 6.00002 6.49937C5.86725 6.49937 5.73991 6.55211 5.64602 6.646C5.55213 6.73989 5.49939 6.86722 5.49939 7C5.49939 7.13278 5.55213 7.26011 5.64602 7.354L7.64602 9.354Z"
              fill="white" />
            <path
              d="M4.406 1.842C5.40548 0.980135 6.68024 0.504139 8 0.5C10.69 0.5 12.923 2.5 13.166 5.079C14.758 5.304 16 6.637 16 8.273C16 10.069 14.502 11.5 12.687 11.5H3.781C1.708 11.5 0 9.866 0 7.818C0 6.055 1.266 4.595 2.942 4.225C3.085 3.362 3.64 2.502 4.406 1.842ZM5.059 2.599C4.302 3.252 3.906 4.039 3.906 4.655V5.103L3.461 5.152C2.064 5.305 1 6.452 1 7.818C1 9.285 2.23 10.5 3.781 10.5H12.687C13.98 10.5 15 9.488 15 8.273C15 7.057 13.98 6.045 12.687 6.045H12.187V5.545C12.188 3.325 10.328 1.5 8 1.5C6.91988 1.50431 5.87684 1.89443 5.059 2.6V2.599Z"
              fill="white" />
          </svg>
        </button>

      </div>
    </x-slot>

  </x-breadcrumb>
  <x-custom-modal isOpenModal="{{ $isOpenModal }}" title="Create New User" id="createUser" submit="save">
    <x-slot name="body">
      <div class="col-md-6">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control" wire:model.live='fname' placeholder="Ahmed">
        <x-input-error for="fname" />
      </div>

      <div class="col-md-6">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control" wire:model.live='lname' placeholder="Peter">
        <x-input-error for="lname" />

      </div>
      <div class="col-md-12">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" wire:model.live='email' placeholder="peter@email.com">
        <x-input-error for="email" />

      </div>
      <div class="col-md-6">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" wire:model.live='password' placeholder="********">
        <x-input-error for="password" />

      </div>

      <div class="col-md-6">
        <label class="form-label"></label>

        @if ($password)
          <button type="button" class="btn  btn-info" onclick="copyToClipboard('{{ $password }}')">Copy</button>
        @endif

        <button type="button" class="btn  btn-success" wire:click.prevent='randomPassword'>Generate</button>
      </div>
      <div class="col-md-12">
        <label class="form-label">Role</label>
        <select class="form-select" wire:model.live='role'>
          <option selected>Choose...</option>
          @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ ucwords($role->name) }} - {{ ucwords($role->access_level) }} Access
            </option>
          @endforeach

        </select>
        <x-input-error for="role" />
      </div>

      {{-- <div class="col-md-12">
        <label class="form-label">Select Permission(s)</label>
        <div class="col-12 fs-6">
          @foreach ($permissions as $permission)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" wire:model='{{ 'permission.' . $permission->code }}'
                id="{{ $permission->code }}">
              <label class="form-check-label" for="{{ $permission->code }}">{{ ucwords($permission->name) }}</label>
            </div>
          @endforeach


        </div>

      </div> --}}

    </x-slot>
    <x-slot name='footer'>

      <button type="submit" class="btn btn-primary">Save</button>
      <button type="reset" class="btn btn-dark" wire:click="closeModal()">Cancel</button>

    </x-slot>



  </x-custom-modal>
</div>
