<x-edit-model title="Update Service">
    <div class="col-12 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text" wire:model="name" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'name'])
    </div>
    <div class="col-12 mb-0">
        <label class="form-label">Link</label>
        <input type="text" wire:model="link" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'link'])
    </div>

    <div class="col-12 mb-0">
        <label class="form-label">Description</label>
        <input type="text" wire:model="description" class="form-control">
        @include('dashboard.errorValidation', ['property' => 'description'])
    </div>
    <div class="col-12 mb-0">
        <label for="defaultSelect" class="form-label">Category</label>
        <select id="defaultSelect" wire:model="category_id" class="form-select">
            <option>select</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}" wire:key="category-{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        @include('dashboard.errorValidation', ['property' => 'category_id'])
    </div>

    <div class="col-12 mb-0">
        <label for="formFileMultiple" class="form-label">Image</label>
        <input class="form-control" wire:model="image" type="file" id="formFileMultiple">
        @include('dashboard.errorValidation', ['property' => 'image'])
    </div>
</x-edit-model>
