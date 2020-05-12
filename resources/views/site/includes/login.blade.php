<div class="modal fade window-popup" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <form method="POST" class="form-login" action="{{ route('login') }}">
                 @csrf
					<h2>My Account</h2>
					<div class="mb-4">For fast login use your social account.</div>
					<button type="button" class="crumina-button button--blue-dark button--l button--with-icon button--icon-left w-100 mb-2">
						<i class="puzzle-icon fab fa-facebook-square"></i>Login with the Facebook
					</button>
					<button type="button" class="crumina-button button--blue button--l button--with-icon button--icon-left w-100 mb-4">
						<i class="puzzle-icon fab fa-twitter"></i>Login with the Twitter
					</button>
					<label for="name">Email Address *</label>
                    <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
					<div class="d-flex align-items-center justify-content-between mb-3">
						<label class="mb-0" for="password">Password *</label>
						<a href="index.html#">Lost your password?</a>
					</div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<div class="checkbox checkbox--transparent mt-2 mb-4">
						<label>
							<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<span class="checkbox-material"><span class="check"></span></span>
							Remember Me
						</label>
					</div>
					<button type="submit" class="crumina-button button--green button--l w-100">Log In</button>
				</form>
			</div>
		</div>
	</div>
</div>