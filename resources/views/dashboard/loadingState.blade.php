<button class="btn btn-primary" type="submit">
    <div wire:loading.remove>
        {{ $buttonName }}
    </div>
    <div class="spinner-border spinner-border-sm text-secondary ms-2" wire:loading wire:target="submit" role="status">
        <span class="visually-hidden">Updating...</span>
    </div>

</button>
