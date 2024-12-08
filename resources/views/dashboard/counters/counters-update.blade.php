<x-edit-model title="Update Counter">
    <div class="col-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" wire:model="name" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'name'])
    </div>
    <div class="col-4 mb-0">
        <label class="form-label">Count</label>
        <input type="text" wire:model="count" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'count'])
    </div>
    <div class="col-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" wire:model="icon" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'icon'])
    </div>
</x-edit-model>
