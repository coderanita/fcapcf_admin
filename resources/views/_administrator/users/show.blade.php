<div>
    <x-breadcrumb title="My Profile" sub_title="Profile" />

    <!-- Start:: main page body area -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="d-flex align-items-md-start align-items-center flex-column flex-md-row">

                                @php
                                    $fullUrl = $user->profile_photo_url; // Full URL
                                    $relativePath = str_replace(url('/storage') . '/', '', $fullUrl);

                                @endphp

                                <img style="max-width:160px"
                                    src="{{ 'https://console.fcapcf.org/storage/app/public/' . $relativePath }}"
                                    alt="" class="rounded-4">

                                <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center">
                                    <h4 class="mb-1 fw-light">{{ ucwords($user->fullName()) }}<a
                                            href="{{ route('administrator.users.profile', $user->id) }}"
                                            class="fa fa-pencil-square-o fs-6 ms-2" title="Edit Profile"></a></h4>
                                    <p>{{ $user->email }}</p>
                                    <span class="text-muted">{{ $profile->personal_home_address }}</span>
                                    <div
                                        class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                        <div class="card py-2 px-3 me-2 mt-2">
                                            <small class="text-muted">User Type</small>
                                            <div class="fs-5">{{ strtoupper($user->role->name) }}</div>
                                        </div>

                                        <div class="card py-2 px-3 me-2 mt-2">
                                            <small class="text-muted">Programs</small>
                                            <div class="fs-5">3</div>
                                        </div>
                                        <div class="card py-2 px-3 me-2 mt-2">
                                            <small class="text-muted">Beneficiaries Registered</small>
                                            <div class="fs-5">0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-card border-bottom-0 pt-2 fs-6 justify-content-center justify-content-md-start"
                            role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#profile_post"
                                    role="tab"><span>Overview</span></a></li>

                        </ul>
                    </div>
                    <div class="tab-content mt-5">
                        <!-- Tab: Overview -->
                        <div class="tab-pane fade show active" id="profile_post" role="tabpanel">
                            <div class="row-title mb-2">
                                <h5>Profile & Program Overview</h5>
                            </div>
                            <div class="row g-3">
                                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h6 class="card-title mb-3">Personal Information</h6>

                                            <ul class="list-unstyled mb-0">
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Full
                                                        Name:</span>{{ $user->fullName() }}</li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">E-mail:</span>{{ $user->email }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Phone:</span>{{ $phone_number ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Location:</span>{{ $work_location ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Gender:</span>{{ $gender ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Date of
                                                        Birth:</span>{{ date('d F, Y', strtotime($date_of_birth)) ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Marital
                                                        Status:</span>{{ ucfirst($marital_status ?? 'N/A') }}
                                                </li>
                                                <li class="py-2"><span class="text-muted me-2 w180 d-inline-block">ID
                                                        Type:</span>{{ $id_type ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span class="text-muted me-2 w180 d-inline-block">ID
                                                        Number:</span>{{ $id_number ?? 'N/A' }}</li>
                                                <li class="py-2"><span class="text-muted me-2 w180 d-inline-block">ID
                                                        Expiry
                                                        Date:</span>
                                                    {{ date('d F, Y', strtotime($expiry_date)) ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Emergency
                                                        Contact:</span>{{ $full_name ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Telephone:</span>{{ $countryCodeEmergency . $telephone ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Relationship:</span>{{ $relationship_id ?? 'N/A' }}
                                                </li>




                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Last Job
                                                        Role:</span>{{ ucfirst($job_title) }}</li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Department:</span>{{ ucfirst($department) }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Employment
                                                        Status:</span>{{ ucfirst($emp_status) }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Start
                                                        Date:</span>{{ date('d F, Y', strtotime($start_date)) ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Reporting
                                                        Officer:</span>{{ ucfirst($reporting_manager) }}
                                                </li>




                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Qualification:</span>{{ ucfirst($highest_qualification) }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Institution:</span>{{ ucfirst($institution) }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Languages:</span>{{ ucfirst($lan_spoken) }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Certifications:</span>{{ ucfirst($certification) }}
                                                </li>




                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Bank
                                                        Name:</span>{{ ucfirst($bank_name ?? 'N/A') }}</li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Bank
                                                        Number:</span>{{ $acc_no ?? 'N/A' }}</li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Sort
                                                        Code:</span>{{ $bank_code ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Previous
                                                        Salary:</span>{{ $prev_salary ?? 'N/A' }}</li>



                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Pension?:</span>{{ $pension_scheme ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Pension
                                                        ID?:</span>{{ $pension_id ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Pension
                                                        Admin:</span>{{ ucfirst($pension_adm ?? 'N/A') }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Insurance:</span>{{ $health_insurance ?? 'N/A' }}
                                                </li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Insurance
                                                        Id:</span>{{ $insurance_id ?? 'N/A' }}</li>
                                                <li class="py-2"><span
                                                        class="text-muted me-2 w180 d-inline-block">Insurance
                                                        Admin:</span>{{ ucfirst($insurance_name ?? 'N/A') }}
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">

                                    <div class="row g-3 row-deck">
                                        @foreach ($projects as $project)
                                            <div class="col-xxl-5 col-lg-6 col-md-12">
                                                <!-- widgest: Project card -->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-1"><a href="app-project-detail.html"
                                                                class="color-600">{{ $project->project_name }}</a>
                                                        </h5>
                                                        <p class="text-muted">{{ $project->project_details }}</p>
                                                        <ul class="list-inline d-flex my-4">
                                                            <li
                                                                class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                                <h6 class="mb-0">0</h6>
                                                                <small
                                                                    class="text-uppercase text-muted">Beneficiaries</small>
                                                            </li>
                                                            <li
                                                                class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                                <h6 class="mb-0">{{ $project->region->name ?? '' }},
                                                                    {{ $project->state->name ?? '' }}</h6>
                                                                <small
                                                                    class="text-uppercase text-muted">Region/State</small>
                                                            </li>
                                                        </ul>
                                                        <div class="project-members mb-4">
                                                            <label class="me-2">Team:</label>
                                                            @foreach ($project->invited_teams as $member)
                                                                <a href="#" title="">
                                                                    <img class="avatar sm rounded-circle"
                                                                        src="{{ $member['profile_photo_path'] ?? asset('img/xs/avatar4.jpg.png') }}"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Team Lead"
                                                                        alt="friend">
                                                                </a>
                                                            @endforeach

                                                        </div>
                                                        <label class="small d-flex justify-content-between">80% <span
                                                                class="text-custom">Done</span></label>
                                                        <div class="progress mt-1" style="height: 3px;">
                                                            <div class="progress-bar bg-secondary" role="progressbar"
                                                                aria-valuenow="95" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer py-3">
                                                        <span>Date
                                                            <strong>{{ dateToWord($project->start_date) }}</strong></span>
                                                        <span class="px-3">|</span>
                                                        <span>Budget: <strong>&#x20A6;
                                                                {{ number_format($project->project_cost) }}</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div> <!-- Row end  -->
                            </div>
                            <!-- Plugin Js -->
                            <script src="assets/js/bundle/apexcharts.bundle.js"></script>
                            <!-- Jquery Page Js -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
