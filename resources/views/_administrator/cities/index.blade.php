@push('scripts')
    <style>
        .dropdown-menu {
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            /* Make the dropdown span full width of the input */

            padding-left: 15px;
        }

        .input-group-text {
            cursor: pointer;
        }
    </style>
@endpush

<div>

    @livewire('administrator.cities.create')

    <!-- start: page body -->
    <div class="page-body">
        <div class="container-fluid">
            <!-- .card: tab -->
            <div class="row">
                <div class="col-12">
                </div>
            </div> <!-- .row end -->
            <!-- .card: small widgets -->
            <div class="row g-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table class="myDataTable table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($cities as $city)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $city->name }}</td>
                                            <td>
                                                <button type="button" class="btn btn-link btn-sm"
                                                    wire:click="edit({{ $city }})" title="Edit"><i
                                                        class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-link btn-sm"
                                                    wire:click="delete({{ $city }})" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- .row end -->
        </div>

        {{-- <div class="tab-pane fade show active" id="nav-Preview5" role="tabpanel">
            <div class="mt-4">
                {{ $cities->links() }}
            </div>
        </div> --}}
    </div>

    <div class="modal fade" id="edit_project_city" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
            <div class="modal-content" style="padding: 35px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Update City</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="row g-3" style="margin-top: 60px" wire:submit.prevent="update">

                        <div class="col-md-12">
                            <label class="form-label">State</label>
                            <select class="form-select" wire:model.live='selectedState'>
                                <option selected value="">Choose...</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ ucwords($state->name) }}
                                    </option>
                                @endforeach

                            </select>
                            <x-input-error for="selectedState" />
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">City Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12" style="margin-top: 45px;">
                            <button type="submit" class="btn btn-primary">Update City</button>
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-modal-delete></x-modal-delete>
</div>

</div>

@push('scripts')
    <script>
        window.addEventListener('modalClosed', event => {
            $('#edit_project_city').modal('hide');
        })

        window.addEventListener('modalOpenedEdit', event => {
            $('#edit_project_city').modal('show');
        })
    </script>

    <script src="{{ asset('js/theme.js') }}"></script>
    <!-- Plugin Js -->
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
            searching: false,
            paging: true,
            ordering: false,
            info: false,
        });
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
        });
    </script>
@endpush
