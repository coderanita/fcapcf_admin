<div>
    <x-breadcrumb title="" sub_title="Announcements">

    </x-breadcrumb>

    <div class="modal fade" id="CreateAnnouncement" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body custom_scroll p-lg-5">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Create Announcement</h4>
                    <p class="text-muted">Announcements are a way to communicate to a group. Complete the form below
                        announcement</p>
                    <div class="row g-2 mt-3">
                        <form wire:submit.prevent="save">
                            <div class="col-md-12">
                                <label class="form-label">Announcement To</label>
                                <select wire:model="to" id=""
                                    class="form-control @error('to') is-invalid @enderror">
                                    <option value="" selected></option>
                                    <option value="All Admins">All Admins</option>
                                    <option value="All Volunteers">All Volunteers</option>
                                    <option value="All Beneficiaries">All Beneficiaries</option>
                                </select>
                                @error('to')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Announcement Title*</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Campaigns Title" wire:model="title">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description*</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="3" wire:model="description"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Date*</label>
                                <input class="form-control @error('date') is-invalid @enderror" type="date"
                                    wire:model="date">
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Time*</label>
                                <input class="form-control @error('time') is-invalid @enderror" type="time"
                                    wire:model="time">
                                @error('time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-lg btn-secondary text-uppercase" type="button"
                                    data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-lg btn-primary text-uppercase" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('modalClosed', event => {
        $('#CreateAnnouncement').modal('hide');
    })

    window.addEventListener('modalOpened', event => {
        $('#CreateAnnouncement').modal('show');
    })
</script>
