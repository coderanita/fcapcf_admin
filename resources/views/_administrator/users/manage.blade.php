<div>
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 d-flex align-items-center">
            {{-- <label class="me-2 mb-0">Show</label>
            <select class=" form-select-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span class="ms-2">entries</span> --}}
        </div>
        <div class="col-sm-12 col-md-6 d-flex justify-content-end">
            <div class="d-flex align-items-center">
                <label class="me-2 mb-0">Search:</label>
                <input type="search" class="form-control form-control-sm" wire:model.live="search">
            </div>
        </div>
    </div>


    <table class="myDataTable table table-hover mb-0">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Account Type</th>
                <th>Assigned Program</th>
                <th>Contact</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @php
                // $counter = $users->firstItem();
            @endphp

            @foreach ($users as $user)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>{{ $user->fullName() }} <br> <span class="text-info">{{ $user->email }}</span></td>
                    <td>{{ ucwords($user->role->name) }}</td>
                    <td>
                        <span class="badge bg-primary">
                            @php
                                $projects = \App\Models\Project::whereJsonContains('invited_teams', [
                                    ['id' => $user->id],
                                ])->pluck('project_name');
                                echo $projects->join(', ') ?: 'No projects assigned';
                            @endphp
                        </span>

                    </td>

                    <td>{{ $user->profile && $user->profile->personal_phone ? '+' . $user->profile->country_code . $user->profile->personal_phone : '' }}

                    <td>

                        @if ($user->active)
                            <button title="Click To Change" wire:click="toggleActive({{ $user->id }})"
                                onclick="if(!confirm('Are you sure you want to suspend this user?')) return false;"
                                class="badge {{ $user->active ? 'bg-success' : 'bg-danger' }}">
                                {{ $user->active ? 'Active' : 'Suspend' }}
                            </button>
                        @endif

                        @if (!$user->active)
                            <button title="Click To Change" wire:click="toggleActive({{ $user->id }})"
                                onclick="if(!confirm('Are you sure you want to approve and make this user active?')) return false;"
                                class="badge {{ $user->active ? 'bg-success' : 'bg-danger' }}">
                                {{ $user->active ? 'Active' : 'Suspend' }}
                            </button>
                        @endif

                    </td>
                    <td>

                        <a href="{{ route('administrator.users.show', $user->id) }}">
                            <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="View User"><i class="fa fa-eye"></i></button>
                        </a>

                        <a href="{{ route('administrator.staffs.edit', $user->id) }}">
                            <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Edit User's  Profile"><i
                                    class="fa fa-pencil"></i></button>
                        </a>

                        {{-- <button wire:click="setUser({{ $user->id }}, 'suspendUser')" type="button"
                                class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Suspend User">
                                <i class="fa fa-ban"></i>
                            </button> --}}

                        {{-- <button wire:click='setUser({{ $user->id }},"updateUser")' type="button"
                                            class="btn btn-link btn-sm" title="Edit User's Account">
                                            <i class="fa fa-pencil"></i>
                                        </button> --}}


                        <button wire:click="setUser({{ $user->id }},'deleteUser')" type="button"
                            class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Delete User"><i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="mt-5">
        {{-- {{ $users->links() }} --}}
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
                    <button type="button" class="btn  btn-info"
                        onclick="copyToClipboard('{{ $password }}')">Copy</button>
                @endif

                <button type="button" class="btn  btn-success" wire:click.prevent='randomPassword'>Generate</button>
            </div>


            <div class="col-md-12">
                <label class="form-label">Role</label>
                <select class="form-select" wire:model.live='role'>
                    <option selected>Choose...</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ ucwords($role->name) }} -
                            {{ ucwords($role->access_level) }}
                            Access
                        </option>
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
            <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Deleting user will remove all
                of
                information from our database. </h5>
        </x-slot>
        <x-slot name="footer">
            <button class="btn btn-danger" type="submit" id="delete-record">Yes, Delete It!!</button>
            <button type="button" class="btn btn-dark" wire:click="closeModal()"
                data-bs-dismiss="modal">Close</button>
        </x-slot>
    </x-custom2-modal>

    <x-custom2-modal isOpenModal="{{ $isOpenModal['suspendUser'] ?? false }}"
        title="Confirm Suspend  {{ $fname . ' ' . $lname }}?" id="suspendUser"
        class="modal-md modal-dialog-centered" submit="delete({{ $userId }})">
        <x-slot name="body">
            <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Suspending the user will
                temporarily restrict access without deleting their information from our database. </h5>
        </x-slot>
        <x-slot name="footer">
            <button class="btn btn-danger" type="submit" id="delete-record">Yes, Delete It!!</button>
            <button type="button" class="btn btn-dark" wire:click="closeModal()"
                data-bs-dismiss="modal">Close</button>
        </x-slot>
    </x-custom2-modal>

</div>

@push('scripts')
    <script src="{{ asset('js/bundle/dataTables.bundle.js') }}"></script>
    <!-- Jquery Page Js -->
    <script>
        $('.myDataTable').addClass('nowrap').dataTable({
            responsive: true,
            searching: true,
            paging: true,
            ordering: true,
            info: false,
        });
        $('#myDataTable_no_filter').addClass('nowrap').dataTable({
            responsive: true,
            searching: true,
            paging: true,
            ordering: false,
            info: false,
        });
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
        });
    </script>
@endpush
