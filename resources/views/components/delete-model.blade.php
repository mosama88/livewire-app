<!-- Modal -->
<div class="modal fade" id="deleteSkillModal" tabindex="-1" aria-hidden="true" style="display: none;" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">
                    <div class="row">
                        
                        <div class="mb-4 text-center">
                            <i class="fa-solid fa-triangle-exclamation fa-2xl" style="color: #c02150;"></i>
                            Warning ! You Will Lost This Proccess
                        </div>
                        <div class="col mb-1">
                            <h4>Are You Sure Delete this Proccess ?</h4>
                        </div>
                    </div>

                    <strong>{{ $slot }}</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    @include('dashboard.loadingState', ['buttonName' => 'Delete'])
                </div>
            </form>
        </div>
    </div>
</div>
