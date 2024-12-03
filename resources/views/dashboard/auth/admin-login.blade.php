{{-- Start Form --}}

<form class="mb-3" wire:submit.prevent='submit'>

    {{-- Email Input --}}

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input wire:model="email" type="text" class="form-control" placeholder="Enter your email" autofocus />
        @error('email')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    {{-- Password Input --}}
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input wire:model="password" type="password" class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('password')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    {{-- Remember Me Input --}}
    <div class="mb-3">
        <div class="form-check">
            <input wire:model="remember" class="form-check-input" type="checkbox" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100 d-flex align-items-center justify-content-center" type="submit">
            <div wire:loading.remove>
                <span>Login</span>
            </div>
            <div class="spinner-border text-secondary ms-2" wire:loading wire:target="submit" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </button>
    </div>

</form>
{{-- End Form --}}
