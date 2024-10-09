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
                                            <a class="nav-link color-600" href="#"><i class="fa fa-trash"></i></a>
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
</div>
