<div>

  <table class="myDataTable table table-hover mb-0">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Account Type</th>
        <th>Assigned Program</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @php
        $counter = $users->firstItem();
      @endphp

      @foreach ($users as $user)
        <tr>
          <td> {{ $counter++ }}</td>
          <td>{{ $user->fullName() }} <br> <span class="text-info">{{ $user->email }}</span></td>
          <td>{{ ucwords($user->role->name) }}</td>
          <td><span class="badge bg-primary">MCA - Nasarawa</span></td>
          <td> <button title="Click To Change" wire:click="toggleActive({{ $user->id }})"
              class="badge  @if ($user->active) bg-success"> Active @else bg-danger"> Suspend @endif
        </button></td>
          <td>

            <a href="user-profile.html">
              <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                title="View"><i class="fa fa-eye"></i></button>
              </a>

           

              {{-- <button wire:click='loginAs({{ $user->id }})' type="button" class="btn btn-link btn-sm"                
                title="Login As {{ $user->name }}">
                <i class="fa fa-sign-in"></i>
              </button> --}}
           
              <button wire:click='setUser({{ $user->id }},"updateUser")' type="button" class="btn btn-link btn-sm"
                title="Update User">
                <i class="fa fa-pencil"></i>
              </button>


              <button wire:click="setUser({{ $user->id }},'deleteUser')" type="button" class="btn btn-link btn-sm"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i>
              </button>





          </td>


        </tr>
      @endforeach

    </tbody>
  </table>

  <div class="mt-5">
    {{ $users->links() }}
  </div>
  <x-custom-modal isOpenModal="{{ $isOpenModal['updateUser'] ?? false }}" title="Update {{ $fname . ' ' . $lname }}"
    id="updateUser" submit="update({{ $userId }})">
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
      <div class="col-md-6">
        <label class="form-label">Access Level</label>
        <select class="form-select" wire:model.live='role'>
          <option selected>Choose...</option>
          @foreach ($roles ?? [] as $role)
            <option value="{{ $role->id }}">{{ ucwords($role->name) }}</option>
          @endforeach

        </select>
        <x-input-error for="role" />

      </div>

    </x-slot>
    <x-slot name='footer'>

      <button type="submit" class="btn btn-primary">Update</button>
      <button type="reset" class="btn btn-dark" wire:click="closeModal()">Cancel</button>

    </x-slot>


  </x-custom-modal>


  <x-custom2-modal isOpenModal="{{ $isOpenModal['deleteUser'] ?? false }}"
    title="Confirm Delete  {{ $fname . ' ' . $lname }}?" id="deleteUser" class="modal-md modal-dialog-centered"
    submit="delete({{ $userId }})">
    <x-slot name="body">
      <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Deleting user will remove all of information from our database. </h5>
    </x-slot>
    <x-slot name="footer">
      <button class="btn btn-danger" type="submit" id="delete-record">Yes, Delete It!!</button>
      <button type="button" class="btn btn-dark" wire:click="closeModal()" data-bs-dismiss="modal">Close</button>
    </x-slot>
  </x-custom2-modal>

</div>
