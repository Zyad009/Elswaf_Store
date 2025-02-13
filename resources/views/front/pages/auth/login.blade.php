@extends("front.layouts.app")
@section("content.front")
    
          <main class="main">

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('{{asset("front/assets2")}}/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Sign In</a>
							    </li>
							    <li class="nav-item">
							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
							    </li>
							</ul>
							<div class="tab-content">

                {{-- Login --}}


							    <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
							    	<form action="{{route("login.store")}}" method="POST">
                        <x-error></x-error>
                        @csrf
							    		<div class="form-group">
							    			<label for="singin-email-2"> Email *</label>
							    			<input type="text" class="form-control" name="email" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="singin-password-2">Password *</label>
							    			<input type="password" class="form-control"  name="password" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2">
			                					<span>LOG IN</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

                            </div><!-- End .form-footer -->
                          </form>
                          {{-- التسجيل ب جوجل او الفيس --}}
							    	{{-- <div class="form-choice">
								    	<p class="text-center">or sign in with</p>
								    	<div class="row">
								    		<div class="col-sm-6">
								    			<a href="#" class="btn btn-login btn-g">
								    				<i class="icon-google"></i>
								    				Login With Google
								    			</a>
								    		</div><!-- End .col-6 -->
								    		<div class="col-sm-6">
								    			<a href="#" class="btn btn-login btn-f">
								    				<i class="icon-facebook-f"></i>
								    				Login With Facebook
								    			</a>
								    		</div><!-- End .col-6 -->
								    	</div><!-- End .row -->
							    	</div><!-- End .form-choice --> --}}
                    <div class="text-center">
                      <p>
                        <h5>
                          Shopping Now ...
                        </h5>
                      </p>
                    </div>
							    </div><!-- .End .tab-pane -->


                  {{-- Register --}}



							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    	<form action="#" method="POST">
                        <x-error></x-error>
                        @csrf
							    		<div class="form-group">
							    			<label for="register-email-2">Email *</label>
							    			<input type="email" class="form-control"  name="email" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="register-email-2">Phone *</label>
							    			<input type="email" class="form-control"  name="phone" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="register-email-2">Address *</label>
							    			<input type="email" class="form-control"  name="address" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="register-email-2">Password *</label>
							    			<input type="email" class="form-control"  name="password" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="register-password-2">Password *</label>
							    			<input type="password" class="form-control" name="password_confirmation" required>
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
{{-- بالفيس اوجوجل --}}
							    	{{-- <div class="form-choice">
								    	<p class="text-center">or sign in with</p>
								    	<div class="row">
								    		<div class="col-sm-6">
								    			<a href="#" class="btn btn-login btn-g">
								    				<i class="icon-google"></i>
								    				Login With Google
								    			</a>
								    		</div><!-- End .col-6 -->
								    		<div class="col-sm-6">
								    			<a href="#" class="btn btn-login  btn-f">
								    				<i class="icon-facebook-f"></i>
								    				Login With Facebook
								    			</a>
								    		</div><!-- End .col-6 -->
								    	</div><!-- End .row -->
							    	</div><!-- End .form-choice --> --}}

                    <div class="text-center">
                      <p>
                        <h5>
                          <i>Welcome In Your Store...</i>
                        </h5>
                      </p>
                    </div>
							    </div><!-- .End .tab-pane -->
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

@endsection