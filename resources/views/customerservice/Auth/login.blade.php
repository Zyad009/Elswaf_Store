  @extends('customerservice.auth.partials.app')
  @section('delivery-title', 'Login')
  @section('login-customer_sevice')
  <div class="card">
            <div class="card-body">
              <!-- Logo -->
              @include( 'saleofficer.auth.partials.logo')

              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Delivery Manegemant Orders! 👋</h4>
              <form class="mb-3" action="{{route('customer-service.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter your email" autofocus />
                  <x-message.error name='email'></x-message.error>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <x-message.error name='password'></x-message.error>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>
          
            </div>
    </div>
  @endsection