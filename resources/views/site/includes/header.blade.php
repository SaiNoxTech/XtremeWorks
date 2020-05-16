
@if(Request::path() == 'MicroJobs')
<header class="header header--sticky header--dark" id="site-header">
@else 
<header class="header header--absolute header--transparent" id="site-header">
@endif 
	<div class="container">
		<div class="header-content-wrapper">
			<a href="index.html" class="site-logo">
				<img class="puzzle-icon" src="../../assets/img/logo/xtremeworkers-logo-white.png" alt="logo" width="170">
			</a>

			<nav id="primary-menu" class="primary-menu">

				<!-- menu-icon-wrapper -->

				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title">Menu</span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper">
						<svg width="1000px" height="1000px">
							<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
							<path id="pathE" d="M 300 500 L 700 500"></path>
							<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
						</svg>
					</span>
				</a>

				<ul class="primary-menu-menu">
					<li>
						<a href="/">Home</a>
					</li>

					<li class="">
						<a href="/HowItWorks">About Us</a>
					</li>

					<li class="">
						<a href="/HowItWorks">How it Works</a>
					</li>

					<li class="menu-item-has-children">
						<a href="/MicroJobs">Explore
							<span class="show indicator">
								<i class="puzzle-icon far fa-angle-down"></i>
							</span>
						</a>

						<ul class="sub-menu">

							<li>
								<a href="/MicroJobs">Xtreme/Micro Jobs</a>
							</li>

						</ul>
					</li>

					<li class="menu-item-has-children">
						<a href="/user/dashboard">News
							<span class="show indicator">
								<i class="puzzle-icon far fa-angle-down"></i>
							</span>
						</a>

						<ul class="sub-menu">

							<li>
								<a href="/MicroJobs">Latest News</a>
							</li>
							<li>
								<a href="/MicroJobs">Submit Your Own Article</a>
							</li>

						</ul>
					</li>
					@if(Auth::user())
					<li class="menu-item-has-children">
						<a href="/user/dashboard">Dashboard
							<span class="show indicator">
								<i class="puzzle-icon far fa-angle-down"></i>
							</span>
						</a>

						<ul class="sub-menu">

							<li>
								<a href="/MicroJobs">Post Micro Jobs</a>
							</li>
							<li>
								<a href="/MicroJobs">Check Job Status</a>
							</li>
							<li>
								<a href="/user/wallet/add">Add Wallet Balance</a>
							</li>
							<li>
								<a href="/user/wallet/Withdrawl">Submit Withdrawl Request</a>
							</li>
							<li>
								<a href="/user/wallet/transactions">Transaction History</a>
							</li>

						</ul>
					</li>
					@endif
				</ul>

			</nav>

			@if(Auth::user())
			<nav class="login-menu">
				<ul>
					<li>
						<a href>{{Auth::user()->username}}</a>
					</li>
					
					<li>
						<a href="">Wallet: <span style="color:#64dfac;">${{$wallet[0]->balance}}</span></a>
					</li>
					<li>
						<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">Logout
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
					<!--li>
						<a type="button" style="color:black; " href="" class="crumina-button button--primary button--s button--hover-primary">Dashboard</a>
					</li-->
				</ul>
			</nav>
			@else
			<nav class="login-menu">
				<ul>
					<li>
						<a href="index.html#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
					</li>
					<li>
						<button type="button" class="crumina-button button--primary button--s button--hover-primary" data-toggle="modal" data-target="#loginModal">Login</button>
					</li>
				</ul>
			</nav>
			@endif

			<select class="puzzle--select language-switcher" data-minimum-results-for-search="Infinity" data-dropdown-css-class="language-switcher-dropdown">
				<option value="Ua" data-href="">Ua</option>
				<option value="En" data-href="">En</option>
				<option value="Fr" data-href="">Fr</option>
				<option value="De" data-href="">De</option>
				<option value="It" data-href="">It</option>
			</select>

		</div>
	</div>
</header>

<!-- ... end Header -->