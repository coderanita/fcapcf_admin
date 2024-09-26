<div>

  <table class="myDataTable table table-hover mb-0">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Role</th>
        <th>Users</th>
        <th>Access Level</th>
        <th class="text-wrap">Permissions</th>
        <th>Description</th>
        <th class="text-nowrap">Action</th>
      </tr>
    </thead>
    <tbody>

      @php
        $counter = $roles->firstItem();
      @endphp

      @foreach ($roles as $role)
        <tr>
          <td> {{ $counter++ }}</td>
          <td>{{ ucfirst($role->name) }}</td>
          <td>{{ $role->users_count }}</td>
          <td>{{ ucfirst($role->access_level) }}</td>
          <td class="text-wrap">
            @if (count($role->permissions))
              <span class="badge bg-info me-1">{!! implode('</span><span class="badge bg-info me-1">', $role->permissions->pluck('name')->toArray()) !!}</span>
            @else
              <span class="badge bg-danger"> no permission addedd</span>
            @endif

          </td>
          <td>{{ $role->desc }} </td>

          <td class="text-nowrap">

            <a href="{{route('administrator.roles.show',$role->name)}}">
              <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                title="View"><i class="fa fa-eye"></i></button>
            </a>


            @if ($role->access_level !== 'administrator')
              <button wire:click='setRole({{ $role->id }},"updateRole")' type="button"
                class="btn btn-link btn-sm text-succes" title="Update Role">
                <i class="fa fa-pencil"></i>
              </button>


              <button wire:click="setRole({{ $role->id }},'deleteRole')" type="button"
                class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                title="Delete"><i class="fa fa-trash"></i>
              </button>
            @endif



          </td>


        </tr>
      @endforeach

    </tbody>
  </table>

  <x-custom-modal isOpenModal="{{ $isOpenModal['updateRole'] ?? false }}" title="Update {{ $name }}"
    id="updateRole" submit="update({{ $roleId }})">
    <x-slot name="body">
      <div class="col-md-12">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" wire:model.live='name' placeholder="HR">
        <x-input-error for="name" />
      </div>


      <div class="col-md-12">
        <label class="form-label">Access Level</label>
        <select class="form-select" wire:model.live='access_level'>
          <option selected>Choose...</option>
          @foreach (getAccessLevels() as $level)
            <option value="{{ $level }}">{{ ucwords($level) }}</option>
          @endforeach

        </select>
        <x-input-error for="access_level" />
      </div>

      <div class="col-md-12">
        <label class="form-label">Select Permission(s)</label>
        @foreach ($permissions as $perm)
          <div class="col-12 fs-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" wire:model='{{ 'permission.' . $perm->code }}'
                id="permission_{{ $perm->id }}">
              <label class="form-check-label" for="permission_{{ $perm->id }}">{{ ucfirst($perm->name) }}</label>
            </div>
          </div>
        @endforeach

        <x-input-error for="permission" />


      </div>
      <div class="col-md-12">
        <label class="form-label">Description</label>
        <textarea class="form-control" wire:model.live='desc'></textarea>
        <x-input-error for="desc" />
      </div>

    </x-slot>
    <x-slot name='footer'>

      <button type="submit" class="btn btn-primary">Update</button>
      <button type="reset" class="btn btn-dark" wire:click="closeModal()">Cancel</button>

    </x-slot>

  </x-custom-modal>


  <x-custom2-modal isOpenModal="{{ $isOpenModal['deleteRole'] ?? false }}"
    title="Confirm Delete  {{ $name }}?" id="deleteRole" class="modal-md modal-dialog-centered"
    submit="delete({{ $roleId }})">
    <x-slot name="body">
      <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Deleting role will remove all of
        information from our database. </h5>
    </x-slot>
    <x-slot name="footer">
      <button class="btn btn-danger" type="submit" id="delete-record">Yes, Delete It!!</button>
      <button type="button" class="btn btn-dark" wire:click="closeModal()" data-bs-dismiss="modal">Close</button>
    </x-slot>
  </x-custom2-modal>

</div>
