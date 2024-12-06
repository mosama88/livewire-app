{{--
 wire:ignore.self
 For Don't Close Modal after Press Submit and investigate Validations
 --}}
<div class="modal fade" id="createSkillModal" tabindex="-1" style="display: none;" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit.prevent = 'submit'>
                <div class="modal-body">
                    <div class="row g-2">

                        {{ $slot }}

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    @include('dashboard.loadingState', ['buttonName' => 'Create'])

                </div>
            </form>
        </div>
    </div>
</div>
