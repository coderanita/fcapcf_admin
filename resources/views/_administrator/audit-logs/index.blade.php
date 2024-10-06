<div>
    <x-breadcrumb title="Log" sub_title="Audit Logs">


    </x-breadcrumb>


    <!-- start: page body -->
    <div class="page-body">
        <div class="container-fluid">
            <!-- .card: tab -->
            <div class="col-12">
                <div class="my-task d-flex flex-nowrap align-items-start">

                    <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                        <div class="tab-content">
                            <div class="tab-pane fade card show active" id="task_all" role="tabpanel">
                                <div class="card-header">
                                    <!-- <h4 class="mb-0">All Task</h4> -->
                                    <button class="btn btn-sm d-block d-lg-none btn-primary task-list-toggle"
                                        type="button"><i class="fa fa-bars"></i></button>
                                </div>
                                <ul class="list-group list-group-flush list-group-custom px-2 mb-2">

                                    @foreach ($logs as $log)
                                        <li class="row g-0 list-group-item d-flex align-items-start">
                                            <div class="col col-md-10 col-xxl-11">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-5 col-xxl-4 mb-1 mb-md-0">

                                                        <div>
                                                            <span
                                                                class="small text-muted text-uppercase me-2">{{ $log->user->fname }}
                                                                {{ $log->user->lname }}</span>
                                                            <span
                                                                class="border border-success text-success px-1 rounded small">{{ $log->action }}</span>
                                                        </div>
                                                        <span class="fs-6 me-2">{{ $log->user->email }}</span>
                                                    </div>
                                                    <div class="col">
                                                        <p class="i-msg mb-0 text-muted">{{ $log->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-auto ms-auto d-flex flex-column justify-content-between small">
                                                {{ dateToWordWithTime($log->created_at) }}</div>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('.my-task .task-list-toggle').on('click', function() {
                        $('.my-task .order-1').toggleClass('open');
                    });
                </script>
            </div>
        </div>

    </div>
</div>
