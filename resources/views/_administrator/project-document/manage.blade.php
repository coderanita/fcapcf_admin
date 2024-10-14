<div>

    @livewire('administrator.project-document.create')
    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="file-manager d-flex flex-nowrap align-items-start">
                        <div class="order-1 sticky-lg-top shadow-sm">
                            <button type="button" class="btn bg-secondary text-light mb-3 w-100"
                                wire:click="create">Create New</button>

                            <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0" role="tablist">
                                <li class="divider mt-4 py-2 border-top text-uppercase text-muted">
                                    <small>FOLDERS</small>
                                </li>
                                <li><a class="m-link" href="#" wire:click="fileType('Image')"><i
                                            class="fa fa-folder"></i><span>Images</span></a>
                                </li>
                                <li><a class="m-link" href="#" wire:click="fileType('Document')"><i
                                            class="fa fa-folder"></i><span>Documents</span></a></li>
                                <li><a class="m-link" href="#" wire:click="fileType('Video')"><i
                                            class="fa fa-folder"></i><span>Videos</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="drive_mydrive" role="tabpanel">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <h4 class="mb-0">My Drive</h4>
                                        </div>

                                    </div>
                                    <div class="row g-2 mt-5">
                                        <div class="col-12">
                                            <div class="row-title">
                                                <div>
                                                    <h6 class="fw-bold mb-0">Recent Activity</h6>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <table class="table align-middle card-table mb-0 myDataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date Uploaded</th>
                                                        {{-- <th>Location</th> --}}
                                                        <th>Uploaded By</th>
                                                        <th>Size</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($documents as $document)
                                                        <tr>
                                                            <td>
                                                                <span
                                                                    class="me-4 ms-2">{{ $document->file_name }}</span>
                                                            </td>
                                                            <td>{{ dateToWord($document->created_at) }}</td>
                                                            {{-- <td>Kwara, Ijeilasha South</td> --}}
                                                            <td>
                                                                {{ $document->user->fname }}
                                                                {{ $document->user->lname }}
                                                            </td>
                                                            <td>{{ $document->file_size }}
                                                                MB</td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-link btn-sm text-danger"
                                                                    wire:click="delete({{ $document }})"
                                                                    title="Delete"><i class="fa fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="text-center">
                                                                No File Found!
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- .row end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Delete --}}
    <x-modal-delete></x-modal-delete>
    {{-- Modal Delete --}}

    <div class="modal fade" id="add_document" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
            <div class="modal-content" style="padding: 35px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Upload Document</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="row g-3" style="margin-top: 60px">
                        <div>
                            <div class="mb-2 col-md-8">
                                <input type="file" class="form-control @error('file') is-invalid @enderror"
                                    wire:model="file" />
                                @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}</div>
                                @enderror
                            </div>

                            <p>Select a file and it will be uploaded automatically</p>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

@push('scripts')
    <script>
        window.addEventListener('modalClosed', event => {
            $('#add_document').modal('hide');
        })

        window.addEventListener('modalOpened', event => {
            $('#add_document').modal('show');
        })
    </script>
@endpush
