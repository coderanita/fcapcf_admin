<div>
    <div class="page-header pattern-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item">
                            <a href="../index.html">FCAPCF</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Reports
                        </li>
                    </ol>
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="h2 mb-md-0 text-white fw-light">Users Report</h1>
                        <div class="page-action">
                            <!-- btn:: create new project -->

                            <!-- btn:: Filter -->
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle after-none rounded-pill"
                                    data-bs-toggle="dropdown">
                                    <span class="me-1 d-none d-lg-inline-block">Filter</span>
                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 1.00018C0 0.867575 0.0526784 0.740398 0.146447 0.64663C0.240215 0.552862 0.367392 0.500183 0.5 0.500183H12.5C12.6326 0.500183 12.7598 0.552862 12.8536 0.64663C12.9473 0.740398 13 0.867575 13 1.00018V3.00018C13 3.12349 12.9544 3.24244 12.872 3.33418L8.5 8.19218V13.0002C8.49992 13.1051 8.46685 13.2073 8.40547 13.2924C8.3441 13.3774 8.25752 13.441 8.158 13.4742L5.158 14.4742C5.08287 14.4992 5.00288 14.506 4.9246 14.4941C4.84632 14.4821 4.772 14.4518 4.70775 14.4055C4.6435 14.3592 4.59116 14.2983 4.55504 14.2279C4.51893 14.1574 4.50006 14.0794 4.5 14.0002V8.19218L0.128 3.33418C0.0456082 3.24244 2.21504e-05 3.12349 0 3.00018V1.00018ZM1 1.50018V2.80818L5.372 7.66618C5.45439 7.75792 5.49998 7.87688 5.5 8.00018V13.3062L7.5 12.6402V8.00018C7.50002 7.87688 7.54561 7.75792 7.628 7.66618L12 2.80818V1.50018H1Z"
                                            fill="white"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu border-0 shadow">
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="sortBy('personal_marital_status')">By Marital Status</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="sortBy('role_id')">By Role</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="sortBy('created_at')">By Registration Date</a>
                                    </li>
                                </ul>
                            </div>

                            <button wire:click="export" class="btn d-none d-sm-inline-flex bg-secondary rounded-pill"
                                type="button">
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
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: main page body area -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-12">
                    <!-- invoices: recent -->
                    <div class="col-12">
                        <!-- invoices: recent -->
                        <div class="card">
                            <div class="card-body owl-carousel owl-theme owl-loaded owl-drag" id="recent_invoices">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style=" transform: translate3d(0px, 0px, 0px);transition: all; width: 1307px;">
                                        <div class="owl-item active" style="width: 251.4px; margin-right: 10px">
                                            <div class="item card bg-body ribbon">
                                                <div class="option-9 position-absolute text-light">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="card-body">
                                                    <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">
                                                        TU
                                                    </div>
                                                    <small class="text-muted">Total Users</small>
                                                    <h4>{{ $totalUsers }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 251.4px; margin-right: 10px">
                                            <div class="item card bg-body">
                                                <div class="card-body">
                                                    <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">
                                                        TA
                                                    </div>
                                                    <small class="text-muted">Total Administrator</small>
                                                    <h4>{{ $totalAdministrators }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 251.4px; margin-right: 10px">
                                            <div class="item card bg-body">
                                                <div class="card-body">
                                                    <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">
                                                        TM
                                                    </div>
                                                    <small class="text-muted">Total Manager</small>
                                                    <h4>{{ $totalManagers }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 251.4px; margin-right: 10px">
                                            <div class="item card bg-body">
                                                <div class="card-body">
                                                    <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">
                                                        TS
                                                    </div>
                                                    <small class="text-muted">Total Staff</small>
                                                    <h4>{{ $totalStaffs }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 251.4px; margin-right: 10px">
                                            <div class="item card bg-body">
                                                <div class="card-body">
                                                    <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">
                                                        TV
                                                    </div>
                                                    <small class="text-muted">Total Volunteers</small>
                                                    <h4>{{ $totalVolunteers }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev disabled">
                                        <span aria-label="Previous">‹</span></button><button type="button"
                                        role="presentation" class="owl-next disabled">
                                        <span aria-label="Next">›</span>
                                    </button>
                                </div>
                                <div class="owl-dots disabled">
                                    <button role="button" class="owl-dot active">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Plugin Js -->
                        <script src="./assets/js/bundle/owlcarousel.bundle.js"></script>
                        <!-- Jquery Page Js -->
                        <script>
                            // recent invoices Carousel
                            $("#recent_invoices").owlCarousel({
                                loop: true,
                                margin: 10,
                                responsiveClass: true,
                                responsive: {
                                    0: {
                                        items: 1,
                                        nav: true,
                                    },
                                    600: {
                                        items: 2,
                                        nav: false,
                                    },
                                    1000: {
                                        items: 4,
                                        nav: true,
                                        loop: false,
                                    },
                                    1400: {
                                        items: 5,
                                        nav: true,
                                        loop: false,
                                    },
                                },
                            });
                        </script>
                    </div>
                    <!-- Plugin Js -->
                    <script src="./assets/js/bundle/owlcarousel.bundle.js"></script>
                    <!-- Jquery Page Js -->
                    <script>
                        // recent invoices Carousel
                        $("#recent_invoices").owlCarousel({
                            loop: true,
                            margin: 10,
                            responsiveClass: true,
                            responsive: {
                                0: {
                                    items: 1,
                                    nav: true,
                                },
                                600: {
                                    items: 2,
                                    nav: false,
                                },
                                1000: {
                                    items: 4,
                                    nav: true,
                                    loop: false,
                                },
                                1400: {
                                    items: 5,
                                    nav: true,
                                    loop: false,
                                },
                            },
                        });
                    </script>
                </div>
                <div class="col-12">
                    <!-- invoices: all -->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Table showing Project Reports</h6>
                            <div class="dropdown morphing scale-left">
                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                    aria-label="Card Full-Screen" data-bs-original-title="Card Full-Screen"><i
                                        class="icon-size-fullscreen"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row dt-row">
                                    <div class="col-sm-12 table-responsive">
                                        <table
                                            class="myDataTable table table-hover align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                            id="DataTables_Table_0" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 88px" aria-sort="ascending"
                                                        aria-label="Project: activate to sort column descending">
                                                        Full Name
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 50px"
                                                        aria-label="region: activate to sort column ascending">
                                                        Marital Status
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 50px"
                                                        aria-label="region: activate to sort column ascending">
                                                        Country
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 50px"
                                                        aria-label="region: activate to sort column ascending">
                                                        Age
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 50px"
                                                        aria-label="region: activate to sort column ascending">
                                                        Education
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 50px"
                                                        aria-label="region: activate to sort column ascending">
                                                        Experience
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 50px"
                                                        aria-label="region: activate to sort column ascending">
                                                        Emergency Contact
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 50px"
                                                        aria-label="region: activate to sort column ascending">
                                                        Registered
                                                    </th>

                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 88px" aria-sort="ascending"
                                                        aria-label="Project: activate to sort column descending">
                                                        Email
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 75px"
                                                        aria-label="Status: activate to sort column ascending">
                                                        Type
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                        colspan="1" style="width: 75px"
                                                        aria-label="Status: activate to sort column ascending">
                                                        Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($users as $user)
                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                            <span>{{ $user->fname }} {{ $user->lname }}</span>
                                                        </td>
                                                        <td>{{ $user->profile->personal_marital_status ?? '' }}</td>
                                                        <td>{{ $user->profile->country->name ?? '' }}</td>
                                                        <td>{{ $user->profile ? \Carbon\Carbon::parse($user->profile->personal_birth_date)->age : '' }}
                                                        </td>
                                                        <td>{{ $user->profile->education ?? '' }}</td>
                                                        <td>{{ $user->profile->work_experience ?? '' }}</td>
                                                        <td>{{ $user->profile && $user->profile->emergency_phone ? '+' . $user->profile->emergency_phone : '' }}
                                                        </td>
                                                        <td>{{ dateToWord($user->created_at) }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>
                                                            {{ $user->role->name }}
                                                        </td>
                                                        <td><span
                                                                class="badge {{ $user->active == 1 ? 'bg-success' : 'bg-danger' }}">{{ $user->active == 1 ? 'Active' : 'Inactive' }}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 35px">
                                    <div class="col-sm-12 col-md-5"></div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="DataTables_Table_0_previous">
                                                    <a href="#" aria-controls="DataTables_Table_0"
                                                        data-dt-idx="previous" tabindex="0"
                                                        class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="DataTables_Table_0"
                                                        data-dt-idx="0" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="DataTables_Table_0_next">
                                                    <a href="#" aria-controls="DataTables_Table_0"
                                                        data-dt-idx="next" tabindex="0" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Plugin Js -->
                    <script src="./assets/js/bundle/dataTables.bundle.js"></script>
                    <!-- Jquery Page Js -->
                    <script>
                        $(document).ready(function() {
                            $("#invoice_list").addClass("nowrap").dataTable({
                                responsive: true,
                                searching: false,
                                paging: false,
                                ordering: true,
                                info: false,
                            });
                            $('a[data-bs-toggle="tab"]').on("shown.bs.tab", function(e) {
                                $($.fn.dataTable.tables(true))
                                    .DataTable()
                                    .columns.adjust()
                                    .responsive.recalc();
                            });
                        });
                    </script>
                </div>
            </div>
            <!-- .row end -->
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/theme.js') }}"></script>
@endpush
