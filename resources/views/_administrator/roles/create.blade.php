<div>
    <x-breadcrumb title="Capacity for which users will operate" sub_title="User Roles">
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
    <x-custom-modal isOpenModal="{{ $isOpenModal }}" title="New User Role" id="createRole" submit="save">
        <x-slot name="body">
            <div class="col-md-12">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" wire:model.live='name' placeholder="HR">
                <x-input-error for="name" />
            </div>


            <div class="col-md-12">
                <label class="form-label">Access Level</label>
                <select class="form-select" wire:model.live='access_level'>
                    <option selected></option>
                    @foreach (getAccessLevels() as $level)
                        <option value="{{ $level }}">{{ ucwords($level) }}</option>
                    @endforeach

                </select>
                <x-input-error for="access_level" />
            </div>

            <div class="col-md-12">
                <label class="form-label">Select Permission(s)</label>
                @foreach ($permissions as $permission)
                    <div class="col-12 fs-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"
                                wire:model="permission.{{ $permission->code }}" id="{{ $permission->code }}"
                                {{ isset($permission[$permission->code]) && $permission[$permission->code] ? 'checked' : '' }}>
                            <label class="form-check-label"
                                for="{{ $permission->code }}">{{ ucfirst($permission->name) }}</label>
                        </div>
                    </div>
                @endforeach

                <x-input-error for="permission" />
            </div>

            <div class="col-md-12">
                <label class="form-label">Description</label>
                <textarea class="form-control" wire:model.live='desc'></textarea>
                <x-input-error for="desc" />
            </div>

        </x-slot>
        <x-slot name='footer'>

            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-dark" wire:click="closeModal()">Cancel</button>

        </x-slot>



    </x-custom-modal>
</div>
