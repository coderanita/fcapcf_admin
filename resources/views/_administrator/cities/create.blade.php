<div>
    <x-breadcrumb title="Cities" sub_title="Cities">
        <x-slot name="page_action">
            <div class="page-action">
                <a wire:click='create'>
                    <button class="btn d-none d-sm-inline-flex rounded-pill" type="button">
                        <span class="me-1 d-none d-lg-inline-block">Create New</span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0C7.23206 0 7.45462 0.0921874 7.61872 0.256282C7.78281 0.420376 7.875 0.642936 7.875 0.875V6.125H13.125C13.3571 6.125 13.5796 6.21719 13.7437 6.38128C13.9078 6.54538 14 6.76794 14 7C14 7.23206 13.9078 7.45462 13.7437 7.61872C13.5796 7.78281 13.3571 7.875 13.125 7.875H7.875V13.125C7.875 13.3571 7.78281 13.5796 7.61872 13.7437C7.45462 13.9078 7.23206 14 7 14C6.76794 14 6.54538 13.9078 6.38128 13.7437C6.21719 13.5796 6.125 13.3571 6.125 13.125V7.875H0.875C0.642936 7.875 0.420376 7.78281 0.256282 7.61872C0.0921874 7.45462 0 7.23206 0 7C0 6.76794 0.0921874 6.54538 0.256282 6.38128C0.420376 6.21719 0.642936 6.125 0.875 6.125H6.125V0.875C6.125 0.642936 6.21719 0.420376 6.38128 0.256282C6.54538 0.0921874 6.76794 0 7 0V0Z"
                                fill="white" />
                        </svg>
                    </button>
                </a>

            </div>
        </x-slot>

    </x-breadcrumb>

    <div class="modal fade" id="project_city" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
            <div class="modal-content" style="padding: 35px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Add New City</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="row g-3" style="margin-top: 60px" wire:submit.prevent="save">

                        <div class="col-md-12">
                            <label class="form-label">State</label>
                            <select class="form-select" wire:model.live='selectedState'>
                                <option selected value="">Choose...</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ ucwords($state->name) }}
                                    </option>
                                @endforeach

                            </select>
                            <x-input-error for="selectedState" />
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">City Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12" style="margin-top: 45px;">
                            <button type="submit" class="btn btn-primary">Add City</button>
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        window.addEventListener('modalClosedCity', event => {
            $('#project_city').modal('hide');
        })

        window.addEventListener('modalOpenedCity', event => {
            $('#project_city').modal('show');
        })
    </script>
@endpush
