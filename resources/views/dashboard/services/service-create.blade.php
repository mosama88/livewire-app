<x-create-model title="Create New Service">

    <div class="col-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" wire:model="name" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'name'])
    </div>
    <div class="col-4 mb-0">
        <label class="form-label">Description</label>
        <input type="text" wire:model="description" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'description'])
    </div>
        <div class="col-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" wire:model="icon" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'icon'])
    </div>

</x-create-model>
