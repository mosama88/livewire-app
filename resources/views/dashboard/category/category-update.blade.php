<x-edit-model title="Update Counter">
    <div class="col-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" wire:model="name" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'name'])
    </div>
</x-edit-model>
