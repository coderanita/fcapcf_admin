<div>
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
                        <a href="">
                            <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No beneficiaries found.</td>
                </tr>
            @endforelse

        </tbody>
    </table>

    {{-- Delete Modal --}}
    <div class="modal fade" id="delete_beneficiary" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirem Delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> Deleting beneficiary will
                        remove
                        all of
                        information from our database. </h5>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit" id="delete-record" wire:click="confirmDelete">Yes,
                        Delete It!!</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('modalOpenedDelete', event => {
            $('#delete_beneficiary').modal('show');
        })

        window.addEventListener('modalClosedDelete', event => {
            $('#delete_beneficiary').modal('hide');
        })
    </script>
@endpush
