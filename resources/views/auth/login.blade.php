@extends('layouts.common')

@section('title')
Signin | Create Contest
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/login/custom.css') }}">
@endsection

@section('content')
<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner">
	<div class="container">
		
		<!-- Login -->
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div  class="dialog-with-tabs card">

					<!--Tabs -->
					<div class="sign-in-form">
						<div class="popup-tabs-container">

							<!-- Login -->
							<div class="popup-tab-content" id="login">
								
								<!-- Welcome Text -->
								<div class="welcome-text">
									<h3>We're glad to see you again!</h3>
									<span>Don't have an account? <a href="{{url('signup')}}">Sign Up!</a></span>
								</div>
									
								<!-- Form -->
								<form method="post" id="login-form" action="{{ route('login') }}">
								@csrf
									<div class="input-with-icon-left">
										<i class="icon-material-baseline-mail-outline"></i>
										<input type="text" class="input-text with-border form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="emailaddress" placeholder="Email Address" value="{{ old('email') }}" required autofocus/>

										@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>

									<div class="input-with-icon-left">
										<i class="icon-material-outline-lock"></i>
										<input type="password" class="input-text with-border form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password" required/>

										@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
									
									<a class="btn btn-link" href="{{ route('password.request') }}">
										{{ __('Forgot Your Password?') }}
									</a>
								</form>
								
								<!-- Button -->
								<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
								
								<!-- Social Login -->
								<!-- <div class="social-login-separator"><span>or</span></div>
								<div class="social-login-buttons">
									<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
									<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
								</div> -->

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login / End-->
@endsection