{{--
 wire:ignore.self
 For Don't Close Modal after Press Submit and investigate Validations
 --}}
<x-show-model title="Show Skill">

    <div class="col mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input disabled type="text" wire:model="name" class="form-control">
    </div>
    <div class="col mb-0">
        <label class="form-label">Progress</label>
        <input disabled type="text" wire:model="progress" class="form-control">
    </div>
</x-show-model>

