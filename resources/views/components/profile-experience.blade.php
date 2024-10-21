@props(['name', 'index'])
<div class="mt-4 bg-light p-3 rounded" id="work_experience-{{ $index }}">
  <span class="badge bg-info mb-3">{{ (int) $index + 1 }}</span>
  <div class="row g-2 mt-3">
    <div class="form-floating col-md-12 mb-3">
      <input required type="text" wire:model="{{ $name . '.' . $index . '.title' }}" class="form-control" id="job_title"
        placeholder="Current Job title">
      <label>Job Title <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.title' }}" />
    </div>


    <div class="form-floating  col-md-6">
      <input required type="text" class="form-control" id="previous_employer" placeholder="Previous Employer"
        wire:model="{{ $name . '.' . $index . '.previous_employer' }}">
      <label>Previous Employer <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.previous_employer' }}" />
    </div>

    <!--end col-->
    <div class="col-md-6 mb-3">

      <div class="row">
        <div class="form-floating col">
          <select required wire:model="{{ $name . '.' . $index . '.from_year' }}" class="form-control">
            <option value="">Select</option>
            @for ($year = date('Y', strtotime('-30 year', time())); $year <= date('Y'); $year++)
              <option value="{{ $year }}">{{ $year }}</option>
            @endfor
          </select>
          <label>From</label>
          <x-input-error for="{{ $name . '.' . $index . '.from_year' }}" />
        </div>
        <!--end col-->
        <div class="col text-center">
          <p>Experience Years <sup class="text-danger">*</sup></p>
        </div>
        <!--end col-->
        <div class="form-floating col">
          <select required wire:model="{{ $name . '.' . $index . '.to_year' }}" class="form-control">
            <option value="">Select</option>
            @for ($year = date('Y'); $year >= date('Y', strtotime('-70 year', time())); $year--)
              <option value="{{ $year }}" @selected($year == date('Y'))>{{ $year }}</option>
            @endfor
          </select>
          <label>To</label>
          <x-input-error for="{{ $name . '.' . $index . '.to_year' }}" />
        </div>

      </div>
    </div>


    <div class="form-floating  col-md-12">
      <textarea required wire:model="{{ $name . '.' . $index . '.leaving_reason' }}" class="form-control" id="leaving_reason"
        rows="3" placeholder="State reason for leaving"></textarea>
      <label>State reason for leaving <sup class="text-danger">*</sup></label>
      <x-input-error for="{{ $name . '.' . $index . '.leaving_reason' }}" />

    </div>
  </div>
  <!--end col-->
  @if ($index >= 1)
    <div class="hstack gap-2 justify-content-end">
      <button type="button" class="btn btn-success btn-small"
        wire:click="removeItem('work_experience',{{ $index }})">Delete</button>
    </div>
  @endif
</div>
