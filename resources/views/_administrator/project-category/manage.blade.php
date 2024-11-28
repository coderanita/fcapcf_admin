<div>
    @livewire('administrator.project-category.create')
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
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                <button type="button" class="btn btn-link btn-sm"
                                                    wire:click="edit({{ $category }})" title="Edit"><i
                                                        class="fa fa-pencil"></i></button>
                                                <button type="button" class="btn btn-link btn-sm"
                                                    wire:click="delete({{ $category }})" data-bs-toggle="tooltip"
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

    <!-- Update modal -->
    <div class="modal fade" id="edit_project_category_modal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
            <div class="modal-content" style="padding: 35px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Update {{ $name }}</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="row g-3" style="margin-top: 60px" wire:submit.prevent="update">
                        <div class="col-md-12">
                            <label class="form-label">Category Title</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Describe Category</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" wire:model='description'> </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12" style="margin-top: 45px;">
                            <button type="submit" class="btn btn-primary">Update Category</button>
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
                    <p class="col-md-5 mb-0 text-muted">© 2024 <a href="javascript:void(0)">First Child & Prisoner Care
                            Foundation</a>. <span class="fa fa-heart text-danger"></span> </p>

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
            $('#edit_project_category_modal').modal('hide');
        })

        window.addEventListener('modalOpenedEdit', event => {
            $('#edit_project_category_modal').modal('show');
        })
    </script>
@endpush
