@extends("front.layouts.app")
@section("content.front")

<main class="main">
  <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('{{asset("front/assets2")}}/images/backgrounds/login-bg.jpg')">
    <div class="container">
      <div class="form-box">
        <div class="form-tab">
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="reset-password-tab" data-toggle="tab" href="#reset-password" role="tab"
                aria-controls="reset-password" aria-selected="true">Reset Password</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="reset-password" role="tabpanel"
              aria-labelledby="reset-password-tab">
              <form method="POST" action="{{ route('forgot.password.store.password') }}" novalidate>
                @csrf
                <x-success></x-success>
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                  <label for="email">Email address <span class="text-danger">*</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                  <x-message.error name="email"></x-message.error>
                </div>
                
                <div class="form-group">
                  <label for="email">New Password <span class="text-danger">*</label>
                    <input type="password" class="form-control" name="password">
                    <x-message.error name="password"></x-message.error>
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Confirm Password <span class="text-danger">*</label>
                      <input type="password" class="form-control" name="password_confirmation">
                </div>

                <div class="form-footer">
                  <button type="submit" class="btn btn-outline-success">
                    <span>Reset Password</span>
                    <i class="icon-long-arrow-right"></i>
                  </button>
                </div>
              </form>

              {{-- <div class="form-choice text-center mt-3">
                <p class="text-muted">Remembered your password? <a href="/login">Sign In</a></p>
              </div> --}}

            </div> <!-- /.tab-pane -->
          </div> <!-- /.tab-content -->
        </div> <!-- /.form-tab -->
      </div> <!-- /.form-box -->
    </div> <!-- /.container -->
  </div> <!-- /.login-page -->
</main>

@endsection