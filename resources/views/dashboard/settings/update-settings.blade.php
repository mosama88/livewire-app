<form wire:submit.prevent='submit'>
    <div class="row">


        @if (session()->has('message'))
            <div class="alert alert-primary" id="my-success-alert" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-fullname">Name</label>
            <input wire:model ='settings.name' type="text" class="form-control" id="basic-default-fullname"
                placeholder="John Doe" />
            @error('settings.name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-company">Address</label>
            <input wire:model ='settings.address' type="text" class="form-control" id="basic-default-company"
                placeholder="ACME Inc." />
            @error('settings.address')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-email">Email</label>
            <div class="input-group input-group-merge">
                <input wire:model ='settings.email' type="text" id="basic-default-email" class="form-control"
                    placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                <span class="input-group-text" id="basic-default-email2">@example.com</span>
            </div>
            <div class="form-text">You can use letters, numbers & periods</div>
            @error('settings.email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-phone">Phone No</label>
            <input wire:model ='settings.phone' type="text" id="basic-default-phone" class="form-control phone-mask"
                placeholder="658 799 8941" />
            @error('settings.phone')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-email">Facebook</label>
            <div class="input-group input-group-merge">
                <input wire:model ='settings.facebook' type="text" id="basic-default-email" class="form-control"
                    placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
            </div>
            @error('settings.facebook')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-email">Instgram</label>
            <div class="input-group input-group-merge">
                <input wire:model ='settings.instgram' type="text" id="basic-default-email" class="form-control"
                    placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
            </div>
            @error('settings.instgram')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-email">Twitter</label>
            <div class="input-group input-group-merge">
                <input wire:model ='settings.twitter' type="text" id="basic-default-email" class="form-control"
                    placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
            </div>
            @error('settings.twitter')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-6">
            <label class="form-label" for="basic-default-email">Linkedin</label>
            <div class="input-group input-group-merge">
                <input wire:model ='settings.linkedin' type="text" id="basic-default-email" class="form-control"
                    placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
            </div>
            @error('settings.linkedin')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <div class="row">
        <button class="col-3 btn btn-primary m-auto d-grid d-flex align-items-center justify-content-center"
            type="submit">
            <div wire:loading.remove>
                Update
            </div>
            <div class="spinner-border text-secondary ms-2" wire:loading wire:target="submit" role="status">
                <span class="visually-hidden">Updating...</span>
            </div>
        </button>
    </div>

</form>
