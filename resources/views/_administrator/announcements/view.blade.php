<div>
    @livewire('administrator.announcements.create')


    <!-- start: page body -->
    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="inbox d-flex flex-nowrap align-items-start">
                        <div class="order-1 sticky-lg-top shadow-sm">
                            <button class="btn bg-secondary text-light w-100" data-bs-toggle="modal"
                                data-bs-target="#CreateAnnouncement">New Announcement</button>

                        </div>
                        <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-body p-3">
                                            <a class="nav-link color-600" href="#" wire:click="delete()"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="mb-0"><a href="{{ route('administrator.announcements') }}"><i
                                                        class="fa fa-arrow-left me-3"></i></a>{{ $announcement->title }}
                                            </h5>
                                        </div>
                                        <div class="bg-light px-4 py-3">
                                            <div class="row align-items-center">

                                                <div class="col ml-n2">
                                                    <div class="mb-1"><span
                                                            class="fw-bold">{{ $announcement->to }}</span>
                                                    </div>

                                                </div>
                                                <div class="col-auto d-none d-md-inline-block">
                                                    <span>{{ dateToWordWithTime($announcement->date) }}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $announcement->description }}
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
    <div class="modal fade" id="delete_announcement" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirem Delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Deleting announcement
                        will
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
            $('#delete_announcement').modal('show');
        })

        window.addEventListener('modalClosedDelete', event => {
            $('#delete_announcement').modal('hide');
        })
    </script>
@endpush
