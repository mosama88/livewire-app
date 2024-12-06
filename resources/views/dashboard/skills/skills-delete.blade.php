<!-- Modal -->
<div class="modal fade" id="deleteSkillModal" tabindex="-1" aria-hidden="true" style="display: none;" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Delete Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <h4>Are You Sure Delete this Skill ?</h4>
                            <span>Warning ! You Will Lost This Proccess</span>
                        </div>
                    </div>
                    <span wire:mode="name"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
