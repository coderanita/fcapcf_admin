<div>
    <x-breadcrumb title="System Users" sub_title="User list">
        <x-slot name="page_action">
            <div class="page-action">
                <a href='{{ route('administrator.staffs.create') }}'>
                    <button class="btn d-none d-sm-inline-flex rounded-pill" type="button">
                        <span class="me-1 d-none d-lg-inline-block">Create New</span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0C7.23206 0 7.45462 0.0921874 7.61872 0.256282C7.78281 0.420376 7.875 0.642936 7.875 0.875V6.125H13.125C13.3571 6.125 13.5796 6.21719 13.7437 6.38128C13.9078 6.54538 14 6.76794 14 7C14 7.23206 13.9078 7.45462 13.7437 7.61872C13.5796 7.78281 13.3571 7.875 13.125 7.875H7.875V13.125C7.875 13.3571 7.78281 13.5796 7.61872 13.7437C7.45462 13.9078 7.23206 14 7 14C6.76794 14 6.54538 13.9078 6.38128 13.7437C6.21719 13.5796 6.125 13.3571 6.125 13.125V7.875H0.875C0.642936 7.875 0.420376 7.78281 0.256282 7.61872C0.0921874 7.45462 0 7.23206 0 7C0 6.76794 0.0921874 6.54538 0.256282 6.38128C0.420376 6.21719 0.642936 6.125 0.875 6.125H6.125V0.875C6.125 0.642936 6.21719 0.420376 6.38128 0.256282C6.54538 0.0921874 6.76794 0 7 0V0Z"
                                fill="white" />
                        </svg>
                    </button>
                </a>

                <div class="btn-group" wire:ignore>
                    <div id="reportrange"
                        style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #007bff; border-radius: 4px; width: 100%;">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span>Select Date Range</span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>

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
                            {{ ucwords($role->access_level) }} Access
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
@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush

@push('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var start = moment().subtract(1, 'month').startOf('month');
            // Set default end as today's date
            var end = moment().add(1, 'days');


            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                // Trigger Livewire event with new date range
                Livewire.dispatch('updateDateRange', {
                    start: start.format('YYYY-MM-DD'),
                    end: end.format('YYYY-MM-DD')
                });
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
        });
    </script>
@endpush
