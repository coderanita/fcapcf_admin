<div>
    <div class="page-header pattern-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item active" aria-current="page">
                            Staff Management
                        </li>
                    </ol>
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="h2 mb-md-0 text-white fw-light">New User</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-12">
                    <div class="card print_invoice">
                        <div class="card-header border-bottom fs-4">
                        </div>
                        <div class="card-body">
                            <div class="card p-3">
                                <!-- Start Tab -->
                                <div>
                                    <div>
                                        <div class="modal-content">
                                            <div class="modal-body custom_scroll">
                                                <ul class="nav nav-tabs tab-card px-0" role="tablist">
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 1) active @endif"
                                                            href="add-user.html#step1" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(1)" data-bs-step="1">1. Personal
                                                            Information</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 2) active @endif"
                                                            href="add-user.html#step2" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(2)" data-bs-step="2">2.
                                                            Employment
                                                        </a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 3) active @endif"
                                                            href="add-user.html#step3" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(3)" data-bs-step="3">3.
                                                            Education</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 4) active @endif"
                                                            href="add-user.html#step4" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(4)" data-bs-step="4">4.
                                                            Experience</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 5) active @endif"
                                                            href="add-user.html#step5" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(5)" data-bs-step="5">5. Banking &
                                                            Compensation</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 6) active @endif"
                                                            href="add-user.html#step6" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(6)" data-bs-step="6">6. IT &
                                                            Security</a>
                                                    </li>

                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 7) active @endif"
                                                            href="add-user.html#step7" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(7)" data-bs-step="7">7.
                                                            Review</a>
                                                    </li>

                                                </ul>
                                                <!-- start: project status progress bar -->
                                                <div class="progress bg-transparent"
                                                    style="height: 3px; margin-top: -2px">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        aria-valuenow="1" aria-valuemin="1" aria-valuemax="5"
                                                        style="width: 20%"></div>
                                                </div>
                                                <div class="tab-content mt-3">
                                                    <!-- start: project type -->
                                                    @if ($currentStep == 1)
                                                        <div class="tab-pane fade show active" id="step1">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Personal Information
                                                                    </h6>
                                                                    <p class="text-muted small">
                                                                        If you need more info, please check out
                                                                        <a href="add-user.html#">FAQ Page</a>
                                                                    </p>
                                                                    <!-- Custome redio input -->

                                                                    <div class="row g-2 mt-3">

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('selectedRole') is-invalid @enderror"
                                                                                wire:model="selectedRole">
                                                                                <option value="" selected>Open
                                                                                    this select
                                                                                    menu</option>
                                                                                @foreach ($roles as $role)
                                                                                    <option value="{{ $role->id }}">
                                                                                        {{ ucwords($role->name) }} -
                                                                                        {{ ucwords($role->access_level) }}
                                                                                        Access
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <label>Select Role *</label>
                                                                            @error('selectedRole')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('first_name') is-invalid @enderror"
                                                                                placeholder="Enter first name"
                                                                                wire:model="first_name" />
                                                                            <label>First Name *</label>
                                                                            @error('first_name')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        {{-- <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('middle_name') is-invalid @enderror"
                                                                                placeholder="Enter middle name"
                                                                                wire:model="middle_name" />
                                                                            <label>Middle Name </label>
                                                                            @error('first_name')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div> --}}

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('last_name') is-invalid @enderror"
                                                                                placeholder="Enter last name"
                                                                                wire:model="last_name" />
                                                                            <label>Last Name *</label>
                                                                            @error('last_name')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('gender') is-invalid @enderror"
                                                                                wire:model="gender">
                                                                                <option value="" selected>Open
                                                                                    this select
                                                                                    menu</option>
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female
                                                                                </option>
                                                                            </select>
                                                                            <label>Select Gender *</label>
                                                                            @error('gender')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>


                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <div class="input-group">
                                                                                <select id="countryCode"
                                                                                    class="form-select @error('phone_number') is-invalid @enderror"
                                                                                    style="height: 58px; width: 150px;"
                                                                                    wire:model="countryCode">
                                                                                    @foreach ($countries as $country)
                                                                                        <option
                                                                                            value="{{ $country->code }}">
                                                                                            {{ $country->name }}
                                                                                            ({{ $country->code }})
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <input type="number" id="phone"
                                                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                                                    placeholder="Add telephone number"
                                                                                    wire:model="phone_number"
                                                                                    style="height: 58px; padding: 10px; width: 200px;" />
                                                                            </div>
                                                                            @error('phone_number')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="email"
                                                                                class="form-control @error('email') is-invalid @enderror"
                                                                                placeholder="e.g. example@email.com"
                                                                                wire:model="email" />
                                                                            <label>Email Address *</label>
                                                                            @error('email')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="date"
                                                                                class="form-control @error('date_of_birth') is-invalid @enderror"
                                                                                wire:model="date_of_birth" />
                                                                            <label>Date of Birth *</label>
                                                                            @error('date_of_birth')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('marital_status') is-invalid @enderror"
                                                                                wire:model="marital_status">
                                                                                <option value="" selected>
                                                                                    Open this select
                                                                                    menu</option>
                                                                                <option value="Single">Single
                                                                                </option>
                                                                                <option value="Married">Married
                                                                                </option>
                                                                                <option value="Divorced">Divorced
                                                                                </option>
                                                                                <option value="Widow">Widow
                                                                                </option>
                                                                                <option value="Widower">Widower
                                                                                </option>
                                                                            </select>
                                                                            <label>Marital Status *</label>
                                                                            @error('marital_status')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('nationality_id') is-invalid @enderror"
                                                                                wire:model="nationality_id">
                                                                                <option value="" selected>
                                                                                    Open this select
                                                                                    menu</option>
                                                                                @foreach ($nationalities as $nationality)
                                                                                    <option
                                                                                        value="{{ $nationality->id }}">
                                                                                        {{ $nationality->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <label>Nationality *</label>
                                                                            @error('nationality_id')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('id_type') is-invalid @enderror"
                                                                                wire:model="id_type">
                                                                                <option selected>
                                                                                    Open this select menu
                                                                                </option>
                                                                                <option value="nin">
                                                                                    National Id
                                                                                </option>
                                                                                <option value="Voters card">
                                                                                    Voter's Card
                                                                                </option>
                                                                                <option value="intl-passport">
                                                                                    International Passport
                                                                                </option>
                                                                                <option value="drivers-license">
                                                                                    Driver's License
                                                                                </option>
                                                                                <option value="Social Security Number">
                                                                                    Social Security Number
                                                                                </option>
                                                                                <option
                                                                                    value="Tax Identification Number">
                                                                                    Tax Identification Number
                                                                                </option>
                                                                            </select>
                                                                            <label>Identification Type *</label>
                                                                            @error('id_type')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('id_number') is-invalid @enderror"
                                                                                placeholder="Enter ID Number"
                                                                                wire:model="id_number" />
                                                                            <label>ID Number *</label>
                                                                            @error('id_number')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="date"
                                                                                class="form-control @error('expiry_date') is-invalid @enderror"
                                                                                wire:model="expiry_date" />
                                                                            <label>Expiry Date *</label>
                                                                            @error('expiry_date')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <h4 class="my-md" style="margin: 15px 0">
                                                                            Emergency Contact</h4>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('full_name') is-invalid @enderror"
                                                                                placeholder="Enter full name"
                                                                                wire:model="full_name" />
                                                                            <label>Full Name *</label>
                                                                            @error('full_name')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <div class="input-group">
                                                                                <select id="countryCodeEmergency"
                                                                                    class="form-select @error('telephone') is-invalid @enderror"
                                                                                    style="height: 58px; width: 150px;"
                                                                                    wire:model="countryCodeEmergency">
                                                                                    @foreach ($countries as $country)
                                                                                        <option
                                                                                            value="{{ $country->code }}">
                                                                                            {{ $country->name }}
                                                                                            ({{ $country->code }})
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <input type="number" id="phone"
                                                                                    class="form-control @error('telephone') is-invalid @enderror"
                                                                                    placeholder="Add telephone number"
                                                                                    wire:model="telephone"
                                                                                    style="height: 58px; padding: 10px; width: 200px;" />
                                                                            </div>
                                                                            @error('telephone')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('relationship_id') is-invalid @enderror"
                                                                                wire:model="relationship_id">
                                                                                <option value="" selected>
                                                                                    Open this select
                                                                                    menu</option>
                                                                                @foreach ($beneficiaries as $beneficiaryRelationship)
                                                                                    <option
                                                                                        value="{{ $beneficiaryRelationship->id }}">
                                                                                        {{ $beneficiaryRelationship->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <label>Relationship *</label>
                                                                            @error('relationship_id')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <label class="form-label">Home Address
                                                                                *</label>
                                                                            <textarea class="form-control @error('home_address') is-invalid @enderror" rows="3" wire:model="home_address"></textarea>
                                                                            @error('home_address')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <!-- start: Employment detail -->
                                                    @if ($currentStep == 2)
                                                        <div class="tab-pane @if ($currentStep == 2) show active @endif"
                                                            id="step2">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Employment Information
                                                                    </h6>
                                                                    <p class="text-muted small">
                                                                        It is a long established fact that a
                                                                        reader will be distracted by Avio.
                                                                    </p>

                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('job_title') is-invalid @enderror"
                                                                                placeholder="Job title"
                                                                                wire:model="job_title" />
                                                                            <label>Job Title</label>
                                                                            @error('job_title')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('department') is-invalid @enderror"
                                                                                placeholder="department"
                                                                                wire:model="department" />
                                                                            <label>Department *</label>
                                                                            @error('department')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('emp_status') is-invalid @enderror"
                                                                                wire:model="emp_status">
                                                                                <option selected>
                                                                                    Open this select menu
                                                                                </option>
                                                                                <option value="Full-Time">
                                                                                    Full Time
                                                                                </option>
                                                                                <option value="Part Time">
                                                                                    Part Time
                                                                                </option>
                                                                                <option value="Contract">
                                                                                    Contract
                                                                                </option>
                                                                            </select>
                                                                            <label>Employment Status *</label>
                                                                            @error('emp_status')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="date"
                                                                                class="form-control @error('start_date') is-invalid @enderror"
                                                                                wire:model="start_date"
                                                                                placeholder="start date" />
                                                                            <label>Start Date</label>
                                                                            @error('start_date')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('reporting_manager') is-invalid @enderror"
                                                                                wire:model="reporting_manager"
                                                                                placeholder="reporting manager" />
                                                                            <label>Reporting Manager/Supervisor
                                                                                *</label>
                                                                            @error('reporting_manager')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('probation_period') is-invalid @enderror"
                                                                                wire:model="probation_period"
                                                                                placeholder="probation period" />
                                                                            <label>Probation Period (If any) *</label>
                                                                            @error('probation_period')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control @error('work_location') is-invalid @enderror" wire:model="work_location"
                                                                                rows="3" placeholder="Enter work location"></textarea>
                                                                            <label class="form-label">Work
                                                                                Location</label>
                                                                            @error('work_location')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <!-- start: select team -->
                                                    @if ($currentStep == 3)
                                                        <div class="tab-pane @if ($currentStep == 3) show active @endif"
                                                            id="step3">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Education & Qualification
                                                                    </h6>
                                                                    <p class="text-muted small">
                                                                        If you need more info, please check out
                                                                        <a href="add-user.html#">Project Guidelines</a>
                                                                    </p>

                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('highest_qualification') is-invalid @enderror"
                                                                                wire:model="highest_qualification">
                                                                                <option selected>
                                                                                    Open this select menu
                                                                                </option>
                                                                                <option value="phd">PhD</option>
                                                                                <option value="MSc">MSc</option>
                                                                                <option value="BSc">BSc</option>
                                                                                <option value="College">
                                                                                    College
                                                                                </option>
                                                                                <option value="Primary">
                                                                                    Primary
                                                                                </option>
                                                                            </select>
                                                                            <label>Highest Qualification *</label>
                                                                            @error('highest_qualification')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('institution') is-invalid @enderror"
                                                                                placeholder="Name of Institution"
                                                                                wire:model="institution" />
                                                                            <label>Institution Name</label>
                                                                            @error('institution')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="date"
                                                                                class="form-control @error('graduation_date') is-invalid @enderror"
                                                                                placeholder="year of graduation"
                                                                                wire:model="graduation_date" />
                                                                            <label>Graduation Year *</label>
                                                                            @error('graduation_date')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-12">
                                                                            <input type="text"
                                                                                class="form-control @error('lan_spoken') is-invalid @enderror"
                                                                                placeholder="Languages spoken"
                                                                                wire:model="lan_spoken" />
                                                                            <label>Languages Spoken*</label>
                                                                            @error('lan_spoken')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="text"
                                                                                class="form-control @error('certification') is-invalid @enderror"
                                                                                placeholder="probation period"
                                                                                wire:model="certification" />
                                                                            <label>Professional Certifications *</label>
                                                                            @error('certification')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <!-- start: Upload Files -->
                                                    @if ($currentStep == 4)
                                                        <div class="tab-pane @if ($currentStep == 4) show active @endif"
                                                            id="step4">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Work Experience
                                                                    </h6>
                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="text"
                                                                                class="form-control @error('exp_job_title') is-invalid @enderror"
                                                                                wire:model="exp_job_title"
                                                                                placeholder="Job Title" />
                                                                            <label>Job Title</label>
                                                                            @error('exp_job_title')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="text"
                                                                                class="form-control @error('prev_emp') is-invalid @enderror"
                                                                                wire:model="prev_emp"
                                                                                placeholder="Previous Employer" />
                                                                            <label>Previous Employer</label>
                                                                            @error('prev_emp')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="date"
                                                                                class="form-control @error('exp_start_date') is-invalid @enderror"
                                                                                wire:model="exp_start_date"
                                                                                placeholder="Start Date" />
                                                                            <label>Start Date</label>
                                                                            @error('exp_start_date')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="date"
                                                                                class="form-control @error('exp_end_date') is-invalid @enderror"
                                                                                wire:model="exp_end_date"
                                                                                placeholder="End Date" />
                                                                            <label>End Date</label>
                                                                            @error('exp_end_date')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control @error('reason_leaving') is-invalid @enderror" wire:model="reason_leaving"
                                                                                rows="3" placeholder="State reason for leaving"></textarea>
                                                                            <label class="form-label">Reason for
                                                                                Leaving</label>
                                                                            @error('reason_leaving')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <!-- start: Banking and Compensation -->
                                                    @if ($currentStep == 5)
                                                        <div class="tab-pane @if ($currentStep == 5) show active @endif"
                                                            id="step5">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Banking & Compensation
                                                                    </h6>
                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="text"
                                                                                class="form-control @error('bank_name') is-invalid @enderror"
                                                                                wire:model="bank_name"
                                                                                placeholder="Bank Name" />
                                                                            <label>Bank Name</label>
                                                                            @error('bank_name')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="number"
                                                                                class="form-control @error('acc_no') is-invalid @enderror"
                                                                                wire:model="acc_no"
                                                                                placeholder="Account Number" />
                                                                            <label>Account Number</label>
                                                                            @error('acc_no')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="number"
                                                                                class="form-control @error('bank_code') is-invalid @enderror"
                                                                                wire:model="bank_code"
                                                                                placeholder="Bank Sort Code" />
                                                                            <label>Bank Sort Code</label>
                                                                            @error('bank_code')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="text"
                                                                                class="form-control @error('bank_branch') is-invalid @enderror"
                                                                                wire:model="bank_branch"
                                                                                placeholder="Bank Branch" />
                                                                            <label>Bank Branch</label>
                                                                            @error('bank_branch')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <h6 class="card-title mb-1">
                                                                            Benefits & Compensation
                                                                        </h6>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('prev_salary') is-invalid @enderror"
                                                                                wire:model="prev_salary"
                                                                                placeholder="Previous Salary" />
                                                                            <label>Previous Salary</label>
                                                                            @error('prev_salary')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('pension_scheme') is-invalid @enderror"
                                                                                wire:model="pension_scheme">
                                                                                <option selected>
                                                                                    Open this select menu
                                                                                </option>
                                                                                <option value="Yes">Yes</option>
                                                                                <option value="No">No</option>
                                                                            </select>
                                                                            <label>Are you on a pension scheme?
                                                                                *</label>
                                                                            @error('pension_scheme')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('pension_adm') is-invalid @enderror"
                                                                                wire:model="pension_adm"
                                                                                placeholder="Pension Administrator" />
                                                                            <label>Name of Pension Administrator</label>
                                                                            @error('pension_adm')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('pension_id') is-invalid @enderror"
                                                                                wire:model="pension_id"
                                                                                placeholder="pension ID" />
                                                                            <label>If Yes, Pension ID</label>
                                                                            @error('pension_id')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('health_insurance') is-invalid @enderror"
                                                                                wire:model="health_insurance">
                                                                                <option selected>
                                                                                    Open this select menu
                                                                                </option>
                                                                                <option value="Yes">Yes</option>
                                                                                <option value="No">No</option>
                                                                            </select>
                                                                            <label>Have Health Insurance? *</label>
                                                                            @error('health_insurance')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('insurance_name') is-invalid @enderror"
                                                                                wire:model="insurance_name"
                                                                                placeholder="pension ID" />
                                                                            <label>Name of Insurance</label>
                                                                            @error('insurance_name')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('insurance_id') is-invalid @enderror"
                                                                                wire:model="insurance_id"
                                                                                placeholder="pension ID" />
                                                                            <label>Insurance ID</label>
                                                                            @error('insurance_id')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control @error('benefits') is-invalid @enderror" wire:model="benefits" rows="3"
                                                                                placeholder="State reason for leaving"></textarea>
                                                                            <label class="form-label">State any other
                                                                                benefit</label>
                                                                            @error('benefits')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if ($currentStep == 6)
                                                        <div class="tab-pane @if ($currentStep == 6) show active @endif"
                                                            id="step6">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        IT and Security
                                                                    </h6>
                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="email"
                                                                                class="form-control @error('office_email') is-invalid @enderror"
                                                                                wire:model="office_email"
                                                                                placeholder="Enter official Email" />
                                                                            <label>Offical Email Address</label>
                                                                            @error('office_email')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="text"
                                                                                class="form-control @error('comp_equipment') is-invalid @enderror"
                                                                                wire:model="comp_equipment"
                                                                                placeholder="Company Equipment Issued" />
                                                                            <label>Company Equipment Issued</label>
                                                                            @error('comp_equipment')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control @error('system_access') is-invalid @enderror" wire:model="system_access"
                                                                                rows="3" placeholder="System Access Requirements"></textarea>
                                                                            <label class="form-label">Any System Access
                                                                                Requirements</label>
                                                                            @error('system_access')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control @error('security') is-invalid @enderror" wire:model="security" rows="3"
                                                                                placeholder="Security Clearance Level (if applicable)"></textarea>
                                                                            <label class="form-label">Security
                                                                                Clearance
                                                                                Level (if applicable)</label>
                                                                            @error('security')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <!-- Start New Tab -->
                                                    @if ($currentStep == 7)
                                                        <div class="tab-pane @if ($currentStep == 7) show active @endif"
                                                            id="step7">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Review and Submit
                                                                    </h6>

                                                                    <div class="row g-2 mt-3">

                                                                        <div
                                                                            class="card fieldset border border-muted mt-3">
                                                                            <span
                                                                                class="fieldset-tile text-muted bg-body">Review
                                                                                Entry</span>
                                                                            <div class="card">
                                                                                <div
                                                                                    class="card-body table-responsive p-0">
                                                                                    <table
                                                                                        class="table card-table mb-0">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">
                                                                                                    Personal</th>
                                                                                                <th scope="col">
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Full Name</td>
                                                                                                <td>{{ $first_name }}
                                                                                                    {{ $middle_name }}
                                                                                                    {{ $last_name }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Gender</td>
                                                                                                <td>{{ $gender }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Phone Number</td>
                                                                                                <td>{{ $phone_number }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Email</td>
                                                                                                <td>{{ $email }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Date of Birth</td>
                                                                                                <td>{{ $date_of_birth }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Marital Status</td>
                                                                                                <td>{{ $marital_status }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Nationality</td>
                                                                                                <td>{{ $nationality_id }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Identification Type
                                                                                                </td>
                                                                                                <td>{{ $id_type }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>ID Number</td>
                                                                                                <td>{{ $id_number }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>ID Expiry Date</td>
                                                                                                <td>{{ $expiry_date }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Emergency Contact
                                                                                                </td>
                                                                                                <td>{{ $full_name }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Phone</td>
                                                                                                <td>{{ $telephone }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Relationship</td>
                                                                                                <td>{{ $relationship_id }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Address</td>
                                                                                                <td>{{ $home_address }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Employment Information</h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Job
                                                                                                    Title</th>
                                                                                                <th scope="col">
                                                                                                    Department</th>
                                                                                                <th scope="col">
                                                                                                    Status</th>
                                                                                                <th scope="col">
                                                                                                    Start</th>
                                                                                                <th scope="col">End
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Reporting Officer
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Location</th>
                                                                                                <th scope="col">
                                                                                                    Probation</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>{{ $job_title }}
                                                                                                </td>
                                                                                                <td>{{ $department }}
                                                                                                </td>
                                                                                                <td>{{ $emp_status }}
                                                                                                </td>
                                                                                                <td>{{ $start_date }}
                                                                                                </td>
                                                                                                <td>{{ $end_date ?? '' }}
                                                                                                </td>
                                                                                                <td>{{ $reporting_manager }}
                                                                                                </td>
                                                                                                <td>{{ $work_location }}
                                                                                                </td>
                                                                                                <td>{{ $probation_period }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Education Information</h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">
                                                                                                    Institution Name
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Qualification</th>
                                                                                                <th scope="col">
                                                                                                    Graduation</th>
                                                                                                <th scope="col">
                                                                                                    Languages</th>
                                                                                                <th scope="col">
                                                                                                    Other Certification
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>{{ $institution }}
                                                                                                </td>
                                                                                                <td>{{ $highest_qualification }}
                                                                                                </td>
                                                                                                <td>{{ $graduation_date }}
                                                                                                </td>
                                                                                                <td>{{ $lan_spoken }}
                                                                                                </td>
                                                                                                <td>{{ $certification }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Experience</h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Job
                                                                                                    Title</th>
                                                                                                <th scope="col">
                                                                                                    Previous Employer
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Start</th>
                                                                                                <th scope="col">End
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Reason for Leaving
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>{{ $exp_job_title }}
                                                                                                </td>
                                                                                                <td>{{ $prev_emp }}
                                                                                                </td>
                                                                                                <td>{{ $exp_start_date }}
                                                                                                </td>
                                                                                                <td>{{ $exp_end_date }}
                                                                                                </td>
                                                                                                <td>{{ $reason_leaving }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>


                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Banking & Compensation</h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Bank
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Number</th>
                                                                                                <th scope="col">Sort
                                                                                                    Code</th>
                                                                                                <th scope="col">
                                                                                                    Branch</th>
                                                                                                <th scope="col">Last
                                                                                                    Salary</th>
                                                                                                <th scope="col">
                                                                                                    Pension ID</th>
                                                                                                <th scope="col">
                                                                                                    Pension Admin</th>
                                                                                                <th scope="col">
                                                                                                    Health Ins. ID</th>
                                                                                                <th scope="col">
                                                                                                    Health Ins. Admin
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Other Benefits</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>{{ $bank_name }}
                                                                                                </td>
                                                                                                <td>{{ $acc_no }}
                                                                                                </td>
                                                                                                <td>{{ $bank_code }}
                                                                                                </td>
                                                                                                <td>{{ $bank_branch }}
                                                                                                </td>
                                                                                                <td>{{ $prev_salary }}
                                                                                                </td>
                                                                                                <td>{{ $pension_id }}
                                                                                                </td>
                                                                                                <td>{{ $pension_adm }}
                                                                                                </td>
                                                                                                <td>{{ $insurance_id }}
                                                                                                </td>
                                                                                                <td>{{ $insurance_name }}
                                                                                                </td>
                                                                                                <td>{{ $benefits }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">IT
                                                                                            and Security</h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">
                                                                                                    Email address</th>
                                                                                                <th scope="col">
                                                                                                    Equipment Issued
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    System Access
                                                                                                    Requirement</th>
                                                                                                <th scope="col">
                                                                                                    Security Clearance
                                                                                                    Level</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>{{ $office_email }}
                                                                                                </td>
                                                                                                <td>{{ $comp_equipment }}
                                                                                                </td>
                                                                                                <td>{{ $system_access }}
                                                                                                </td>
                                                                                                <td>{{ $security }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>
                                                    @endif

                                                    <div class="text-end">
                                                        @if (
                                                            $currentStep == 2 ||
                                                                $currentStep == 3 ||
                                                                $currentStep == 4 ||
                                                                $currentStep == 5 ||
                                                                $currentStep == 6 ||
                                                                $currentStep == 7)
                                                            <button type="button" class="btn btn-secondary"
                                                                wire:click.prevent="decreaseStep()">
                                                                Prev
                                                            </button>
                                                        @endif

                                                        @if (
                                                            $currentStep == 1 ||
                                                                $currentStep == 2 ||
                                                                $currentStep == 3 ||
                                                                $currentStep == 4 ||
                                                                $currentStep == 5 ||
                                                                $currentStep == 6)
                                                            <button
                                                                class="btn bg-secondary text-light next text-uppercase"
                                                                wire:click.prevent="increaseStep()">
                                                                Next
                                                            </button>
                                                        @endif

                                                        @if ($currentStep == 7)
                                                            <button
                                                                class="btn bg-secondary text-light next text-uppercase"
                                                                wire:click.prevent="save()">
                                                                Save Record
                                                            </button>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                    <!-- Plugin Js -->
                    <script src="assets/js/bundle/invoice.bundle.js"></script>
                </div>
            </div>
        </div>
