<div class="modal fade window-popup" id="signupModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-login" method="POST" action="{{ route('register') }}">
					@csrf
					<h2 class="mb-4">Register</h2>

					<label for="first_name">User Name *</label>
					<input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
								@error('username')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
								@enderror

					<label for="last_name">Full Name *</label>
					<input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
								@error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
								
					<label for="password1">Email Id *</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror

					<label for="password1">Password *</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
					<label for="password1">Confirm Password *</label>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					
					<button type="submit" class="crumina-button button--green button--l w-100 my-3">Create an Account</button>
					<button type="button" class="crumina-button button--white button--l w-100" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Log In</button>
				</form>
			</div>
		</div>
	</div>
</div>