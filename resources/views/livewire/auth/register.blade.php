<form wire:submit.prevent='submit' novalidate>
    {{-- <x-error></x-error> --}}

    <div class="form-group">
        <label for="register-email-2">Name *</label>
        <input type="email" class="form-control" wire:model.blur='name' required>
        <x-message.error name="name"></x-message.error>
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="register-email-2">Email *</label>
        <input type="email" class="form-control" wire:model.blur='email' required>
        <x-message.error name="email"></x-message.error>
    </div><!-- End .form-group -->
    
    <div class="form-group">
        <label for="register-email-2">Phone *</label>
        <input type="email" class="form-control" wire:model.blur='phone' required>
        <x-message.error name="phone"></x-message.error>
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="register-email-2">Address *</label>
        <input type="email" class="form-control" wire:model.blur='address' required>
        <x-message.error name="address"></x-message.error>
    </div><!-- End .form-group -->
    
    <div class="form-group">
        <label for="register-email-2">Password *</label>
        <input type="password" class="form-control" wire:model.blur='password' required>
        <x-message.error name="password"></x-message.error>
    </div><!-- End .form-group -->
    
    <div class="form-group">
        <label for="register-password-2">Confirm Password *</label>
        <input type="password" class="form-control" wire:model.blur='password_confirmation' required>
    </div><!-- End .form-group -->

    <div class="form-footer">
        <button type="submit" class="btn btn-outline-primary-2">
            <span>SIGN UP</span>
            <i class="icon-long-arrow-right"></i>
        </button>

        <div class="custom-control custom-checkbox">

        </div><!-- End .custom-checkbox -->
    </div><!-- End .form-footer -->
</form>