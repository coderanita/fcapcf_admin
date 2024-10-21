@props(['name', 'index'])
<div class="mt-4 bg-light p-3 rounded" id="employment-{{ $index }}">
  <span class="badge bg-info mb-3">{{ (int) $index + 1 }}</span>

  <div class="row g-2 mt-3">
    <div class="form-floating mb-2 col-md-4">
      <input type="text" class="form-control" wire:model="{{ $name . '.' . $index . '.job_title' }}"
        placeholder="Job title" required />
      <label>Job Title <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.job_title' }}" />

    </div>
    <div class="form-floating mb-2 col-md-4">
      <input type="text" class="form-control" wire:model="{{ $name . '.' . $index . '.dempartment' }}"
        placeholder="department" required />
      <label>Department <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.dempartment' }}" />
    </div>

    <div class="form-floating mb-2 col-md-4">
      <select class="form-select" wire:model="{{ $name . '.' . $index . '.status' }}" required>
        <option selected>
          Open this select menu
        </option>
        <option value="full_time"> Full Time </option>
        <option value="part_time"> Part Time </option>
        <option value="contract"> Contract </option>
      </select>
      <label>Employment Status <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.status' }}" />
    </div>

    <div class="form-floating mb-2 col-md-4">
      <input type="date" class="form-control" wire:model="{{ $name . '.' . $index . '.start_date' }}"
        placeholder="start date" />
      <label>Start Date</label>
      <x-input-error for="{{ $name . '.' . $index . '.start_date' }}" />

    </div>

    <div class="form-floating mb-2 col-md-4">
      <input type="text" class="form-control"
        wire:model="{{ $name . '.' . $index . '.reporting_manager_supervisor' }}" placeholder="reporting manager"
        required />
      <label>Reporting Manager/Supervisor <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.reporting_manager_supervisor' }}" />
    </div>
    <div class="form-floating mb-2 col-md-4">
      <input type="text" class="form-control" wire:model="{{ $name . '.' . $index . '.probation_period' }}"
        placeholder="probation period" required />
      <label>Probation Period (If any) <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.probation_period' }}" />
    </div>

    <div class="form-floating mb-2 col-12">
      <textarea class="form-control" wire:model="{{ $name . '.' . $index . '.work_location' }}" rows="3"
        placeholder="Enter work location"></textarea>
      <label class="form-label">Work Location</label>
      <x-input-error for="{{ $name . '.' . $index . '.work_location' }}" />

    </div>





    <!--end col-->
    @if ($index >= 1)
      <div class="hstack gap-2 justify-content-end">
        <button type="button" class="btn btn-success btn-small"
          wire:click="removeItem('employment',{{ $index }})">Delete</button>
      </div>
    @endif


  </div>

</div>
