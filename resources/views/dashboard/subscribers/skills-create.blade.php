<x-create-model title="Create Skills">

    <div class="col mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" wire:model="name" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'name'])
    </div>
    <div class="col mb-0">
        <label class="form-label">Progress</label>
        <input type="text" wire:model="progress" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'progress'])
    </div>

</x-create-model>
