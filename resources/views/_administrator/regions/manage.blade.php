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

    @livewire('administrator.regions.create')

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
                                        <th>Region</th>
                                        <th>States</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($regions as $region)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $region->name }}</td>
                                            <td>
                                                <span class="badge bg-dark">Maiduguri</span>
                                                <span class="badge bg-info">Adamawa</span>
                                            </td>
                                            <td>{{ $region->description }}</td>
                                            <td>
                                                <button type="button" class="btn btn-link btn-sm"
                                                    wire:click="edit({{ $region }})" title="Edit"><i
                                                        class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-link btn-sm"
                                                    wire:click="delete({{ $region }})" data-bs-toggle="tooltip"
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
    </div>


    <!-- New user modal -->
    <div class="modal fade" id="edit_project_regions" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
            <div class="modal-content" style="padding: 35px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Update {{ $this->name }}</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="row g-3" style="margin-top: 60px" wire:submit.prevent="update">
                        <div class="col-md-12">
                            <label class="form-label">Region</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Select States</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly
                                    value="{{ count($selectedStates) ? count($selectedStates) . ' States Selected' : 'Select States' }}"
                                    aria-label="Selected States" aria-describedby="states-selection"
                                    data-bs-toggle="dropdown">
                                <span class="input-group-text" id="states-selection"><i
                                        class="fa fa-chevron-down"></i></span>

                                <div class="dropdown-menu w-100">
                                    @foreach ($states as $state)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $state->id }}"
                                                wire:model.live="selectedStates" id="state-{{ $state->id }}">
                                            <label class="form-check-label" for="state-{{ $state->id }}">
                                                {{ $state->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Describe </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="*********"
                                wire:model='description'> </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12" style="margin-top: 45px;">
                            <button type="submit" class="btn btn-primary">Update Region</button>
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Start:: footer link and more -->
        <div class="page-footer bg-card mt-4">
            <div class="container-fluid">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-2">
                    <p class="col-md-5 mb-0 text-muted">© 2024 <a href="javascript:void(0)">First Child & Prisoner
                            Care Foundation</a>. <span class="fa fa-heart text-danger"></span> </p>

                </footer>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" id="delete_project_regions" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirem Delete {{ $this->name }}?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Deleting role will
                        remove
                        all of
                        information from our database. </h5>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit" id="delete-record" wire:click="confirmDelete">Yes,
                        Delete It!!</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('modalClosed', event => {
            $('#edit_project_regions').modal('hide');
        })

        window.addEventListener('modalOpenedEdit', event => {
            $('#edit_project_regions').modal('show');
        })

        window.addEventListener('modalOpenedDelete', event => {
            $('#delete_project_regions').modal('show');
        })

        window.addEventListener('modalClosedDelete', event => {
            $('#delete_project_regions').modal('hide');
        })
    </script>
@endpush
