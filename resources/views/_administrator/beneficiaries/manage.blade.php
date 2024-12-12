<div>

    <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 d-flex align-items-center">
            {{-- <label class="me-2 mb-0">Show</label>
            <select class=" form-select-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span class="ms-2">entries</span> --}}
        </div>
        <div class="col-sm-12 col-md-6 d-flex justify-content-end">
            <div class="d-flex align-items-center">
                <label class="me-2 mb-0">Search:</label>
                <input type="search" class="form-control form-control-sm" wire:model.live="search">
            </div>
        </div>
    </div>

    <table class="myDataTable table table-hover mb-0">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Age</th>
                <th>Assist Given</th>
                <th>Contact</th>
                <th>Marital Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($beneficiaries as $index => $beneficiary)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $beneficiary->first_name }} {{ $beneficiary->last_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($beneficiary->date_of_birth)->age }} Years</td> <!-- Calculate age -->
                    <td>{{ $beneficiary->assistance->type_of_assistance }}</td>
                    <td>{{ $beneficiary->country_code . $beneficiary->phone_number }}</td>
                    <td>{{ $beneficiary->marital_status }}</td>
                    <td>
                        <a href="{{ route('administrator.beneficiaries.edit', $beneficiary->id) }}">
                            <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Update"><i class="fa fa-pencil"></i></button>
                        </a>
                        <button type="button" class="btn btn-link btn-sm"
                            wire:click="deleteBeneficiary({{ $beneficiary->id }})" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No beneficiaries found.</td>
                </tr>
            @endforelse

        </tbody>
    </table>

    {{-- Modal Delete --}}
    <x-modal-delete></x-modal-delete>
    {{-- Modal Delete --}}
</div>

<script src="{{ asset('js/theme.js') }}"></script>
<!-- Plugin Js -->
@push('scripts')
@endpush
