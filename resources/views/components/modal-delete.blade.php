{{-- Delete Modal --}}
<div class="modal fade" id="customModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Confirem Delete {{ $this->name }}?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-danger"><i class="bi bi-info-circle-fill text-danger"></i> This will
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
