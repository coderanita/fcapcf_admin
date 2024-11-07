<div>
    <x-breadcrumb title="Staff Management " sub_title="Edit User's Profile" />

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
                                                        <a class="nav-link {{ $this->isActiveTab('personal') }}"
                                                            wire:click="setProfileTab('personal',1)">1.
                                                            Personal Information</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link {{ $this->isActiveTab('employment') }}"
                                                            wire:click="setProfileTab('employment',2)"
                                                            data-bs-toggle="tab" data-bs-step="2">2.
                                                            Employment
                                                        </a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link {{ $this->isActiveTab('education') }}""
                                                            wire:click="setProfileTab('education',3)">3.
                                                            Education</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link {{ $this->isActiveTab('work_experience') }}"
                                                            wire:click="setProfileTab('work_experience',4)">4.
                                                            Experience</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link {{ $this->isActiveTab('banking_and_compensation') }}"
                                                            wire:click="setProfileTab('banking_and_compensation',5)">5.
                                                            Banking & Compensation</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link {{ $this->isActiveTab('it_and_security') }}"
                                                            wire:click="setProfileTab('it_and_security',6)">6.
                                                            IT & Security</a>
                                                    </li>

                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link {{ $this->isActiveTab('review') }}"
                                                            wire:click="setProfileTab('review',7)">7.
                                                            Review</a>
                                                    </li>

                                                </ul>
                                                <!-- start: project status progress bar -->
                                                <div class="progress bg-transparent"
                                                    style="height: 3px; margin-top: -2px">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        aria-valuenow="{{ $profileStep }}" aria-valuemin="1"
                                                        aria-valuemax="7" style="width:{{ $profileStep * 15 . '%' }}">
                                                    </div>
                                                </div>


                                                <div class="tab-content mt-3">
                                                    <!-- start: project type -->
                                                    <div class="tab-pane fade {{ $this->isActiveTab('personal') }}"
                                                        id="step1">
                                                        <form wire:submit='updatePersonal' method="post">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Personal Information
                                                                    </h6>
                                                                    <p class="text-muted small">
                                                                        If you need more info, please check out
                                                                        <a href="#">FAQ Page</a>
                                                                    </p>
                                                                    <!-- Custome redio input -->

                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Enter first name"
                                                                                wire:model='profile.fname' />
                                                                            <label>First Name <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error for='profile.fname' />

                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.personal_mname'
                                                                                placeholder="Enter middle name" />
                                                                            <label>Middle Name </label>
                                                                            <x-input-error
                                                                                for='profile.personal_mname' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.lname'
                                                                                placeholder="Enter last name" />
                                                                            <label>Last Name <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error for='profile.lname' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select class="form-select"
                                                                                wire:model='profile.personal_gender'>
                                                                                <option selected>

                                                                                </option>
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>
                                                                            </select>
                                                                            <label>Select Gender <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_gender' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="number" class="form-control"
                                                                                wire:model='profile.personal_phone'
                                                                                placeholder="Add telephone number" />
                                                                            <label>Phone Number <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_phone' />
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="email" class="form-control"
                                                                                wire:model='profile.email'
                                                                                placeholder="e.g. example@email.com" />
                                                                            <label>Email Address <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error for='profile.email' />
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="date" class="form-control"
                                                                                wire:model='profile.personal_birth_date' />
                                                                            <label>Date of Birth <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_birth_date' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select class="form-select"
                                                                                wire:model='profile.personal_marital_status'>
                                                                                <option selected>

                                                                                </option>
                                                                                <option value="single">Single</option>
                                                                                <option value="married">Married
                                                                                </option>
                                                                                <option value="divorced">Divorced
                                                                                </option>
                                                                                <option value="widow">Widow</option>
                                                                                <option value="widower">Widower
                                                                                </option>
                                                                            </select>
                                                                            <label>Marital Status <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_marital_status' />
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select class="form-select"
                                                                                wire:model='profile.personal_nationality'>
                                                                                <option selected>

                                                                                </option>
                                                                                <option value="Nigerian">Nigerian
                                                                                </option>
                                                                                <option value="Ghanaian">Ghanaian
                                                                                </option>
                                                                                <option value="Zambian">Zambian
                                                                                </option>
                                                                            </select>
                                                                            <label>Nationality <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_nationality' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select class="form-select"
                                                                                wire:model='profile.personal_identification_type'>
                                                                                <option selected>

                                                                                </option>
                                                                                @foreach ($profile->identity_type as $key => $value)
                                                                                    <option
                                                                                        value="{{ $key }}">
                                                                                        {{ $value }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <label>Identification Type <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_identification_type' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.personal_id_number'
                                                                                placeholder="Enter ID Number" />
                                                                            <label>ID Number <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_id_number' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="date" class="form-control"
                                                                                wire:model='profile.personal_expiry_date' />
                                                                            <label>Expiry Date <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.personal_expiry_date' />
                                                                        </div>

                                                                        <h4 class="my-md" style="margin: 15px 0">
                                                                            Emergency Contact
                                                                        </h4>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.emergency_full_name'
                                                                                placeholder="Enter full name" />
                                                                            <label>Full Name <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.emergency_full_name' />
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.emergency_phone'
                                                                                placeholder="Emergency telephone" />
                                                                            <label>Telephone </label>
                                                                            <x-input-error
                                                                                for='profile.emergency_phone' />

                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select class="form-select"
                                                                                wire:model='profile.emergency_relationship'>
                                                                                <option selected>

                                                                                </option>
                                                                                <option value="father">Father</option>
                                                                                <option value="mother">Mother</option>
                                                                                <option value="brother">Brother
                                                                                </option>
                                                                                <option value="sister">Sister</option>
                                                                                <option value="son">Son</option>
                                                                            </select>
                                                                            <label>Relationship <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.emergency_relationship' />
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <label class="form-label">Home
                                                                                Address</label>
                                                                            <textarea class="form-control" wire:model='profile.personal_home_address' rows="3"></textarea>
                                                                            <x-input-error
                                                                                for='profile.personal_home_address' />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                {{-- <button type="button" class="btn btn-secondary">
                                  Close
                                </button> --}}
                                                                <button type="submit"
                                                                    class="btn bg-secondary text-light next text-uppercase">
                                                                    Save Record
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- start: Employment detail -->
                                                    <div class="tab-pane fade {{ $this->isActiveTab('employment') }}"
                                                        id="step2">
                                                        <form wire:submit='updateEmployment' method="post">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Employment Information
                                                                    </h6>
                                                                    <p class="text-muted small">
                                                                        It is a long established fact that a
                                                                        reader will be distracted by Avio.
                                                                    </p>



                                                                    @foreach ($employment as $index => $employmentItem)
                                                                        <x-profile-employment name="employment"
                                                                            :index="$index" :item="$employmentItem" />
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <button type="button"
                                                                    wire:click="addItem('employment')"
                                                                    class="btn btn-secondary">
                                                                    + Add Employment
                                                                </button>
                                                                <button
                                                                    class="btn bg-secondary text-light next text-uppercase">
                                                                    Save Record
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- start: select team -->
                                                    <div class="tab-pane fade {{ $this->isActiveTab('education') }}"
                                                        id="step3">
                                                        <form wire:submit='updateEducation' method="post">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Education & Qualification
                                                                    </h6>
                                                                    <p class="text-muted small">
                                                                        If you need more info, please check out
                                                                        <a href="#">Project Guidelines</a>
                                                                    </p>


                                                                    @foreach ($education as $index => $educationItem)
                                                                        <x-profile-education name="education"
                                                                            :index="$index" :item="$educationItem" />
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <button type="button"
                                                                    wire:click="addItem('education')"
                                                                    class="btn btn-secondary">
                                                                    + Add Education
                                                                </button>
                                                                <button
                                                                    class="btn bg-secondary text-light next text-uppercase">
                                                                    Save Record
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- start: work experience -->
                                                    <div class="tab-pane fade {{ $this->isActiveTab('work_experience') }}"
                                                        id="step4">
                                                        <form wire:submit='updateExperience' method="post">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Work Experience
                                                                    </h6>


                                                                    @foreach ($work_experience as $index => $experience)
                                                                        <x-profile-experience name="work_experience"
                                                                            :index="$index" :item="$experience" />
                                                                    @endforeach




                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <button type="button"
                                                                    wire:click="addItem('work_experience')"
                                                                    class="btn btn-secondary">
                                                                    + Add Job Experience
                                                                </button>
                                                                <button
                                                                    class="btn bg-secondary text-light next text-uppercase">
                                                                    Save Record
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- start: Banking and Compensation -->
                                                    <div class="tab-pane fade {{ $this->isActiveTab('banking_and_compensation') }}"
                                                        id="step5">
                                                        <form wire:submit='updateBanking' method="post">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Banking & Compensation
                                                                    </h6>
                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.bk_bank_name'
                                                                                placeholder="Bank Name" />
                                                                            <label>Bank Name</label>
                                                                            <x-input-error
                                                                                for='profile.bk_bank_name' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="number" class="form-control"
                                                                                wire:model='profile.bk_account_number'
                                                                                placeholder="Account Number" />
                                                                            <label>Account Number</label>
                                                                            <x-input-error
                                                                                for='profile.bk_account_number' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="number" class="form-control"
                                                                                wire:model='profile.bk_bank_sort_code'
                                                                                placeholder="Bank Sort Code" />
                                                                            <label>Bank Sort Code</label>
                                                                            <x-input-error
                                                                                for='profile.bk_bank_sort_code' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-3">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.bk_bank_branch'
                                                                                placeholder="Bank Branch" />
                                                                            <label>Bank Branch</label>
                                                                            <x-input-error
                                                                                for='profile.bk_bank_branch' />

                                                                        </div>
                                                                        <h6 class="card-title mb-1">
                                                                            Benefits & Compensation
                                                                        </h6>
                                                                        <div class="form-floating mb-2">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.bk_previours_salary'
                                                                                placeholder="Previous Salary" />
                                                                            <label>Previous Salary</label>
                                                                            <x-input-error
                                                                                for='profile.bk_previours_salary' />

                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select class="form-select"
                                                                                wire:model='profile.bk_pension_scheme'>
                                                                                <option selected>

                                                                                </option>
                                                                                <option value="yes">Yes</option>
                                                                                <option value="no">No</option>
                                                                            </select>
                                                                            <label>Are you on a pension scheme? <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.bk_pension_scheme' />
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.bk_pension_admin_name'
                                                                                placeholder="Pension Administrator" />
                                                                            <label>Name of Pension Administrator</label>
                                                                            <x-input-error
                                                                                for='profile.bk_pension_admin_name' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.bk_pension_id'
                                                                                placeholder="pension ID" />
                                                                            <label>If Yes, Pension ID</label>
                                                                            <x-input-error
                                                                                for='profile.bk_pension_id' />

                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select class="form-select"
                                                                                wire:model='profile.bk_health_insurance'>
                                                                                <option selected>

                                                                                </option>
                                                                                <option value="yes">Yes</option>
                                                                                <option value="no">No</option>
                                                                            </select>
                                                                            <label>Have Health Insurance? <sup
                                                                                    class="text-danger">*</sup></label>
                                                                            <x-input-error
                                                                                for='profile.bk_health_insurance' />
                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.bk_insurance_name'
                                                                                placeholder="pension ID" />
                                                                            <label>Name of Insurance</label>
                                                                            <x-input-error
                                                                                for='profile.bk_insurance_name' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.bk_insurance_id'
                                                                                placeholder="pension ID" />
                                                                            <label>Insurance ID</label>
                                                                            <x-input-error
                                                                                for='profile.bk_insurance_id' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control" rows="3" wire:model='profile.bk_other_benefit'
                                                                                placeholder="State reason for leaving"></textarea>
                                                                            <label class="form-label">State any other
                                                                                benefit</label>
                                                                            <x-input-error
                                                                                for='profile.bk_other_benefit' />

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                {{-- <button type="button" class="btn btn-secondary">
                                  Close
                                </button> --}}
                                                                <button
                                                                    class="btn bg-secondary text-light next text-uppercase">
                                                                    Save Record
                                                                </button>


                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="tab-pane fade {{ $this->isActiveTab('it_and_security') }}"
                                                        id="step6">
                                                        <form wire:submit='updateSecurity' method="post">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        IT and Security
                                                                    </h6>
                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="email" class="form-control"
                                                                                wire:model='profile.sec_offical_email'
                                                                                placeholder="Enter official Email" />
                                                                            <label>Offical Email Address</label>
                                                                            <x-input-error
                                                                                for='profile.sec_offical_email' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-md-6">
                                                                            <input type="text" class="form-control"
                                                                                wire:model='profile.sec_company_equipment_issued'
                                                                                placeholder="Company Equipment Issued" />
                                                                            <label>Company Equipment Issued</label>
                                                                            <x-input-error
                                                                                for='profile.sec_company_equipment_issued' />

                                                                        </div>
                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control" rows="3" wire:model='profile.sec_sys_access_requirement'
                                                                                placeholder="System Access Requirements"></textarea>
                                                                            <label class="form-label">Any System Access
                                                                                Requirements</label>
                                                                            <x-input-error
                                                                                for='profile.sec_sys_access_requirement' />

                                                                        </div>

                                                                        <div class="form-floating mb-2 col-12">
                                                                            <textarea class="form-control" rows="3" wire:model='profile.sec_security_clearance'
                                                                                placeholder="Security Clearance Level (if applicable)"></textarea>
                                                                            <label class="form-label">Security
                                                                                Clearance Level (if applicable)</label>
                                                                            <x-input-error
                                                                                for='profile.sec_security_clearance' />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                {{-- <button type="button" class="btn btn-secondary">
                                  Close
                                </button> --}}
                                                                <button
                                                                    class="btn bg-secondary text-light next text-uppercase">
                                                                    Save Record
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <!-- Start New Tab -->

                                                    <div class="tab-pane fade {{ $this->isActiveTab('review') }}"
                                                        id="step7">
                                                        <form wire:submit='updateEmployment' method="post">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Review
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
                                                                                                <td>{{ $profile->user->fullName() }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Gender </td>
                                                                                                <td>{{ $profile->personal_gender ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Phone Number</td>
                                                                                                <td>{{ $profile->personal_phone ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Email </td>
                                                                                                <td>{{ $profile->user->email }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Date of Birth: </td>
                                                                                                <td>
                                                                                                    {{ date('d F, Y', strtotime($profile->personal_birth_date)) ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Marital Status:
                                                                                                </td>
                                                                                                <td>{{ ucfirst($profile->personal_marital_status ?? 'N/A') }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Nationality: </td>
                                                                                                <td>{{ ucfirst($profile->personal_nationality ?? 'N/A') }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Identification Type:
                                                                                                </td>
                                                                                                <td>
                                                                                                    {{ $profile->identity_type[$profile->personal_identification_type] ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>ID Number: </td>
                                                                                                <td>{{ $profile->personal_id_number ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>ID Expiry Date:
                                                                                                </td>
                                                                                                <td>
                                                                                                    {{ date('d F, Y', strtotime($profile->personal_expiry_date)) ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Emergency Contact:
                                                                                                </td>
                                                                                                <td>{{ $profile->emergency_full_name ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Phone: </td>
                                                                                                <td>{{ $profile->emergency_phone ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Relationship: </td>
                                                                                                <td>{{ $profile->emergency_relationship ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Address: </td>
                                                                                                <td>{{ $profile->personal_home_address ?? 'N/A' }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <br><br>
                                                                                    {{-- {{$profile->}} --}}
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Employment Information
                                                                                        </h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Job
                                                                                                    Title</th>
                                                                                                <th scope="col">
                                                                                                    Department</th>
                                                                                                <th scope="col">
                                                                                                    Status</th>
                                                                                                <th scope="col">
                                                                                                    Start </th>
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


                                                                                            @foreach ($employment as $item)
                                                                                                <tr>
                                                                                                    <td>{{ ucfirst($item['job_title']) }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['dempartment']) }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['status']) }}
                                                                                                    </td>
                                                                                                    <td>{{ $item['start_date'] }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['reporting_manager_supervisor']) }}
                                                                                                    </td>
                                                                                                    <td>{{ $item['probation_period'] }}
                                                                                                    </td>
                                                                                                    <td>{{ $item['work_location'] }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                            @endforeach



                                                                                        </tbody>
                                                                                    </table>


                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Education Information
                                                                                        </h6>
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
                                                                                                    Languages </th>
                                                                                                <th scope="col">
                                                                                                    Other Certification
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>

                                                                                            @foreach ($education as $item)
                                                                                                <tr>
                                                                                                    <td>{{ ucfirst($item['highest_qualification']) }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['institution_name']) }}
                                                                                                    </td>
                                                                                                    <td>{{ $item['graduation_year'] }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['Languages_spoken']) }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['professional_certs']) }}
                                                                                                    </td>


                                                                                                </tr>
                                                                                            @endforeach

                                                                                        </tbody>
                                                                                    </table>
                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Experience
                                                                                        </h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Job
                                                                                                    Title</th>
                                                                                                <th scope="col">
                                                                                                    Previous Employeer
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
                                                                                            @foreach ($work_experience as $item)
                                                                                                <tr>
                                                                                                    <td>{{ ucfirst($item['title']) }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['previous_employer']) }}
                                                                                                    </td>
                                                                                                    <td>{{ $item['from_year'] }}
                                                                                                    </td>
                                                                                                    <td>{{ $item['to_year'] }}
                                                                                                    </td>
                                                                                                    <td>{{ ucfirst($item['leaving_reason']) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                            @endforeach

                                                                                        </tbody>
                                                                                    </table>

                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            Banking & Compensation
                                                                                        </h6>
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Bank
                                                                                                </th>
                                                                                                <th scope="col">
                                                                                                    Number</th>
                                                                                                <th scope="col">Sort
                                                                                                    Code</th>
                                                                                                <th scope="col">
                                                                                                    Branch </th>
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
                                                                                                <td>{{ ucfirst($profile->bk_bank_name ?? 'N/A') }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_account_number ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_bank_sort_code ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_bank_branch ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_previours_salary ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_pension_scheme ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ ucfirst($profile->bk_pension_admin_name ?? 'N/A') }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_pension_id ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_health_insurance ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ ucfirst($profile->bk_insurance_name ?? 'N/A') }}
                                                                                                </td>
                                                                                                <td>{{ $profile->bk_insurance_id ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ ucfirst($profile->bk_other_benefit ?? 'N/A') }}
                                                                                                </td>


                                                                                            </tr>



                                                                                        </tbody>
                                                                                    </table>
                                                                                    <br><br>
                                                                                    <table
                                                                                        class="table card-table mb-0"
                                                                                        style="margin: 20px 0;">
                                                                                        <h6 class="card-title mb-1">
                                                                                            IT and Security
                                                                                        </h6>
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
                                                                                                    Level </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>{{ $profile->sec_offical_email ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->sec_company_equipment_issued ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->sec_sys_access_requirement ?? 'N/A' }}
                                                                                                </td>
                                                                                                <td>{{ $profile->sec_security_clearance ?? 'N/A' }}
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
                                                        </form>


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

                </div>
            </div>

        </div>
    </div>
</div>

@assets
    <!-- Plugin Js -->
    {{-- <script src="{{asset('js/bundle/invoice.bundle.js')}}"></script> --}}
@endassets
