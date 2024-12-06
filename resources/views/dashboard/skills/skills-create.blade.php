<div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Add New Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailBasic" class="form-label">Name</label>
                        <input type="text" wire:model="name" class="form-control">
                    </div>
                    <div class="col mb-0">
                        <label class="form-label">Progress</label>
                        <input type="text" wire:model="progress" class="form-control">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" value="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
