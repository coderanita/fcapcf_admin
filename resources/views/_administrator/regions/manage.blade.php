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
                        <div class="col-12">
                            <label class="form-label">Describe </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" wire:model='description'> </textarea>
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

    {{-- Modal Delete --}}
    <x-modal-delete></x-modal-delete>
    {{-- Modal Delete --}}
</div>

@push('scripts')
    <script>
        window.addEventListener('modalClosed', event => {
            $('#edit_project_regions').modal('hide');
        })

        window.addEventListener('modalOpenedEdit', event => {
            $('#edit_project_regions').modal('show');
        })
    </script>
@endpush
