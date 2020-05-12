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
						<a href="/HowItWorks">How it Works</a>
					</li>

					<li class="menu-item-has-children">
						<a href="index.html#">Explore
							<span class="show indicator">
								<i class="puzzle-icon far fa-angle-down"></i>
							</span>
						</a>

						<ul class="sub-menu">

							<li>
								<a href="/MicroJobs">Xtreme/Micro Jobs</a>
							</li>

							<li>
								<a href="04_job_lists_grid.html">Job lists grid</a>
							</li>

							<li>
								<a href="05_job_details.html">Job details</a>
							</li>

							<li>
								<a href="06_company_profile.html">Company profile</a>
							</li>

							<li>
								<a href="07_company_lists_alphabet.html">Company lists</a>
							</li>

						</ul>
					</li>

					<li class="menu-item-has-children">
						<a href="index.html#">Candidates
							<span class="show indicator">
								<i class="puzzle-icon far fa-angle-down"></i>
							</span>
						</a>
						<ul class="sub-menu">

							<li>
								<a href="08_candidate_lists_row_map.html">Candidate lists</a>
							</li>

							<li>
								<a href="09_candidate_lists_grid.html">Candidate lists grid</a>
							</li>

							<li>
								<a href="10_candidate_details.html">Candidate details</a>
							</li>

							<li>
								<a href="11_submit_resume.html">Submit resume</a>
							</li>

							<li>
								<a href="12_resume_preview.html">Resume preview</a>
							</li>

							<li>
								<a href="13_resume_added.html">Resume added</a>
							</li>

						</ul>
					</li>

					<li class="menu-item-has-children">
						<a href="index.html#">News
							<span class="show indicator">
								<i class="puzzle-icon far fa-angle-down"></i>
							</span>
						</a>
						<ul class="sub-menu">

							<li>
								<a href="15_news_grid.html">News page</a>
							</li>

							<li>
								<a href="16_standard_news_with_sidebar.html">Standard news with sidebar</a>
							</li>

							<li>
								<a href="17_news_details_standard.html">News details standard</a>
							</li>

							<li>
								<a href="18_news_details_gallery.html">News details gallery</a>
							</li>

							<li>
								<a href="19_news_details_with_video.html">News details with video</a>
							</li>

						</ul>
					</li>

					<li class="menu-item-has-mega-menu menu-item-has-children">
						<a href="index.html#">Pages
							<span class="show indicator">
								<i class="puzzle-icon far fa-angle-down"></i>
							</span>
						</a>
						<div class="megamenu">
							<div class="megamenu-row">

								<div class="col3">
									<ul>
										<li class="megamenu-item-info">
											<h6 class="megamenu-item-info-title">Pages</h6>
										</li>
										<li>
											<a href="14_pricing_plan.html"><i class="puzzle-icon fas fa-caret-right"></i>Pricing plans</a>
										</li>
										<li>
											<a href="20_contacts.html"><i class="puzzle-icon fas fa-caret-right"></i>Contacts</a>
										</li>
										<li>
											<a target="_blank" href="21_send_message.html"><i class="puzzle-icon fas fa-caret-right"></i>Send message</a>
										</li>
										<li>
											<a href="23_coming_soon.html"><i class="puzzle-icon fas fa-caret-right"></i>Coming Soon Page</a>
										</li>
										<li>
											<a href="22_404.html"><i class="puzzle-icon fas fa-caret-right"></i>Error 404</a>
										</li>
										<li>
											<a target="_blank" href="41_sign_up.html"><i class="puzzle-icon fas fa-caret-right"></i>Sign Up</a>
										</li>
										<li>
											<a target="_blank" href="40_login.html"><i class="puzzle-icon fas fa-caret-right"></i>Login</a>
										</li>
									</ul>
								</div>

								<div class="col3">
									<ul>
										<li class="megamenu-item-info">
											<h6 class="megamenu-item-info-title">Classic Styles</h6>
										</li>
										<li>
											<a href="33_classic_accordions.html"><i class="puzzle-icon fas fa-caret-right"></i>Accordions</a>
										</li>
										<li>
											<a href="34_classic_button_styles.html"><i class="puzzle-icon fas fa-caret-right"></i>Button Styles</a>
										</li>
										<li>
											<a href="35_classic_forms.html"><i class="puzzle-icon fas fa-caret-right"></i>Forms</a>
										</li>
										<li>
											<a href="36_classic_icon_with_text.html"><i class="puzzle-icon fas fa-caret-right"></i>Icon with Text</a>
										</li>
										<li>
											<a href="38_classic_link_styles.html"><i class="puzzle-icon fas fa-caret-right"></i>Link Styles</a>
										</li>
										<li>
											<a href="37_classic_tab_styles.html"><i class="puzzle-icon fas fa-caret-right"></i>Tab Styles</a>
										</li>
									</ul>
								</div>

								<div class="col3">
									<ul>
										<li class="megamenu-item-info">
											<h6 class="megamenu-item-info-title">Typography</h6>
										</li>
										<li>
											<a href="29_typography_heading_styles.html"><i class="puzzle-icon fas fa-caret-right"></i>Heading Styles</a>
										</li>
										<li>
											<a href="30_typography_highlights.html"><i class="puzzle-icon fas fa-caret-right"></i>Highlights</a>
										</li>
										<li>
											<a href="32_typography_blockquotes.html"><i class="puzzle-icon fas fa-caret-right"></i>Blockquotes</a>
										</li>
										<li>
											<a href="28_typography_columns.html"><i class="puzzle-icon fas fa-caret-right"></i>Columns</a>
										</li>
										<li>
											<a href="31_typography_lists.html"><i class="puzzle-icon fas fa-caret-right"></i>Lists</a>
										</li>
										<li>
											<a href="43_typography-icons.html"><i class="puzzle-icon fas fa-caret-right"></i>Icons</a>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</li>
				</ul>

			</nav>

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