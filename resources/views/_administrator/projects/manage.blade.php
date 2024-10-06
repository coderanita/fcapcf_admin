<div>
    @livewire('administrator.projects.create')

    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="project-list d-flex flex-nowrap align-items-start">
                        <div class="order-1 sticky-lg-top shadow-sm">
                            <button type="button" class="btn bg-secondary text-light mb-3 w-100" data-bs-toggle="modal"
                                data-bs-target="#create_project">New Project</button>
                            <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="app-project.html#"
                                        data-bs-toggle="tab" data-bs-target="#project_all" role="tab"><i
                                            class="fa fa-tasks"></i><span>All Project</span><span
                                            class="badge bg-light text-dark ms-2 ms-auto">18</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="app-project.html#" data-bs-toggle="tab"
                                        data-bs-target="#project_progress" role="tab"><i
                                            class="fa fa-product-hunt"></i><span>In Progress</span><span
                                            class="badge bg-light text-dark ms-2 ms-auto">3</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="app-project.html#" data-bs-toggle="tab"
                                        data-bs-target="#project_coming" role="tab"><i
                                            class="fa fa-clock-o"></i><span>Up Coming</span><span
                                            class="badge bg-light text-dark ms-2 ms-auto">2</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="app-project.html#" data-bs-toggle="tab"
                                        data-bs-target="#project_overdue" role="tab"><i
                                            class="fa fa-calendar"></i><span>Overdue</span></a></li>
                                <li class="nav-item">
                                    <class class="nav-link" href="app-project.html#" data-bs-toggle="tab"
                                        data-bs-target="#project_done" role="tab"><i
                                            class="fa fa-check-circle"></i><span>Completed</span><span
                                            class="badge bg-light text-dark ms-2 ms-auto">6</span></class></a>
                                </li>
                                <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Total Project
                                        Cost</small></li>
                                <li>
                                    <h2 class="fw-normal">&#x20A6; 783,890</h2>
                                    <div class="my-3">
                                        <div class="mb-0 fw-bold">75,250 <span
                                                class="fa fa-level-up text-success"></span></div>
                                        <small class="text-muted">Lives Impacted</small>
                                    </div>
                                    <div>
                                        <div class="mb-0 fw-bold">&#x20A6; 1,450 <span
                                                class="fa fa-level-down text-danger"></span></div>
                                        <small class="text-muted">Project Expense</small>
                                    </div>
                                </li>
                                <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Our
                                        Volunteers</small></li>
                                <li class="d-flex flex-wrap">
                                    <a href="app-project.html#" data-bs-toggle="tooltip" data-placement="top"
                                        title="Clients name"><img class="avatar rounded-circle m-1 lift"
                                            src="assets/img/xs/avatar1.jpg.png" alt=""></a>
                                    <a href="app-project.html#" data-bs-toggle="tooltip" data-placement="top"
                                        title="Clients name"><img class="avatar rounded-circle m-1 lift"
                                            src="assets/img/xs/avatar2.jpg.png" alt=""></a>
                                    <a href="app-project.html#" data-bs-toggle="tooltip" data-placement="top"
                                        title="Clients name"><img class="avatar rounded-circle m-1 lift"
                                            src="assets/img/xs/avatar3.jpg.png" alt=""></a>
                                    <a href="app-project.html#" data-bs-toggle="tooltip" data-placement="top"
                                        title="Clients name"><img class="avatar rounded-circle m-1 lift"
                                            src="assets/img/xs/avatar4.jpg.png" alt=""></a>
                                    <a href="app-project.html#" data-bs-toggle="tooltip" data-placement="top"
                                        title="Clients name"><img class="avatar rounded-circle m-1 lift"
                                            src="assets/img/xs/avatar5.jpg.png" alt=""></a>
                                    <a href="app-project.html#" data-bs-toggle="tooltip" data-placement="top"
                                        title="Clients name"><img class="avatar rounded-circle m-1 lift"
                                            src="assets/img/xs/avatar4.jpg.png" alt=""></a>
                                    <a href="app-project.html#" data-bs-toggle="tooltip" data-placement="top"
                                        title="Clients name"><img class="avatar rounded-circle m-1 lift"
                                            src="assets/img/xs/avatar5.jpg.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="project_all" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0">All Project</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <div class="row g-3">
                                        @foreach ($projects as $project)
                                            <div class="col-xxl-6 col-lg-6 col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-1"><a href="project-detail.html"
                                                                class="color-600">{{ $project->project_name }}</a>
                                                        </h5>
                                                        <p class="text-muted">{{ $project->project_details }}

                                                            <a href="project-detail.html"><span
                                                                    class="text-secondary">
                                                                    View More</span></a>

                                                        </p>

                                                        <ul class="list-inline d-flex my-4">
                                                            <li
                                                                class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                                <h6 class="mb-0">7</h6>
                                                                <small
                                                                    class="text-uppercase text-muted">Beneficiaries</small>
                                                            </li>
                                                            <li
                                                                class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                                <h6 class="mb-0">{{ $project->region->name }},
                                                                    {{ $project->state->name }}</h6>
                                                                <small
                                                                    class="text-uppercase text-muted">Region/State</small>
                                                            </li>
                                                        </ul>
                                                        <div class="project-members mb-4 d-flex">
                                                            <label class="me-2">Team :</label>
                                                            @foreach ($project->invited_members as $member)
                                                                <a href="app-project.html#" title=""><img
                                                                        class="avatar sm rounded-circle"
                                                                        src="{{ $member->profile_photo_path ? $member->profile_photo_path : 'img/xs/avatar4.jpg.png' }}"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Team Lead"
                                                                        alt="friend"> </a>
                                                            @endforeach
                                                        </div>
                                                        <label class="small d-flex justify-content-between">95% <span
                                                                class="text-custom">Done</span></label>
                                                        <div class="progress mt-1" style="height: 3px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                aria-valuenow="95" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 95%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer py-3">
                                                        <span>Date
                                                            <strong>{{ dateToWord($project->start_date) }}</strong></span>
                                                        <span class="px-3">|</span>
                                                        <span>Budget: <strong>&#x20A6;
                                                                {{ number_format($project->project_cost) }}</strong></span>
                                                        <span class="px-3">|</span>
                                                        <span>Share <i class="fa fa-share-alt"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="project_progress" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0">In Progress</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Prisoner Family Reintegration Support</a>
                                                    </h5>
                                                    <p class="text-muted">Facilitating family therapy and support
                                                        programs to help prisoners reconnect with their families
                                                        post-release. <a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">10</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Lagos, Abuja</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar4.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar2.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Designer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar9.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">75% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Date <strong>21 May, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 22,050</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Widows Housing Assistance Program</a>
                                                    </h5>
                                                    <p class="text-muted">Providing safe, affordable housing solutions
                                                        to widows in need of stable living conditions. <a
                                                            href="project-detail.html"><span class="text-secondary">
                                                                View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">15</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Imo, Ebonyi, Enugu</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar7.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar2.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Designer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar4.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar10.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">75% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Date <strong>21 Jan, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 3,150</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Prison Entrepreneurship Initiative</a>
                                                    </h5>
                                                    <p class="text-muted">Empowering inmates through entrepreneurship
                                                        training, encouraging self-employment opportunities after
                                                        serving time. <a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">11</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Akwa Ibom, Ebonyi</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar1.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar7.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar2.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">75% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Date <strong>21 March, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 8,050</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="project_coming" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0">Up Coming</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Widows Microfinance Access Project</a>
                                                    </h5>
                                                    <p class="text-muted">Connecting widows to microfinance services,
                                                        enabling them to start small businesses and gain financial
                                                        independence. <a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">0</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Kano, Benue, Nasarawa</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar7.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar8.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">0% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Start date: <strong>18 Jan, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 13,180</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Widows Empowerment Initiative</a></h5>
                                                    <p class="text-muted">Empowering widows with vocational skills,
                                                        financial literacy, and support to foster self-reliance and
                                                        stability. <a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">0</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Abia, Jigawa, Delta</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar8.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar3.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Designer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar1.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">0% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>start date: <strong>24 Feb, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 28,000</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="project_overdue" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0">Overdue Project</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <!-- widgets: No data -->
                                    <div class="card">
                                        <div class="card-body text-center p-5">
                                            <img src="assets/img/no-data.svg" class="w120" alt="No Data">
                                            <div class="mt-4 mb-3">
                                                <span class="text-muted">No data to show</span>
                                            </div>
                                            <button type="button" class="btn btn-white border lift">Get
                                                Started</button>
                                            <button type="button" class="btn btn-primary border lift">Back to
                                                Home</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="project_done" role="tabpanel">
                                    <div class="d-flex justify-content-between p-3 bg-card rounded-4 mb-3">
                                        <h6 class="card-title mb-0">Completed</h6>
                                        <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle"
                                            type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                    <!-- widgets: No data -->
                                    <div class="card">
                                        <div class="card-body text-center p-5">
                                            <img src="assets/img/no-data.svg" class="w120" alt="No Data">
                                            <div class="mt-4 mb-3">
                                                <span class="text-muted">No data to show</span>
                                            </div>
                                            <button type="button" class="btn btn-white border lift">Get
                                                Started</button>
                                            <button type="button" class="btn btn-primary border lift">Back to
                                                Home</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Plugin Js -->
                    <!-- Jquery Page Js -->
                    <script>
                        $('.project-list .project-list-toggle').on('click', function() {
                            $('.project-list .order-1').toggleClass('open');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
