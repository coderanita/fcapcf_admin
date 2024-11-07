@props(['name', 'index'])
<div class="mt-4 bg-light p-3 rounded" id="work_experience-{{ $index }}">
    <span class="badge bg-info mb-3">{{ (int) $index + 1 }}</span>


    <div class="row g-2 mt-3">
        <div class="form-floating mb-2 col-md-4">
            <select class="form-select" wire:model="{{ $name . '.' . $index . '.highest_qualification' }}" required>
                <option selected>

                </option>
                <option value="phd">PhD</option>
                <option value="msc">MSc</option>
                <option value="bsc">BSc</option>
                <option value="college">College</option>
                <option value="primary">Primary</option>
            </select>
            <label>Highest Qualification <sup class="text-danger">*</sup></label>
            <x-input-error for="{{ $name . '.' . $index . '.highest_qualification' }}" />
        </div>

        <div class="form-floating mb-2 col-md-4">
            <input type="text" class="form-control" wire:model="{{ $name . '.' . $index . '.institution_name' }}"
                placeholder="Name of Institution" required />
            <label>Institution Name <sup class="text-danger">*</sup></label>
            <x-input-error for="{{ $name . '.' . $index . '.institution_name' }}" />
        </div>

        <div class="form-floating mb-2 col-md-4">
            <input type="date" class="form-control" wire:model="{{ $name . '.' . $index . '.graduation_year' }}"
                placeholder="year of graduation" required />
            <label>Graduation Year <sup class="text-danger">*</sup></label>
            <x-input-error for="{{ $name . '.' . $index . '.graduation_year' }}" />
        </div>

        <div class="form-floating mb-2 col-md-12">
            <input type="text" class="form-control" wire:model="{{ $name . '.' . $index . '.Languages_spoken' }}"
                placeholder="Languages spoken" required />
            <label>List Languages Spoken<sup class="text-danger">*</sup></label>
            <x-input-error for="{{ $name . '.' . $index . '.Languages_spoken' }}" />
        </div>
        <div class="form-floating mb-2 col-md-6">
            <input type="text" class="form-control" wire:model="{{ $name . '.' . $index . '.professional_certs' }}"
                placeholder="probation period" required />
            <label>Professional Certifications <sup class="text-danger">*</sup></label>
            <x-input-error for="{{ $name . '.' . $index . '.professional_certs' }}" />
        </div>
    </div>
    @if ($index >= 1)
        <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-success btn-small"
                wire:click="removeItem('education',{{ $index }})">Delete</button>
        </div>
    @endif
</div>
