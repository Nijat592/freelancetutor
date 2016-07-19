<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center" id="myModalLabel">sign-in into your account</h4>
			</div>
			<form class="form-group" role="form" method="POST" action="{{ url('/login') }}">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="row gap-20">
						<div class="col-sm-6 col-md-6">
							<button class="btn btn-facebook btn-block mb-5-xs btn-primary">Log-in with Facebook</button>
						</div>
						<div class="col-sm-6 col-md-6">
							<button class="btn btn-google-plus btn-block btn-danger">Log-in with Google+</button>
						</div>
						<div class="col-md-12">
							<div class="login-modal-or">
								<div><span>or</span></div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" placeholder="Min 4 and Max 10 characters" type="text">
							</div>
						</div>
						<div class="col-sm-12 col-md-12">
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" name="password" placeholder="Min 4 and Max 10 characters" type="password">
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="checkbox-block">
								<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox pull-left" value="First Choice" type="checkbox">
								<label class="" for="remember_me_checkbox">Remember me</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="login-box-link-action">
								<a data-toggle="modal" href="#forgotPasswordModal">Forgot password?</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-12">
							<div class="login-box-box-action loginBox">
								<span>No account?</span> <a data-toggle="modal" href="/register">Register</a>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer text-center">
					<button type="submit" class="btn btn-info">Log-in</button>
					<button type="button" data-dismiss="modal" class="btn btn-info btn-inverse">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>