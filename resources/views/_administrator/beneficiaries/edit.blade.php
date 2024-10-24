<div>
    <x-breadcrumb title="Beneficiary Management" sub_title="Edit Beneficiary">
    </x-breadcrumb>

    <div class="page-body">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-12">
                    <div class="card print_invoice">
                        <div class="card-header border-bottom fs-4">
                            <!-- <h5 class="card-title mb-0">INVOICE</h5> -->
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
                                                            href="add-beneficiary.html#step1" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(1)" data-bs-step="1">1. Personal
                                                            Information</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 2) active @endif"
                                                            href="add-beneficiary.html#step2" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(2)" data-bs-step="3">2.
                                                            Socioeconomic
                                                            Info</a>
                                                    </li>
                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 3) active @endif"
                                                            href="add-beneficiary.html#step3" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(3)" data-bs-step="4">3. Needs,
                                                            Assistance &
                                                            Demographics </a>
                                                    </li>

                                                    <li class="nav-item flex-fill text-center">
                                                        <a class="nav-link @if ($currentStep == 4) active @endif"
                                                            href="add-beneficiary.html#step4" data-bs-toggle="tab"
                                                            wire:click="setCurrentStep(4)" data-bs-step="7">4.
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
                                                    @if ($currentStep == 1)
                                                        <!-- start: project type -->
                                                        <div class="tab-pane fade show active" id="step1">
                                                            <form wire:submit.prevent="submitPersonalInfo">
                                                                <div class="card bg-body mb-2">
                                                                    <div class="card-body">
                                                                        <h6 class="card-title mb-1">
                                                                            Personal Information
                                                                        </h6>
                                                                        <p class="text-muted small">
                                                                            If you need more info, please check out
                                                                            <a href="add-beneficiary.html#">FAQ Page</a>
                                                                        </p>
                                                                        <!-- Custome redio input -->

                                                                        <div class="row g-2 mt-3">
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
                                                                                <input type="file"
                                                                                    class="form-control @error('profile_photo_path') is-invalid @enderror"
                                                                                    accept="image/*, video/*"
                                                                                    capture="environment"
                                                                                    wire:model="profile_photo_path" />
                                                                                <label>Take Photo *</label>
                                                                                @error('profile_photo_path')
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
                                                                                    class="form-select @error('disability_status') is-invalid @enderror"
                                                                                    wire:model="disability_status">
                                                                                    <option value="" selected>
                                                                                        Open this select
                                                                                        menu</option>
                                                                                    <option value="yes">Yes</option>
                                                                                    <option value="no">No</option>
                                                                                </select>
                                                                                <label>Disability Status *</label>
                                                                                @error('disability_status')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <input type="text"
                                                                                    class="form-control @error('type_of_disability') is-invalid @enderror"
                                                                                    placeholder="Enter type of disability"
                                                                                    wire:model="type_of_disability" />
                                                                                <label>If Yes, Type of Disability
                                                                                    *</label>
                                                                                @error('type_of_disability')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <select
                                                                                    class="form-select @error('language_id') is-invalid @enderror"
                                                                                    wire:model="language_id">
                                                                                    <option value="" selected>
                                                                                        Open this select
                                                                                        menu</option>

                                                                                    @foreach ($languages as $language)
                                                                                        <option
                                                                                            value="{{ $language->id }}">
                                                                                            {{ $language->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <label>Primary Language *</label>
                                                                                @error('language_id')
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
                                                                                    <input type="number"
                                                                                        id="phone"
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

                                                            </form>
                                                        </div>
                                                    @endif

                                                    @if ($currentStep == 2)
                                                        <!-- start: Employment detail -->
                                                        <div class="tab-pane @if ($currentStep == 2) show active @endif"
                                                            id="step2">
                                                            <form wire:submit.prevent="submitSocialEconomic">
                                                                <div class="card bg-body mb-2">
                                                                    <div class="card-body">
                                                                        <h6 class="card-title mb-1">Social Economic
                                                                            Information</h6>
                                                                        <p class="text-muted small">It is a long
                                                                            established fact that a reader will be
                                                                            distracted by Avio.</p>

                                                                        <div class="row g-2 mt-3">
                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <input type="text"
                                                                                    class="form-control @error('occupation') is-invalid @enderror"
                                                                                    placeholder="Occupation"
                                                                                    wire:model="occupation" />
                                                                                <label>Occupation/Source of
                                                                                    Income</label>
                                                                                @error('occupation')
                                                                                    <div class="invalid-feedback d-block">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <input type="number"
                                                                                    class="form-control @error('household_size') is-invalid @enderror"
                                                                                    placeholder="household-size"
                                                                                    wire:model="household_size" />
                                                                                <label>Household Size *</label>
                                                                                @error('household_size')
                                                                                    <div class="invalid-feedback d-block">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <select
                                                                                    class="form-select @error('education_level') is-invalid @enderror"
                                                                                    wire:model="education_level">
                                                                                    <option value="" selected>
                                                                                        Select Education Level
                                                                                    </option>
                                                                                    <option value="PhD">PhD</option>
                                                                                    <option value="BSc">BSc</option>
                                                                                    <option value="Primary">Primary
                                                                                    </option>
                                                                                    <option value="Secondary">Secondary
                                                                                    </option>
                                                                                </select>
                                                                                <label>Education Level *</label>
                                                                                @error('education_level')
                                                                                    <div class="invalid-feedback d-block">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <input type="number"
                                                                                    class="form-control @error('income') is-invalid @enderror"
                                                                                    placeholder="Income"
                                                                                    wire:model="income" />
                                                                                <label>Income</label>
                                                                                @error('income')
                                                                                    <div class="invalid-feedback d-block">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <select
                                                                                    class="form-select @error('housing_status') is-invalid @enderror"
                                                                                    wire:model="housing_status">
                                                                                    <option value="" selected>
                                                                                        Select Housing Status
                                                                                    </option>
                                                                                    <option value="Owned">Owned
                                                                                    </option>
                                                                                    <option value="Rented">Rented
                                                                                    </option>
                                                                                </select>
                                                                                <label>Housing Status *</label>
                                                                                @error('housing_status')
                                                                                    <div class="invalid-feedback d-block">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-floating mb-2 col-md-4">
                                                                                <select
                                                                                    class="form-select @error('vulnerabilities') is-invalid @enderror"
                                                                                    wire:model="vulnerabilities">
                                                                                    <option value="" selected>
                                                                                        Select Vulnerabilities
                                                                                    </option>
                                                                                    <option value="Orphan">Orphan
                                                                                    </option>
                                                                                    <option value="Single Parent">
                                                                                        Single Parent</option>
                                                                                </select>
                                                                                <label>Vulnerabilities *</label>
                                                                                @error('vulnerabilities')
                                                                                    <div class="invalid-feedback d-block">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    @endif

                                                    @if ($currentStep == 3)
                                                        <!-- start: select team -->
                                                        <div class="tab-pane @if ($currentStep == 3) show active @endif"
                                                            id="step3">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">
                                                                        Beneficiary Needs & Assistance / Demographics
                                                                    </h6>
                                                                    <p class="text-muted small">
                                                                        If you need more info, please check out
                                                                    </p>

                                                                    <div class="row g-2 mt-3">
                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('type_of_assistance') is-invalid @enderror"
                                                                                wire:model="type_of_assistance">
                                                                                <option value="" selected>Open
                                                                                    this
                                                                                    select menu</option>
                                                                                <option value="Medical">Medical
                                                                                </option>
                                                                                <option value="Educational">Educational
                                                                                </option>
                                                                                <option value="Financial">Financial
                                                                                </option>
                                                                                <option value="Primary">Primary
                                                                                </option>
                                                                            </select>
                                                                            <label>Type of Assistance Required *</label>
                                                                            @error('type_of_assistance')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('previous_assistance') is-invalid @enderror"
                                                                                placeholder="Previous Assistance Received"
                                                                                wire:model="previous_assistance" />
                                                                            <label>Previous Assistance Received (If
                                                                                any)</label>
                                                                            @error('previous_assistance')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <select
                                                                                class="form-select @error('health_status') is-invalid @enderror"
                                                                                wire:model="health_status">
                                                                                <option value="" selected>Open
                                                                                    this
                                                                                    select menu</option>
                                                                                <option value="chronic illness">Chronic
                                                                                    Illness</option>
                                                                                <option value="Health">Health</option>
                                                                                <option value="Primary">Primary
                                                                                </option>
                                                                            </select>
                                                                            <label>Health Status *</label>
                                                                            @error('health_status')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('skills_or_training') is-invalid @enderror"
                                                                                placeholder="Skills or Training Needed"
                                                                                wire:model="skills_or_training" />
                                                                            <label>Skills or Training Needed *</label>
                                                                            @error('skills_or_training')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('geographical_location') is-invalid @enderror"
                                                                                placeholder="Geographical Location"
                                                                                wire:model="geographical_location" />
                                                                            <label>Geographical Location *</label>
                                                                            @error('geographical_location')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('ethnicity_tribe') is-invalid @enderror"
                                                                                placeholder="Ethnicity/Tribe"
                                                                                wire:model="ethnicity_tribe" />
                                                                            <label>Ethnicity/Tribe</label>
                                                                            @error('ethnicity_tribe')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-4">
                                                                            <input type="text"
                                                                                class="form-control @error('religion') is-invalid @enderror"
                                                                                placeholder="Religion"
                                                                                wire:model="religion" />
                                                                            <label>Religion</label>
                                                                            @error('religion')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-floating mb-2 col-md-8">
                                                                            <input type="text"
                                                                                class="form-control @error('referring_organization') is-invalid @enderror"
                                                                                placeholder="Referring Organization"
                                                                                wire:model="referring_organization" />
                                                                            <label>Referring Organization</label>
                                                                            @error('referring_organization')
                                                                                <div class="invalid-feedback d-block">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endif

                                                    @if ($currentStep == 4)
                                                        <!-- start: Upload Files -->
                                                        <div class="tab-pane @if ($currentStep == 4) show active @endif"
                                                            id="step4">
                                                            <div class="card bg-body mb-2">
                                                                <div class="card-body">
                                                                    <h6 class="card-title mb-1">Data Review</h6>
                                                                    <div class="row g-2 mt-3">
                                                                        <div class="card-body border-bottom">
                                                                            <div
                                                                                class="d-flex align-items-md-start align-items-center flex-column flex-md-row">
                                                                                @if ($profile_photo_path)
                                                                                    <img src="{{ $profile_photo_path->temporaryUrl() }}"
                                                                                        alt=""
                                                                                        class="rounded-4"
                                                                                        width="250" height="250">
                                                                                @elseif($savedImage)
                                                                                    <img src="{{ asset('storage/' . $savedImage) }}"
                                                                                        alt=""
                                                                                        class="rounded-4"
                                                                                        width="250" height="250">
                                                                                @endif

                                                                                <div
                                                                                    class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center">
                                                                                    <h4 class="mb-1 fw-light">
                                                                                        {{ $first_name }}
                                                                                        {{ $last_name }}</h4>
                                                                                    <p>{{ $email }}</p>
                                                                                    <span
                                                                                        class="text-muted">{{ $home_address }}</span>
                                                                                    <div
                                                                                        class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                                                        <div
                                                                                            class="py-2 px-3 me-2 mt-2">
                                                                                            <small
                                                                                                class="text-muted">Date
                                                                                                of Birth</small>
                                                                                            <div class="fs-5">
                                                                                                {{ \Carbon\Carbon::parse($date_of_birth)->format('d M, Y') }}
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="py-2 px-3 me-2 mt-2">
                                                                                            <small
                                                                                                class="text-muted">Phone</small>
                                                                                            <div class="fs-5">
                                                                                                {{ $countryCode . $phone_number }}
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="py-2 px-3 me-2 mt-2">
                                                                                            <small
                                                                                                class="text-muted">Marital
                                                                                                Status</small>
                                                                                            <div class="fs-5">
                                                                                                {{ $marital_status }}
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="py-2 px-3 me-2 mt-2">
                                                                                            <small
                                                                                                class="text-muted">Nationality</small>
                                                                                            <div class="fs-5">
                                                                                                {{ $this->getNationalityName($nationality_id) }}
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="py-2 px-3 me-2 mt-2">
                                                                                            <small
                                                                                                class="text-muted">Tribe/Ethnicity</small>
                                                                                            <div class="fs-5">
                                                                                                {{ $ethnicity_tribe }}
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="py-2 px-3 me-2 mt-2">
                                                                                            <small
                                                                                                class="text-muted">Primary
                                                                                                Language</small>
                                                                                            <div class="fs-5">
                                                                                                {{ $this->getLanguageName($language_id) }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div
                                                                                        class="card-body table-responsive p-0">
                                                                                        <table
                                                                                            class="table card-table mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>Disability?</td>
                                                                                                    <td>{{ $disability_status === 'yes' ? 'Yes' : 'No' }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Disability Type
                                                                                                    </td>
                                                                                                    <td>{{ $disability_status === 'yes' ? $type_of_disability : 'N/A' }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Emergency
                                                                                                        Contact</td>
                                                                                                    <td>{{ $full_name }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Emergency Phone
                                                                                                    </td>
                                                                                                    <td>{{ $telephone }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Relationship
                                                                                                    </td>
                                                                                                    <td>{{ $this->getRelationshipName($relationship_id) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Housing Status
                                                                                                    </td>
                                                                                                    <td>{{ $housing_status }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Occupation/Source
                                                                                                        of Income</td>
                                                                                                    <td>{{ $occupation }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Income</td>
                                                                                                    <td>{{ $income }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Household Size
                                                                                                    </td>
                                                                                                    <td>{{ $household_size }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Education Level
                                                                                                    </td>
                                                                                                    <td>{{ $education_level }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Vulnerability
                                                                                                    </td>
                                                                                                    <td>{{ $vulnerabilities }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Assistance
                                                                                                        Required</td>
                                                                                                    <td>{{ $type_of_assistance }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Previous
                                                                                                        Assistance
                                                                                                        Received</td>
                                                                                                    <td>{{ $previous_assistance }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Health Status
                                                                                                    </td>
                                                                                                    <td>{{ $health_status }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Skills/Training
                                                                                                        Needed</td>
                                                                                                    <td>{{ $skills_or_training }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Geographic
                                                                                                        Location</td>
                                                                                                    <td>{{ $geographical_location }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Referring
                                                                                                        Organization
                                                                                                    </td>
                                                                                                    <td>{{ $referring_organization }}
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


                                                        </div>
                                                    @endif

                                                    <div class="text-end">
                                                        @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                                                            <button type="button" class="btn btn-secondary"
                                                                wire:click.prevent="decreaseStep()">
                                                                Prev
                                                            </button>
                                                        @endif

                                                        @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                                                            <button
                                                                class="btn bg-secondary text-light next text-uppercase"
                                                                wire:click.prevent="increaseStep()">
                                                                Next
                                                            </button>
                                                        @endif

                                                        @if ($currentStep == 4)
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

                </div>
            </div>
        </div>
