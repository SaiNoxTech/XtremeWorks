<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>XtremeWorkers</title>
	@include('site.includes.css')
</head>

<body class="crumina-grid">


<!-- Preloader -->


<!--<div id="hellopreloader">
	<div class="preloader">
		<svg width="135" height="135" fill="#fff">
			<path d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z">
				<animateTransform attributeName="transform" dur="2.5s" from="0 67 67" repeatCount="indefinite" to="-360 67 67" type="rotate" />
			</path>
			<path d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z">
				<animateTransform attributeName="transform" dur="8s" from="0 67 67" repeatCount="indefinite" to="360 67 67" type="rotate" />
			</path>
		</svg>
	</div>
</div>-->

<!-- ... end Preloader -->


<!-- Header -->

@if(Request::path() == 'MicroJobs')
<header class="header header--sticky header--dark" id="site-header">
@else 
<header class="header header--absolute header--transparent" id="site-header">
@endif 
	<div class="container">
		<div class="header-content-wrapper">
			<a href="index.html" class="site-logo">
				<img class="puzzle-icon" src="../../assets/img/svg/01_logo_white.svg" alt="logo" width="120">
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
								<a href="/MicroJobs">Add Wallet Balance</a>
							</li>
							<li>
								<a href="/MicroJobs">Submit Withdrawl Request</a>
							</li>
							<li>
								<a href="/MicroJobs">Transaction History</a>
							</li>

						</ul>
					</li>
					@endif

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
				</ul>

			</nav>

			@if(Auth::user())
			<nav class="login-menu">
				<ul>
					<li>
						<a href>{{Auth::user()->username}}</a>
					</li>
					
					<li>
						<a href="">Wallet: <span style="color:#64dfac;">120$</span></a>
					</li>
					<li>
						<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();"><img class="puzzle-icon" src="../../assets/img/svg/10_freelancer_white_tab.svg" width="7"> Logout
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