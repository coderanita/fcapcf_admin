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
                                                            {{-- <span class="text-muted">For growing businesses who want to
                                                                create a rewarding place to work.</span> --}}
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
                                                    wire:model.live="selectedRegion">
                                                    <option selected value=""></option>
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
                                                    wire:model.live="selectedCountry">
                                                    <option selected value=""></option>
                                                    @forelse($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}
                                                        </option>
                                                    @empty
                                                        <option disabled>No countries available</option>
                                                    @endforelse
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
                                                <option selected value=""></option>
                                                @forelse ($states as $state)
                                                    <option value="{{ $state->id }}">{{ $state->name }}
                                                    </option>
                                                @empty
                                                    <option disabled>No states available</option>
                                                @endforelse
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
                                                    <option selected value="1"></option>
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
                                @if ($currentStep != 1)
                                    <button type="button" class="btn btn-secondary"
                                        wire:click.prevent="decreaseStep()">
                                        {{-- CLOSE --}}
                                        PREV
                                    </button>
                                @endif

                                @if ($currentStep == 1)
                                    <button class="btn bg-secondary text-light next text-uppercase"
                                        wire:click.prevent="increaseStep()">
                                        {{-- ADD PROJECT DETAILS --}}
                                        NEXT
                                    </button>
                                @endif

                                @if ($currentStep == 2)
                                    <button class="btn bg-secondary text-light next text-uppercase"
                                        wire:click.prevent="increaseStep()">
                                        {{-- SELECT PROJECT TEAM --}}
                                        NEXT
                                    </button>
                                @endif

                                @if ($currentStep == 3)
                                    <button class="btn bg-secondary text-light next text-uppercase"
                                        wire:click.prevent="increaseStep()">
                                        {{-- UPLOAD FILES --}}
                                        NEXT
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
