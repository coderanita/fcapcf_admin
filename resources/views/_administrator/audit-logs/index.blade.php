<div>
    <div class="page-header pattern-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item">
                            <a href="#">Log</a>
                        </li>
                    </ol>
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="h2 mb-md-0 text-white fw-light">Audit Log</h1>
                        <div class="page-action">
                            <!-- btn:: create new project -->

                            <a href="{{ route('administrator.download.audit-logs') }}"
                                class="btn d-none d-sm-inline-flex bg-secondary rounded-pill" type="button">
                                <span class="me-1 d-none d-lg-inline-block">Download</span>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.64602 9.354C7.69247 9.40056 7.74764 9.43751 7.80839 9.46271C7.86913 9.48792 7.93425 9.50089 8.00002 9.50089C8.06579 9.50089 8.13091 9.48792 8.19165 9.46271C8.2524 9.43751 8.30758 9.40056 8.35402 9.354L10.354 7.354C10.4005 7.30751 10.4374 7.25232 10.4625 7.19158C10.4877 7.13084 10.5007 7.06574 10.5007 7C10.5007 6.93426 10.4877 6.86916 10.4625 6.80842C10.4374 6.74768 10.4005 6.69249 10.354 6.646C10.3075 6.59951 10.2523 6.56264 10.1916 6.53748C10.1309 6.51232 10.0658 6.49937 10 6.49937C9.93428 6.49937 9.86918 6.51232 9.80844 6.53748C9.7477 6.56264 9.69251 6.59951 9.64602 6.646L8.50002 7.793V4C8.50002 3.86739 8.44734 3.74021 8.35358 3.64645C8.25981 3.55268 8.13263 3.5 8.00002 3.5C7.86741 3.5 7.74024 3.55268 7.64647 3.64645C7.5527 3.74021 7.50002 3.86739 7.50002 4V7.793L6.35402 6.646C6.26013 6.55211 6.1328 6.49937 6.00002 6.49937C5.86725 6.49937 5.73991 6.55211 5.64602 6.646C5.55213 6.73989 5.49939 6.86722 5.49939 7C5.49939 7.13278 5.55213 7.26011 5.64602 7.354L7.64602 9.354Z"
                                        fill="white"></path>
                                    <path
                                        d="M4.406 1.842C5.40548 0.980135 6.68024 0.504139 8 0.5C10.69 0.5 12.923 2.5 13.166 5.079C14.758 5.304 16 6.637 16 8.273C16 10.069 14.502 11.5 12.687 11.5H3.781C1.708 11.5 0 9.866 0 7.818C0 6.055 1.266 4.595 2.942 4.225C3.085 3.362 3.64 2.502 4.406 1.842ZM5.059 2.599C4.302 3.252 3.906 4.039 3.906 4.655V5.103L3.461 5.152C2.064 5.305 1 6.452 1 7.818C1 9.285 2.23 10.5 3.781 10.5H12.687C13.98 10.5 15 9.488 15 8.273C15 7.057 13.98 6.045 12.687 6.045H12.187V5.545C12.188 3.325 10.328 1.5 8 1.5C6.91988 1.50431 5.87684 1.89443 5.059 2.6V2.599Z"
                                        fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

                                    @forelse ($logs as $log)
                                        <li class="row g-0 list-group-item d-flex align-items-start">
                                            <div class="col col-md-10 col-xxl-11">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-5 col-xxl-4 mb-1 mb-md-0">
                                                        <div>
                                                            <span
                                                                class="small text-muted text-uppercase me-2">{{ $log->user->fname }}
                                                                {{ $log->user->lname }}</span>
                                                            <span
                                                                class="border border-{{ $log->action == 'New' ? 'success' : 'danger' }} text-{{ $log->action == 'New' ? 'success' : 'danger' }} px-1 rounded small">{{ $log->action }}</span>
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
                                                {{ dateToWordWithTime($log->created_at) }}
                                            </div>
                                        </li>
                                    @empty
                                        <li class="list-group-item text-center">No logs available.</li>
                                    @endforelse


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
