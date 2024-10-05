<div>
    <x-breadcrumb title="" sub_title="FCAPCF Projects">
        <x-slot name="page_action">
            <div class="page-action">
                <!-- btn:: create new project -->
                <button class="btn d-none d-sm-inline-flex rounded-pill" data-bs-toggle="modal"
                    data-bs-target="#create_project" type="button">
                    <span class="me-1 d-none d-lg-inline-block">Create</span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 0C7.23206 0 7.45462 0.0921874 7.61872 0.256282C7.78281 0.420376 7.875 0.642936 7.875 0.875V6.125H13.125C13.3571 6.125 13.5796 6.21719 13.7437 6.38128C13.9078 6.54538 14 6.76794 14 7C14 7.23206 13.9078 7.45462 13.7437 7.61872C13.5796 7.78281 13.3571 7.875 13.125 7.875H7.875V13.125C7.875 13.3571 7.78281 13.5796 7.61872 13.7437C7.45462 13.9078 7.23206 14 7 14C6.76794 14 6.54538 13.9078 6.38128 13.7437C6.21719 13.5796 6.125 13.3571 6.125 13.125V7.875H0.875C0.642936 7.875 0.420376 7.78281 0.256282 7.61872C0.0921874 7.45462 0 7.23206 0 7C0 6.76794 0.0921874 6.54538 0.256282 6.38128C0.420376 6.21719 0.642936 6.125 0.875 6.125H6.125V0.875C6.125 0.642936 6.21719 0.420376 6.38128 0.256282C6.54538 0.0921874 6.76794 0 7 0V0Z"
                            fill="white" />
                    </svg>
                </button>
                <!-- btn:: Filter -->
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle after-none rounded-pill"
                        data-bs-toggle="dropdown">
                        <span class="me-1 d-none d-lg-inline-block">Filter</span>
                        <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 1.00018C0 0.867575 0.0526784 0.740398 0.146447 0.64663C0.240215 0.552862 0.367392 0.500183 0.5 0.500183H12.5C12.6326 0.500183 12.7598 0.552862 12.8536 0.64663C12.9473 0.740398 13 0.867575 13 1.00018V3.00018C13 3.12349 12.9544 3.24244 12.872 3.33418L8.5 8.19218V13.0002C8.49992 13.1051 8.46685 13.2073 8.40547 13.2924C8.3441 13.3774 8.25752 13.441 8.158 13.4742L5.158 14.4742C5.08287 14.4992 5.00288 14.506 4.9246 14.4941C4.84632 14.4821 4.772 14.4518 4.70775 14.4055C4.6435 14.3592 4.59116 14.2983 4.55504 14.2279C4.51893 14.1574 4.50006 14.0794 4.5 14.0002V8.19218L0.128 3.33418C0.0456082 3.24244 2.21504e-05 3.12349 0 3.00018V1.00018ZM1 1.50018V2.80818L5.372 7.66618C5.45439 7.75792 5.49998 7.87688 5.5 8.00018V13.3062L7.5 12.6402V8.00018C7.50002 7.87688 7.54561 7.75792 7.628 7.66618L12 2.80818V1.50018H1Z"
                                fill="white" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu border-0 shadow">
                        <li><a class="dropdown-item" href="app-project-detail.html#">Today</a></li>
                        <li><a class="dropdown-item" href="app-project-detail.html#">Yesterday</a></li>
                        <li><a class="dropdown-item" href="app-project-detail.html#">Last 7 Days</a></li>
                        <li><a class="dropdown-item" href="app-project-detail.html#">Last 30 Days</a></li>
                        <li><a class="dropdown-item" href="app-project-detail.html#">This Month</a></li>
                        <li><a class="dropdown-item" href="app-project-detail.html#">Last Month</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="app-project-detail.html#">Custom Range</a></li>
                    </ul>
                </div>
                <!-- btn:: download -->
                <button class="btn d-none d-sm-inline-flex bg-secondary rounded-pill" type="button">
                    <span class="me-1 d-none d-lg-inline-block">Download</span>
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.64602 9.354C7.69247 9.40056 7.74764 9.43751 7.80839 9.46271C7.86913 9.48792 7.93425 9.50089 8.00002 9.50089C8.06579 9.50089 8.13091 9.48792 8.19165 9.46271C8.2524 9.43751 8.30758 9.40056 8.35402 9.354L10.354 7.354C10.4005 7.30751 10.4374 7.25232 10.4625 7.19158C10.4877 7.13084 10.5007 7.06574 10.5007 7C10.5007 6.93426 10.4877 6.86916 10.4625 6.80842C10.4374 6.74768 10.4005 6.69249 10.354 6.646C10.3075 6.59951 10.2523 6.56264 10.1916 6.53748C10.1309 6.51232 10.0658 6.49937 10 6.49937C9.93428 6.49937 9.86918 6.51232 9.80844 6.53748C9.7477 6.56264 9.69251 6.59951 9.64602 6.646L8.50002 7.793V4C8.50002 3.86739 8.44734 3.74021 8.35358 3.64645C8.25981 3.55268 8.13263 3.5 8.00002 3.5C7.86741 3.5 7.74024 3.55268 7.64647 3.64645C7.5527 3.74021 7.50002 3.86739 7.50002 4V7.793L6.35402 6.646C6.26013 6.55211 6.1328 6.49937 6.00002 6.49937C5.86725 6.49937 5.73991 6.55211 5.64602 6.646C5.55213 6.73989 5.49939 6.86722 5.49939 7C5.49939 7.13278 5.55213 7.26011 5.64602 7.354L7.64602 9.354Z"
                            fill="white" />
                        <path
                            d="M4.406 1.842C5.40548 0.980135 6.68024 0.504139 8 0.5C10.69 0.5 12.923 2.5 13.166 5.079C14.758 5.304 16 6.637 16 8.273C16 10.069 14.502 11.5 12.687 11.5H3.781C1.708 11.5 0 9.866 0 7.818C0 6.055 1.266 4.595 2.942 4.225C3.085 3.362 3.64 2.502 4.406 1.842ZM5.059 2.599C4.302 3.252 3.906 4.039 3.906 4.655V5.103L3.461 5.152C2.064 5.305 1 6.452 1 7.818C1 9.285 2.23 10.5 3.781 10.5H12.687C13.98 10.5 15 9.488 15 8.273C15 7.057 13.98 6.045 12.687 6.045H12.187V5.545C12.188 3.325 10.328 1.5 8 1.5C6.91988 1.50431 5.87684 1.89443 5.059 2.6V2.599Z"
                            fill="white" />
                    </svg>
                </button>
            </div>
        </x-slot>
    </x-breadcrumb>

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
                                <li>
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
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Prisoners' Rehabilitation Program</a>
                                                    </h5>
                                                    <p class="text-muted">Providing inmates with education and
                                                        counseling to facilitate successful reintegration into society
                                                        post-incarceration.

                                                        <a href="project-detail.html"><span class="text-secondary">
                                                                View More</span></a>

                                                    </p>

                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">7</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Plateau, Sokoto, Adamawa</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar3.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar1.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Designer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar7.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar9.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">95% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 95%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Date <strong>21 Aug, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 12,050</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Widows' Health Awareness Campaign</a>
                                                    </h5>
                                                    <p class="text-muted">Raising awareness about health issues
                                                        affecting widows, offering medical checkups, and promoting
                                                        mental wellness. <a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">10</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Enugu, Kogi, Edo, Rivers</h6>
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
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 75%;"></div>
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
                                                            class="color-600">Skill Training for Inmates</a></h5>
                                                    <p class="text-muted">Offering hands-on vocational training to
                                                        prisoners, preparing them for meaningful employment after
                                                        release. <a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">13</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Benue, Abuja</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar3.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar1.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Designer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar9.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">61% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 61%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Date <strong>21 Jun, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 1,12,500</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Widows Support Fund Initiative</a></h5>
                                                    <p class="text-muted">Establishing a fund to provide financial aid
                                                        and resources to widows in need of urgent assistance. <a
                                                            href="project-detail.html"><span class="text-secondary">
                                                                View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">12</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Lagos, Akure</h6>
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
                                                    <label class="small d-flex justify-content-between">25% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 25%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Date <strong>21 Feb, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 2,050</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Inmate Literacy and Education Drive</a>
                                                    </h5>
                                                    <p class="text-muted">Improving literacy among prisoners through
                                                        educational programs aimed at enhancing their future
                                                        opportunities.<a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">7</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Ondo, Abuja, Delta</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar3.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar1.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Designer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar7.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
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
                                                    <span>Date <strong>21 Aug, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 12,050</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Widows Legal Aid Project</a></h5>
                                                    <p class="text-muted">Offering free legal services to widows,
                                                        addressing issues such as property rights and inheritance
                                                        disputes. <a href="project-detail.html"><span
                                                                class="text-secondary"> View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">15</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Katsina, Gombe</h6>
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
                                                    <label class="small d-flex justify-content-between">45% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 45%;"></div>
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
                                                            class="color-600">Prisoners Mental Health Support</a></h5>
                                                    <p class="text-muted">Providing mental health services to prisoners
                                                        to help them cope with incarceration and prepare for
                                                        reintegration.
                                                        <a href="project-detail.html"><span class="text-secondary">
                                                                View More</span></a>
                                                    </p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">7</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Niger, Nasarawa, Benue</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Region/State</small>
                                                        </li>
                                                    </ul>
                                                    <div class="project-members mb-4">
                                                        <label class="me-2">Team :</label>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar3.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Team Lead" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar1.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Designer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar7.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                        <a href="app-project.html#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="assets/img/xs/avatar9.jpg.png"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Developer" alt="friend"> </a>
                                                    </div>
                                                    <label class="small d-flex justify-content-between">8% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 8%;"></div>
                                                    </div>
                                                </div>
                                                <div class="card-footer py-3">
                                                    <span>Date <strong>21 Aug, 2022</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Budget: <strong>&#x20A6; 12,050</strong></span>
                                                    <span class="px-3">|</span>
                                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-1"><a href="project-detail.html"
                                                            class="color-600">Widows Agricultural Empowerment
                                                            Program</a></h5>
                                                    <p class="text-muted">Equipping widows with agricultural skills and
                                                        resources to enhance food security and economic independence. <a
                                                            href="project-detail.html"><span class="text-secondary">
                                                                View More</span></a></p>
                                                    <ul class="list-inline d-flex my-4">
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">11</h6>
                                                            <small
                                                                class="text-uppercase text-muted">Beneficiaries</small>
                                                        </li>
                                                        <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                            <h6 class="mb-0">Kano, Kaduna</h6>
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
                                                    <label class="small d-flex justify-content-between">83% <span
                                                            class="text-custom">Done</span></label>
                                                    <div class="progress mt-1" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 83%;"></div>
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
