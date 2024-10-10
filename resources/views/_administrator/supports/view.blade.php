<div>

    <x-breadcrumb title="" sub_title="Support"></x-breadcrumb>

    <!-- start: page body -->
    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="inbox d-flex flex-nowrap align-items-start">
                        <div class="order-1 sticky-lg-top shadow-sm">
                            <ul class="menu-list list-unstyled mb-0">
                                <li><a class="m-link pt-0" href="{{ route('administrator.support.create') }}"><span
                                            class="btn bg-secondary text-light w-100 mb-3">New Message</span></a>
                                </li>
                                <li><a class="m-link active" href="{{ route('administrator.supports') }}"><i
                                            class="fa fa-inbox"></i><span>Inbox</span><span
                                            class="badge bg-light text-dark ms-2 ms-auto">{{ count($count) }}</span></a>
                                </li>
                                <li><a class="m-link" href="#"><i class="fa fa-send"></i><span>Sent</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-body p-3">
                                            <button class="nav-link color-600" wire:click="delete()"><i
                                                    class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="mb-0"><a href="{{ route('administrator.supports') }}"><i
                                                        class="fa fa-arrow-left me-3"></i></a>{{ $support->subject }}
                                            </h5>
                                        </div>
                                        <div class="bg-light px-4 py-3">
                                            <div class="row align-items-center">

                                                <div class="col ml-n2">
                                                    <div class="mb-1"><span
                                                            class="fw-bold">{{ $support->email }}</span>
                                                    </div>

                                                </div>
                                                <div class="col-auto d-none d-md-inline-block">
                                                    <span>{{ dateToWordWithTime($support->date) }}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $support->message }}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('.inbox .inbox-list-toggle').on('click', function() {
                            $('.inbox .order-1').toggleClass('open');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" id="delete_support" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirem Delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Deleting support will
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
        window.addEventListener('modalOpenedDelete', event => {
            $('#delete_support').modal('show');
        })

        window.addEventListener('modalClosedDelete', event => {
            $('#delete_support').modal('hide');
        })
    </script>
@endpush
