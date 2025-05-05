  @extends('saleofficer.auth.partials.app')
  @section('login-sale_officer')
  <div class="card">
            <div class="card-body">
              <!-- Logo -->
              @include( 'saleofficer.auth.partials.logo')

              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Pick-up Manegemant Orders! 👋</h4>
              <form class="mb-3" action="{{route('sale-officer.store')}}" method="POST">
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