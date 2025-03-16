<button class="btn btn-primary d-grid w-100" type="submit">
  <span wire:loading.remove wire:target='submit'>{{$name}}</span>
  <div class="text-center" wire:loading wire:target='submit'>
    <div class="spinner-border spinner-border-sm text-wight" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
</button>