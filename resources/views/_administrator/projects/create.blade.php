<div>
    <x-breadcrumb :title="$title" :sub_title="$sub_title">

        @if ($details)
            <x-slot name="ol_breadcrumbs">
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="app-project.html">Project</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </x-slot>
        @endif

        <x-slot name="page_action">
            <div class="page-action">
                <!-- btn:: create new project -->
                <button class="btn d-none d-sm-inline-flex rounded-pill" wire:click="create" type="button">
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

    <!-- Modal: Create project -->
    <div class="modal fade" id="create_project" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Setup new project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll">
                    <ul class="nav nav-tabs tab-card px-0" role="tablist">
                        <li class="nav-item flex-fill text-center"><a
                                class="nav-link @if ($currentStep == 1) active @endif" href="#"
                                data-bs-toggle="tab" data-bs-step="1" wire:click="setCurrentStep(1)">1.
                                Project</a></li>
                        <li class="nav-item flex-fill text-center"><a
                                class="nav-link @if ($currentStep == 2) active @endif" href="#"
                                data-bs-toggle="tab" data-bs-step="2" wire:click="setCurrentStep(2)">2.
                                Details</a></li>
                        <li class="nav-item flex-fill text-center"><a
                                class="nav-link @if ($currentStep == 3) active @endif" href="#"
                                data-bs-toggle="tab" data-bs-step="3" wire:click="setCurrentStep(3)">3. Team</a>
                        </li>
                        <li class="nav-item flex-fill text-center"><a
                                class="nav-link @if ($currentStep == 4) active @endif" href="#"
                                data-bs-toggle="tab" data-bs-step="4" wire:click="setCurrentStep(4)">4. File</a>
                        </li>
                        <li class="nav-item flex-fill text-center"><a
                                class="nav-link @if ($currentStep == 5) active @endif" href="#"
                                data-bs-toggle="tab" data-bs-step="5" wire:click="setCurrentStep(5)">5.
                                Completed</a></li>
                    </ul>
                    <!-- start: project status progress bar -->
                    <div class="progress bg-transparent" style="height: 3px; margin-top: -2px;">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1"
                            aria-valuemax="5" style="width: 20%;"></div>
                    </div>
                    <div class="tab-content mt-3">

                        @if ($currentStep == 1)
                            <!-- start: project type -->
                            <div class="tab-pane fade show active" id="step1">
                                <div class="card bg-body mb-2">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1">Project Type</h6>
                                        <p class="text-muted small">If you need more info, please check out <a
                                                href="app-project-detail.html#">FAQ Page</a></p>
                                        <!-- Custome redio input -->
                                        <div class="c_radio d-flex flex-md-wrap">
                                            <label class="m-1 w-100" for="Personal">
                                                <input type="radio" name="plan" id="Personal" value="Personal"
                                                    wire:model="selectedPlan" />
                                                <span class="card">
                                                    <span class="card-body d-flex p-3">
                                                        <svg class="avatar" viewBox="0 0 16 16">
                                                            <path class="fill-muted"
                                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                        </svg>
                                                        <span class="ms-3">
                                                            <span class="h6 d-flex mb-1">Personal Project</span>
                                                            <span class="text-muted">For smaller businesses with simple
                                                                salaries and pay schedules.</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <label class="m-1 w-100" for="Team">
                                                <input type="radio" name="plan" id="Team" value="Team"
                                                    wire:model="selectedPlan" />
                                                <span class="card">
                                                    <span class="card-body d-flex p-3">
                                                        <svg class="avatar" viewBox="0 0 16 16">
                                                            <path class="fill-muted"
                                                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                            <path class="fill-muted" fill-rule="evenodd"
                                                                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                            <path class="fill-muted"
                                                                d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                        </svg>
                                                        <span class="ms-3">
                                                            <span class="h6 d-flex mb-1">Team Project</span>
                                                            <span class="text-muted">For growing businesses who want to
                                                                create a rewarding place to work.</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif

                        @if ($currentStep == 2)
                            <!-- start: project detail -->
                            <div class="tab-pane fade show active" id="step2">
                                <div class="card bg-body mb-2">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1">Project Details</h6>
                                        <p class="text-muted small">Provide comprehensive information about this
                                            project</p>
                                        <div style="display: flex;">
                                            <div class="form-floating mb-2 floating-col-6 m-r-10">
                                                <select
                                                    class="form-select @error('selectedRegion') is-invalid @enderror"
                                                    wire:model="selectedRegion">
                                                    <option selected value="">Open this select menu</option>
                                                    @foreach ($regions as $region)
                                                        <option value="{{ $region->id }}">{{ $region->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label>Choose a Region *</label>

                                                @error('selectedRegion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-floating mb-2 floating-col-6">
                                                <select
                                                    class="form-select @error('selectedCountry') is-invalid @enderror"
                                                    wire:model="selectedCountry">
                                                    <option selected value="">Open this select menu</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label>Country</label>

                                                @error('selectedCountry')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <select class="form-select @error('selectedState') is-invalid @enderror"
                                                wire:model="selectedState">
                                                <option selected value="">Open this select menu</option>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state->id }}">{{ $state->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <label>Add State(s) *</label>

                                            @error('selectedState')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text"
                                                class="form-control @error('projectName') is-invalid @enderror"
                                                placeholder="Project name" wire:model="projectName">
                                            <label>Project name *</label>

                                            @error('projectName')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <textarea class="form-control @error('projectDetail') is-invalid @enderror" placeholder="Add project details"
                                                style="height: 100px" wire:model="projectDetail"></textarea>
                                            <label>Add project details</label>

                                            @error('projectDetail')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div style="display: flex;">
                                            <div class="form-floating mb-4 floating-col-6 m-r-10">
                                                <input type="date"
                                                    class="form-control @error('start_date') is-invalid @enderror"
                                                    wire:model="start_date">
                                                <label>Enter Start Date *</label>

                                                @error('start_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-4 floating-col-6">
                                                <input type="date"
                                                    class="form-control @error('end_date') is-invalid @enderror"
                                                    wire:model="end_date">
                                                <label>Enter End Date *</label>

                                                @error('end_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div style="display: flex;">
                                            <div class="form-floating mb-2 floating-col-4 m-r-10">
                                                <input type="number"
                                                    class="form-control @error('projectCost') is-invalid @enderror"
                                                    wire:model="projectCost">
                                                <label>Project Cost *</label>

                                                @error('projectCost')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-2 floating-col-4 m-r-10">
                                                <input type="number"
                                                    class="form-control @error('projectTarget') is-invalid @enderror"
                                                    wire:model="projectTarget">
                                                <label>Project Target *</label>

                                                @error('projectTarget')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-2 floating-col-4 m-l-10">
                                                <select
                                                    class="form-select @error('projectStatus') is-invalid @enderror"
                                                    wire:model="projectStatus">
                                                    <option selected value="1">Open this select menu</option>
                                                    @foreach ($statuses as $status)
                                                        <option value="{{ $status->id }}">{{ $status->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label>Project Status</label>

                                                @error('projectStatus')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between" style="margin-top: 20px">
                                            <div class="text-muted">Allow Notifications *</div>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="allow_phone"
                                                        wire:model="allowPhone">
                                                    <label class="form-check-label" for="allow_phone">Phone</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="allow_email"
                                                        wire:model="allowEmail">
                                                    <label class="form-check-label" for="allow_email">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($currentStep == 3)
                            <!-- start: select team -->
                            <div class="card bg-body mb-2">
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Add Users to Project</h6>
                                    <p class="text-muted small">If you need more info, please check out <a
                                            href="app-project.html#">Project Guidelines</a></p>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control"
                                            placeholder="Invite by username or email" wire:model.live="inviteTeam">
                                        <label>Search user by username or email</label>

                                        @if (!empty($searchResults))
                                            <ul class="list-group mt-2">
                                                @foreach ($searchResults as $user)
                                                    <li class="list-group-item d-flex align-items-center"
                                                        wire:click="addTeamMember({{ $user['id'] }})"
                                                        style="cursor: pointer;">
                                                        <img class="avatar rounded"
                                                            src="{{ asset($user['avatar']) }}" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <div class="h6 mb-0">{{ $user['name'] }}</div>
                                                            <small class="text-muted">{{ $user['email'] }}</small>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <h6 class="card-title mb-1">Project Members</h6>
                                    <div class="form-check form-switch">
                                        <!-- <input class="form-check-input" type="checkbox" id="list-group6" checked=""> -->
                                        <label class="form-check-label text-muted" for="list-group6">Users already in
                                            project</label>
                                    </div>
                                    <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0 mt-4"
                                        style="height: 300px;">

                                        @foreach ($teamMembers as $member)
                                            <li class="list-group-item d-flex align-items-center">
                                                <img class="avatar rounded" src="{{ asset($member['avatar']) }}"
                                                    alt="">
                                                <div class="flex-fill ms-2">
                                                    <div class="h6 mb-0">{{ $member['name'] }}</div>
                                                    <small class="text-muted">{{ $member['email'] }}</small>
                                                </div>
                                                <select class="form-select form-select-sm w120"
                                                    wire:change="handleTeamAction($event.target.value, {{ $member['id'] }})">
                                                    <option value="">Action</option>
                                                    <option value="remove">Remove</option>
                                                    <option value="lead">Make Project Lead</option>
                                                </select>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif


                        @if ($currentStep == 4)
                            <!-- start: Upload Files -->
                            <div class="tab-pane fade show active" id="step4">
                                <div class="card bg-body mb-2">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1">Upload Files</h6>
                                        <div class="mb-4">
                                            <label class="form-label small">Upload up to 10 files</label>
                                            <input class="form-control" type="file" wire:model="files" multiple>
                                        </div>

                                        <span>Already Uploaded Files</span>
                                        <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0 mt-4"
                                            style="height: 300px;">
                                            @foreach ($uploadedFiles as $file)
                                                <li class="list-group-item py-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded no-thumbnail">
                                                            <i class="fa fa-file text-danger"></i>
                                                        </div>
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <p class="mb-0 color-800">{{ $file['name'] }}</p>
                                                            <small class="text-muted">{{ $file['size'] }} MB</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endif



                        @if ($currentStep == 5)
                            <!-- start: project setup done -->
                            <div class="tab-pane fade @if ($currentStep == 5) show active @endif"
                                id="step5">
                                <div class="card bg-body text-center">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1">Project Created!</h4>
                                        <span class="text-muted">If you need more info, please check how to create
                                            project</span>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-lg btn-primary first text-uppercase"
                                            wire:click="create">Create new
                                            project</button>
                                        <button class="btn btn-lg bg-secondary text-light text-uppercase"
                                            wire:click="viewProject">View
                                            project</button>
                                    </div>
                                    <div class="card-body">
                                        <img class="img-fluid" src="{{ asset('img/project-team.svg') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($currentStep < 5)
                            <div class="text-end">
                                <button type="button" class="btn btn-secondary" wire:click.prevent="decreaseStep()">
                                    CLOSE
                                </button>

                                @if ($currentStep == 1)
                                    <button class="btn bg-secondary text-light next text-uppercase"
                                        wire:click.prevent="increaseStep()">
                                        ADD PROJECT DETAILS
                                    </button>
                                @endif

                                @if ($currentStep == 2)
                                    <button class="btn bg-secondary text-light next text-uppercase"
                                        wire:click.prevent="increaseStep()">
                                        SELECT PROJECT TEAM
                                    </button>
                                @endif

                                @if ($currentStep == 3)
                                    <button class="btn bg-secondary text-light next text-uppercase"
                                        wire:click.prevent="increaseStep()">
                                        UPLOAD FILES
                                    </button>
                                @endif

                                @if ($currentStep == 4)
                                    <button class="btn bg-secondary text-light next text-uppercase"
                                        wire:click.prevent="save()">
                                        FINISH
                                    </button>
                                @endif

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('modalClosed', event => {
            $('#create_project').modal('hide');
        })

        window.addEventListener('modalOpened', event => {
            $('#create_project').modal('show');
        })
    </script>
@endpush
