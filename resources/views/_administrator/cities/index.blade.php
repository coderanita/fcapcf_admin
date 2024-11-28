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
                                            <td>{{ $city->id}}</td>
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

        <div class="tab-pane fade show active" id="nav-Preview5" role="tabpanel">
            <div class="mt-4">
                {{ $cities->links() }}
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

</div>

@push('scripts')
    <script>
        window.addEventListener('modalClosed', event => {
            $('#edit_project_country').modal('hide');
        })

        window.addEventListener('modalOpenedEdit', event => {
            $('#edit_project_country').modal('show');
        })
    </script>
@endpush
