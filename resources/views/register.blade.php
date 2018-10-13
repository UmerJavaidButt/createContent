@extends('layouts.common')

@section('title')
Signin | Create Contest
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/register/custom.css') }}">
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

							<!-- Register -->
							<div class="popup-tab-content" id="register">
								
								<!-- Welcome Text -->
								<div class="welcome-text">
									<h3>Let's create your account!</h3>
								</div>

								<!-- Account Type -->
								<div class="account-type">
									<div>
										<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
										<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Contestant/Designer</label>
									</div>

									<div>
										<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
										<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Contestor</label>
									</div>
								</div>
									
								<!-- Form -->
								<form method="post" id="register-account-form" action="{{ route('register') }}">
									@csrf

									<div class="input-with-icon-left">
										<i class="icon-material-baseline-mail-outline"></i>
										<input type="text" class="input-text with-border form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="Name" required/>

										@if ($errors->has('name'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>

									<div class="input-with-icon-left">
										<i class="icon-material-baseline-mail-outline"></i>
										<input type="text" class="input-text with-border form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Email Address" required/>

										@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>

									<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
										<i class="icon-material-outline-lock"></i>
										<input type="password" class="input-text with-border form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password" required/>

										@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>

									<div class="input-with-icon-left">
										<i class="icon-material-outline-lock"></i>
										<input type="password" class="input-text with-border" name="password_confirmation" id="password-confirm" placeholder="Repeat Password" required/>
									</div>
								</form>
								
								<!-- Button -->
								<button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>

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
