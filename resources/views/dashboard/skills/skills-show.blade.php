{{--
 wire:ignore.self
 For Don't Close Modal after Press Submit and investigate Validations
 --}}
<div class="modal fade" id="showSkillModal" tabindex="-1" style="display: none;" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Show Data Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailBasic" class="form-label">Name</label>
                            <input disabled type="text" wire:model="name" class="form-control">
                        </div>
                        <div class="col mb-0">
                            <label class="form-label">Progress</label>
                            <input disabled type="text" wire:model="progress" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
        </div>
    </div>
</div>
