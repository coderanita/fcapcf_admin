<div>

    @livewire('administrator.projects.create', ['title' => '', 'sub_title' => $project->project_name, 'details' => true])

    <!-- Start:: main page body area -->
    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="project-list d-flex flex-nowrap align-items-start">
                        <div class="order-1 sticky-lg-top shadow-sm">
                            <button type="button" class="btn bg-secondary text-light mb-3 w-100" data-bs-toggle="modal"
                                data-bs-target="#create_project">New Project</button>
                            <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0">
                                <li class="nav-item"><a class="nav-link active" href="app-project-detail.html#"
                                        data-bs-toggle="tab" data-bs-target="#pd_overview" role="tab">Project
                                        Overview</a></li>
                                <li class="nav-item"><a class="nav-link" href="app-project-detail.html#"
                                        data-bs-toggle="tab" data-bs-target="#pd_users" role="tab">Team Deployed</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app-project-detail.html#"
                                        data-bs-toggle="tab" data-bs-target="#pd_files" role="tab">Project Files</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app-project-detail.html#"
                                        data-bs-toggle="tab" data-bs-target="#pd_activity" role="tab">Project
                                        Objectives</a></li>
                                <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Project
                                        Cost</small></li>
                                <li>
                                    <h2 class="fw-normal">&#x20A6;{{ number_format($project->project_cost) }}</h2>
                                    <div class="mt-3">
                                        <div class="mb-0 fw-bold">{{ dateToWord($project->start_date) }}</div>
                                        <small class="text-muted">Start Date</small>
                                    </div>
                                </li>
                                <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Project
                                        Supervisor</small></li>
                                <li>
                                    <div class="circle">
                                        <img class="avatar xl rounded-circle img-thumbnail"
                                            src="assets/img/xs/avatar1.jpg.png" alt="">
                                    </div>
                                    <h6 class="mt-3 mb-0">Ahmed Peter</h6>
                                    <span>ahmedr@info.com </span>
                                    <button class="btn btn-outline-secondary btn-sm mt-3">Message</button>
                                </li>
                            </ul>
                        </div>
                        <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pd_overview" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0"><a class="me-2 fa fa-arrow-circle-left"
                                                href="{{ route('administrator.projects') }}" title="back"></a>Project
                                            Overview</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <div class="row g-3 row-deck">
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <span class="fw-bold h4 mb-2">0</span>
                                                    <div class="text-muted text-uppercase small">Beneficiaries</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <span class="fw-bold h4 mb-2">{{ count($invitedMembers) }}</span>
                                                    <div class="text-muted text-uppercase small">Team Deployed</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <span class="fw-bold h4 mb-2">0</span>
                                                    <div class="text-muted text-uppercase small">Expenses</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <span
                                                        class="fw-bold h4 mb-2">&#x20A6;{{ number_format($project->project_cost) }}</span>
                                                    <div class="text-muted text-uppercase small">Project Cost</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-7 col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6 class="card-title mb-0">Tasks Over Time</h6>
                                                    <!-- widgest: Card more action icon -->
                                                    <div class="dropdown morphing scale-left">
                                                        <a href="app-project-detail.html#" class="card-fullscreen"
                                                            data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                                                class="icon-size-fullscreen"></i></a>

                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="apex-wc-9"></div>
                                                </div>
                                            </div> <!-- .card end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pd_users" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0">Users ({{ count($invitedMembers) }})</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <div class="row g-2">
                                        @foreach ($invitedMembers as $invitedMember)
                                            <div class="col-12">
                                                <div class="card">
                                                    <div
                                                        class="card-body d-flex align-items-start flex-column flex-md-row">
                                                        <img class="avatar lg rounded-circle img-thumbnail ms-auto me-auto"
                                                            src="assets/img/xs/avatar1.jpg.png" alt="">
                                                        <div
                                                            class="media-body ms-md-2 ms-lg-3 ms-xl-4 text-md-start text-center w-100 mt-4 mt-md-0">
                                                            <div class="row g-0 align-items-center">
                                                                <div
                                                                    class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 mb-3 mb-md-0">
                                                                    <h6 class="mb-1">{{ $invitedMember->fname }}
                                                                        {{ $invitedMember->lname }}</h6>
                                                                    <span class="text-muted">
                                                                        {{ $invitedMember->email }}</span>
                                                                </div>
                                                                <div
                                                                    class="col-xxl-9 col-xl-9 col-lg-9 col-md-6 text-center">
                                                                    <ul
                                                                        class="list-unstyled d-flex mb-0 text-center text-md-start">
                                                                        <li class="flex-fill card p-2 px-xl-3">
                                                                            <h6 class="mb-0 text-danger">080 123 456
                                                                                7890
                                                                            </h6>
                                                                            <span class="text-muted">Phone</span>
                                                                        </li>
                                                                        <li class="flex-fill card p-2 px-xl-3 mx-1">
                                                                            <h6 class="mb-0 text-success">
                                                                                {{ $invitedMember->email }}
                                                                            </h6>
                                                                            <span class="text-muted">Email</span>
                                                                        </li>
                                                                        <li class="flex-fill card p-2 px-xl-3">
                                                                            <h6 class="mb-0 text-primary">
                                                                                {{ dateToWord($invitedMember->created_at) }}
                                                                            </h6>
                                                                            <span class="text-muted">Joined</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pd_files" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0">Project Files (45)</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <div
                                        class="row g-3 row-cols-xxl-4 row-cols-xl-2 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">



                                        @foreach (json_decode($project->files, true) as $file)
                                            <div class="col">
                                                <div class="card">
                                                    <div class="option-9 text-light">
                                                        <div
                                                            class="form-check form-switch position-absolute top-0 end-0 py-3 px-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="enable_for_web">
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="62"
                                                            height="62" viewBox="0 0 62 62" fill="none">
                                                            <path
                                                                d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z"
                                                                fill="#E2E5E7" />
                                                            <path
                                                                d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z"
                                                                fill="#B0B7BD" />
                                                            <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z"
                                                                fill="#CAD1D8" />
                                                            <path fill="#ff0000"
                                                                d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z" />
                                                            <path
                                                                d="M12.3203 36.7099C12.3203 36.1984 12.7233 35.6404 13.3724 35.6404H16.9509C18.9659 35.6404 20.7794 36.9889 20.7794 39.5735C20.7794 42.0225 18.9659 43.3865 16.9509 43.3865H14.3644V45.4325C14.3644 46.1145 13.9304 46.5001 13.3724 46.5001C12.8609 46.5001 12.3203 46.1145 12.3203 45.4325V36.7099ZM14.3644 37.5914V41.4509H16.9509C17.9894 41.4509 18.8109 40.5345 18.8109 39.5735C18.8109 38.4904 17.9894 37.5914 16.9509 37.5914H14.3644Z"
                                                                fill="white" />
                                                            <path
                                                                d="M23.8136 46.5C23.3021 46.5 22.7441 46.221 22.7441 45.5409V36.7408C22.7441 36.1847 23.3021 35.7798 23.8136 35.7798H27.3612C34.4408 35.7798 34.2858 46.5 27.5007 46.5H23.8136ZM24.7901 37.6708V44.6109H27.3612C31.5443 44.6109 31.7303 37.6708 27.3612 37.6708H24.7901Z"
                                                                fill="white" />
                                                            <path
                                                                d="M36.7966 37.7948V40.2573H40.7472C41.3052 40.2573 41.8632 40.8153 41.8632 41.3559C41.8632 41.8674 41.3052 42.2859 40.7472 42.2859H36.7966V45.539C36.7966 46.0815 36.4111 46.498 35.8686 46.498C35.1866 46.498 34.77 46.0815 34.77 45.539V36.7388C34.77 36.1828 35.1885 35.7778 35.8686 35.7778H41.3071C41.9891 35.7778 42.3921 36.1828 42.3921 36.7388C42.3921 37.2348 41.9891 37.7928 41.3071 37.7928H36.7966V37.7948Z"
                                                                fill="white" />
                                                            <path
                                                                d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z"
                                                                fill="#CAD1D8" />
                                                        </svg>
                                                        <h6 class="mt-4 mb-1">{{ $file['name'] }}</h6>
                                                        <span
                                                            class="text-muted">{{ \Carbon\Carbon::parse($file['created_at'])->diffForHumans() }}
                                                            <small>{{ $file['size'] }} MB</small></span>
                                                        <div class="text-truncate">
                                                            <i class="fa fa-map me-1"></i> North Carolina, CT
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pd_activity" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">{{ $project->project_name }}</h6>
                                            <button
                                                class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                                type="button"><i class="fa fa-bars"></i></button>
                                        </div>
                                        <div class="card-body">
                                            <div class="timeline-item ti-danger ms-2">
                                                <div class="d-flex">
                                                    <div class="flex-fill ms-3">
                                                        <div class="mb-1 fs-6">About the Project</div>
                                                        <span class="d-flex text-muted small">The Widows Empowerment
                                                            Initiative is a community-focused project dedicated to
                                                            improving the lives of widows by offering support,
                                                            resources, and opportunities for economic and social
                                                            empowerment. Recognizing the unique challenges that widows
                                                            often face, including financial instability, social
                                                            isolation, and limited access to education or employment,
                                                            this initiative seeks to create an inclusive environment
                                                            where widows can thrive and become self-sufficient. Through
                                                            workshops, training programs, and advocacy, the initiative
                                                            aims to transform the lives of widows, fostering resilience,
                                                            confidence, and independence. </span>
                                                    </div>
                                                </div>
                                            </div> <!-- timeline item end  -->
                                            <div class="timeline-item ti-danger ms-2">
                                                <div class="d-flex">
                                                    <div class="flex-fill ms-3">
                                                        <div class="mb-1 fs-6">Project Objectives:</div>
                                                        <span class="d-flex text-muted small">

                                                            The main objective of the {{ $project->project_name }} is
                                                            to empower widows by providing them with the necessary
                                                            tools, skills, and resources to achieve economic
                                                            independence and emotional well-being. The initiative
                                                            focuses on three core areas: financial empowerment through
                                                            entrepreneurship and job training, psychosocial support to
                                                            help widows overcome grief and isolation, and community
                                                            engagement to promote the rights and dignity of widows
                                                            within society. By addressing these key areas, the
                                                            initiative seeks to uplift widows and help them regain
                                                            control over their lives.
                                                        </span>

                                                    </div>
                                                </div>
                                            </div> <!-- timeline item end  -->
                                            <div class="timeline-item ti-success ms-2">
                                                <div class="d-flex">
                                                    <div class="flex-fill ms-3">
                                                        <div class="mb-1">Project Goal</div>
                                                        <span class="d-flex text-muted small">The ultimate goal of the
                                                            {{ $project->project_name }} is to create a supportive and
                                                            enabling environment where widows can rebuild their lives
                                                            with dignity, respect, and self-sufficiency. The initiative
                                                            aims to reach as many widows as possible, equipping them
                                                            with life-changing skills and opportunities, while also
                                                            advocating for policy changes that protect and promote the
                                                            rights of widows. Through sustained efforts, the project
                                                            aspires to break the cycle of poverty and marginalization
                                                            that many widows face, ensuring they have equal
                                                            opportunities to succeed in their personal and professional
                                                            lives. </span>

                                                    </div>
                                                </div>
                                            </div> <!-- timeline item end  -->



                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pd_settings" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Project Settings</h6>
                                            <button
                                                class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                                type="button"><i class="fa fa-bars"></i></button>
                                        </div>
                                        <form class="card-body">
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Project Icon</label>
                                                <div class="col-md-10">
                                                    <div class="avatar lg rounded-circle no-thumbnail"><i
                                                            class="fa fa-google fa-2x"></i></div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Project Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control form-control-lg">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Project Type</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control form-control-lg">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Project Description</label>
                                                <div class="col-md-10">
                                                    <textarea type="text" class="form-control form-control-lg" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Due Date</label>
                                                <div class="col-lg-3 col-md-5 col-md-10">
                                                    <input type="date" class="form-control form-control-lg">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Notifications</label>
                                                <div class="col-md-10">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="n_Phone">
                                                        <label class="form-check-label" for="n_Phone">Phone</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="n_email" checked="">
                                                        <label class="form-check-label" for="n_email">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            role="switch" id="Status" checked="">
                                                        <label class="form-check-label" for="Status">Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="card-footer text-end">
                                            <button type="button"
                                                class="btn btn-lg btn-white border lift">Discard</button>
                                            <button type="button" class="btn btn-lg btn-primary border lift">Save
                                                Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Plugin Js -->
                    <script src="{{ asset('js/bundle/apexcharts.bundle.js') }}"></script>
                    <!-- Jquery Page Js -->
                    <script>
                        $('.project-list .project-list-toggle').on('click', function() {
                            $('.project-list .order-1').toggleClass('open');
                        });
                        // Apex-wc-11
                        var apexwc12 = {
                            chart: {
                                height: 260,
                                type: 'donut',
                            },
                            labels: ['Active', 'Completed', 'Overdue', 'Yet to start'],
                            dataLabels: {
                                enabled: false,
                            },
                            legend: {
                                position: 'bottom', // left, right, top, bottom
                                horizontalAlign: 'center', // left, right, top, bottom
                            },
                            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)', 'var(--chart-color4)'],
                            series: [44, 55, 41, 17],
                            responsive: [{
                                breakpoint: 420,
                                options: {
                                    chart: {
                                        width: 200
                                    },
                                    legend: {
                                        position: 'bottom'
                                    }
                                }
                            }]
                        }
                        new ApexCharts(document.querySelector("#apex-wc-12"), apexwc12).render();
                        // Apex-wc-9
                        var apexwc9 = {
                            series: [{
                                name: "Complete",
                                data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
                            }, {
                                name: "Incomplete",
                                data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
                            }],
                            chart: {
                                height: 280,
                                type: 'line', // line, bar, area
                                toolbar: {
                                    show: false,
                                },
                                zoom: {
                                    enabled: false
                                },
                            },
                            colors: ['var(--chart-color1)', 'var(--chart-color5)', ],
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                width: [2, 2],
                                curve: 'smooth', // straight, smooth
                                dashArray: [0, 5]
                            },
                            legend: {
                                tooltipHoverFormatter: function(val, opts) {
                                    return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
                                }
                            },
                            markers: {
                                size: 0,
                                hover: {
                                    sizeOffset: 6
                                }
                            },
                            xaxis: {
                                categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                            },
                            tooltip: {
                                y: [{
                                    title: {
                                        formatter: function(val) {
                                            return val + " (Tasks)"
                                        }
                                    }
                                }, {
                                    title: {
                                        formatter: function(val) {
                                            return val + " (Tasks)"
                                        }
                                    }
                                }]
                            },
                        };
                        new ApexCharts(document.querySelector("#apex-wc-9"), apexwc9).render();
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
