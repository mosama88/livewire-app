<x-create-model title="Create New Counter">

    <div class="col mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" wire:model="name" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'name'])
    </div>
    <div class="col mb-0">
        <label class="form-label">Count</label>
        <input type="text" wire:model="count" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'count'])
    </div>

</x-create-model>
