@extends('site.layouts.main')
@section('content')
<div class="main-content-wrapper">

	<section>
		<div class="crumina-module crumina-map crumina-map--700" id="map-employer">
			<div class="block-location-info">
				<div class="h1">We have 69.368 job offers for you!</div>
			</div>
		</div>
	</section>

	<section>
		<div class="tabs tabs--border-primary negative-margin-top-115">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">

							<li role="presentation" class="nav-item active">
								<a class="nav-link active h2 tabs-scroll" id="home-tab" data-toggle="tab" href="03_job_lists_row_map.html#home" role="tab" aria-controls="home" aria-selected="true">Find your dream job</a>
							</li>

						</ul>
					</div>
				</div>
			</div>

			<div class="tab-content">

				<div class="container">
					<div class="row pb60">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<form class="form--search">

									<div class="row">
										<div class="col-md-4 col-sm-6 col-xs-12 mb-3 mb-md-0">
											<input name="name" placeholder="Your Full Name" type="text">
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 mb-3 mb-md-0">
											<select id="select1" class="puzzle--select" data-minimum-results-for-search="Infinity">
												<option data-display="All Specialisms">All Specialisms</option>
												<option value="1">Freelance</option>
												<option value="2">Full Time</option>
												<option value="3">Intership</option>
												<option value="4">Part Time</option>
												<option value="5">Temporary</option>
											</select>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 mb-3 mb-md-0">
											<select id="select2" class="puzzle--select" data-minimum-results-for-search="Infinity">
												<option data-display="All Locations">All Locations</option>
												<option value="1">Freelance</option>
												<option value="2">Full Time</option>
												<option value="3">Intership</option>
												<option value="4">Part Time</option>
												<option value="5">Temporary</option>
											</select>
										</div>
										<div class="col-md-2 col-sm-6 col-xs-12 mb-3 mb-md-0">
											<button type="button" class="crumina-button button--dark button--xl">Search</button>
										</div>
									</div>

									<div class="row mt-4 mt-md-0">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="checkboxes-wrap">
												<div class="checkbox checkbox--blue-dark">
													<label>
														<input type="checkbox" name="optionsCheckboxes">
														<span class="checkbox-material"><span class="check"></span></span>
														Part Time
													</label>
												</div>

												<div class="checkbox checkbox--green">
													<label>
														<input type="checkbox" name="optionsCheckboxes1">
														<span class="checkbox-material"><span class="check"></span></span>
														Full Time
													</label>
												</div>

												<div class="checkbox checkbox--red">
													<label>
														<input type="checkbox" name="optionsCheckboxes2">
														<span class="checkbox-material"><span class="check"></span></span>
														Temporary
													</label>
												</div>

												<div class="checkbox checkbox--yellow">
													<label>
														<input type="checkbox" name="optionsCheckboxes3">
														<span class="checkbox-material"><span class="check"></span></span>
														Internship
													</label>
												</div>

												<div class="checkbox checkbox--blue">
													<label>
														<input type="checkbox" name="optionsCheckboxes4">
														<span class="checkbox-material"><span class="check"></span></span>
														Freelance
													</label>
												</div>
											</div>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="bg-light-grey pb120">
		<div class="container">
			<div class="row mb40">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<h3 class="mb40 mt-0">Search Result:</h3>

					<div class="ui-card featured-vacancies">
						<div class="ui-card-content">
							<div class="vacancies-title-location">
								<a href="/JobDetail" class="vacancies-title h6">Data Center Support Specialist Engineer</a>
								<div class="vacancies-location">
									<time class="published" datetime="2018-03-14 12:00:00">6 hours ago</time>
									London, United Kingdom
								</div>
							</div>
							<a href="/JobDetail" class="logo-company">
								<img class="logo" src="../../assets/img/client2.png" title="company">
							</a>
						</div>
						<div class="ui-card-footer">
							<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">IT Contractor</a>
							<button type="button" class="crumina-button button--blue-dark button--xxs button--uppercase-wide">Part Time</button>
						</div>
					</div>

					<div class="ui-card featured-vacancies">
						<div class="ui-card-content">
							<div class="vacancies-title-location">
								<a href="05_job_details.html" class="vacancies-title h6">Visualizer, web designer Max 3Ds, Cinema 4D</a>
								<div class="vacancies-location">
									<time class="published" datetime="2018-03-14 12:00:00">24 hours ago</time>
									New York, USA
								</div>
							</div>
							<a href="05_job_details.html" class="logo-company">
								<img class="logo" src="../../assets/img/client3.png" title="company">
							</a>
						</div>
						<div class="ui-card-footer">
							<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">Digital & Creative</a>
							<button type="button" class="crumina-button button--green button--xxs button--uppercase-wide">Full Time</button>
						</div>
					</div>

					<div class="ui-card">
						<div class="ui-card-content">
							<div class="vacancies-title-location">
								<a href="05_job_details.html" class="vacancies-title h6">Regional Sales Manager</a>
								<div class="vacancies-location">
									<time class="published" datetime="2018-03-14 12:00:00">6 days ago</time>
									Melbourne, Australia
								</div>
							</div>
							<a href="05_job_details.html" class="logo-company">
								<img class="logo" src="../../assets/img/client4.png" title="company">
							</a>
						</div>
						<div class="ui-card-footer">
							<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">Sales & Marketing</a>
							<button type="button" class="crumina-button button--red button--xxs button--uppercase-wide">Temporary</button>
						</div>
					</div>

					<div class="ui-card featured-vacancies">
						<div class="ui-card-content">
							<div class="vacancies-title-location">
								<a href="05_job_details.html" class="vacancies-title h6">Front End and Back End Developer</a>
								<div class="vacancies-location">
									<time class="published" datetime="2018-03-14 12:00:00">1 week ago</time>
									California, USA
								</div>
							</div>
							<a href="05_job_details.html" class="logo-company">
								<img class="logo" src="../../assets/img/client5.png" title="company">
							</a>
						</div>
						<div class="ui-card-footer">
							<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">Web Development</a>
							<button type="button" class="crumina-button button--yellow button--xxs button--uppercase-wide">Internship</button>
						</div>
					</div>

					<div class="ui-card">
						<div class="ui-card-content">
							<div class="vacancies-title-location">
								<a href="05_job_details.html" class="vacancies-title h6">Professional Copywriter for Commercial Advertising</a>
								<div class="vacancies-location">
									<time class="published" datetime="2018-03-14 12:00:00">3 months ago</time>
									Cologne, Germany
								</div>
							</div>
							<a href="05_job_details.html" class="logo-company">
								<img class="logo" src="../../assets/img/client6.png" title="company">
							</a>
						</div>
						<div class="ui-card-footer">
							<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">Writing</a>
							<button type="button" class="crumina-button button--blue button--xxs button--uppercase-wide">Freelance</button>
						</div>
					</div>

					<div class="ui-card">
						<div class="ui-card-content">
							<div class="vacancies-title-location">
								<a href="05_job_details.html" class="vacancies-title h6">Front End and Back End Developer</a>
								<div class="vacancies-location">
									<time class="published" datetime="2018-03-14 12:00:00">6 months ago</time>
									London, United Kingdom
								</div>
							</div>
							<a href="05_job_details.html" class="logo-company">
								<img class="logo" src="../../assets/img/client7.png" title="company">
							</a>
						</div>
						<div class="ui-card-footer">
							<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">Web Development</a>
							<button type="button" class="crumina-button button--blue-dark button--xxs button--uppercase-wide">Part Time</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-0">

					<aside aria-label="sidebar" class="sidebar sidebar-right">
						<div class="widget w-featured-vacancies widget-sidebar">
							<h3 class="widget-title">Featured</h3>

							<div class="crumina-module crumina-module-slider navigation-top-right">
								<div class="swiper-btn-wrap">
									<div class="swiper-btn-prev">
										<i class="puzzle-icon fal fa-long-arrow-left"></i>
									</div>

									<div class="swiper-btn-next">
										<i class="puzzle-icon fal fa-long-arrow-right"></i>
									</div>
								</div>
								<div class="swiper-container" data-show-items="1" data-prev-next="1">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="ui-card featured-vacancies">
												<div class="ui-card-content">
													<div class="vacancies-title-location">
														<a href="05_job_details.html" class="vacancies-title h6">Data Center Support Specialist Engineer</a>
														<div class="vacancies-location">
															<time class="published" datetime="2018-03-14 12:00:00">6 days ago</time>
															Melbourne, Australia
														</div>
													</div>
													<a href="05_job_details.html" class="logo-company logo-company--thumb">
														<img class="logo" src="../../assets/img/client8.png" title="company">
														<img src="../../assets/img/company1.jpg" title="company">
														<div class="overlay"></div>
													</a>
												</div>
												<div class="ui-card-footer">
													<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">IT Contractor</a>
													<button type="button" class="crumina-button button--blue button--xxs button--uppercase-wide">Freelance</button>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ui-card featured-vacancies">
												<div class="ui-card-content">
													<div class="vacancies-title-location">
														<a href="05_job_details.html" class="vacancies-title h6">Data Center Support Specialist Engineer</a>
														<div class="vacancies-location">
															<time class="published" datetime="2018-03-14 12:00:00">6 days ago</time>
															Melbourne, Australia
														</div>
													</div>
													<a href="05_job_details.html" class="logo-company logo-company--thumb">
														<img class="logo" src="../../assets/img/client8.png" title="company">
														<img src="../../assets/img/company1.jpg" title="company">
														<div class="overlay"></div>
													</a>
												</div>
												<div class="ui-card-footer">
													<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">IT Contractor</a>
													<button type="button" class="crumina-button button--blue button--xxs button--uppercase-wide">Freelance</button>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ui-card featured-vacancies">
												<div class="ui-card-content">
													<div class="vacancies-title-location">
														<a href="05_job_details.html" class="vacancies-title h6">Data Center Support Specialist Engineer</a>
														<div class="vacancies-location">
															<time class="published" datetime="2018-03-14 12:00:00">6 days ago</time>
															Melbourne, Australia
														</div>
													</div>
													<a href="05_job_details.html" class="logo-company logo-company--thumb">
														<img class="logo" src="../../assets/img/client8.png" title="company">
														<img src="../../assets/img/company1.jpg" title="company">
														<div class="overlay"></div>
													</a>
												</div>
												<div class="ui-card-footer">
													<a href="03_job_lists_row_map.html#" class="link--uppercase-wide fs-12">IT Contractor</a>
													<button type="button" class="crumina-button button--blue button--xxs button--uppercase-wide">Freelance</button>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="widget w-banner widget-sidebar">
							<div class="banner-header">
								Advertising
							</div>
							<div class="banner-content">
								<h4 class="widget-title">Download free Puzzler App for your mobile</h4>

								<div class="icon-market-wrap">
									<a href="03_job_lists_row_map.html#"><i class="puzzle-icon fab fa-apple"></i></a>

									<a href="03_job_lists_row_map.html#"><i class="puzzle-icon fab fa-google-play"></i></a>
								</div>

								<img src="../../assets/img/iphone1.png" title="phone">

							</div>
						</div>
					</aside>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<nav class="navigation">

						<a href="" class="page-numbers btn-start">
							<i class="puzzle-icon fal fa-angle-double-left"></i>
						</a>

						<a href="" class="page-numbers btn--prev">
							<i class="puzzle-icon fal fa-angle-left"></i>
						</a>

						<a href="" class="page-numbers current"><span>1</span></a>
						<a href="" class="page-numbers"><span>2</span></a>
						<a href="" class="page-numbers"><span>3</span></a>
						<a href="" class="page-numbers"><span>4</span></a>
						<a href="" class="page-numbers"><span>5</span></a>
						<a href="" class="page-numbers"><span>6</span></a>

						<a href="" class="page-numbers btn--next">
							<i class="puzzle-icon fal fa-angle-right"></i>
						</a>

						<a href="" class="page-numbers btn-end">
							<i class="puzzle-icon fal fa-angle-double-right"></i>
						</a>

						<span class="page-numbers all-pages">
							36 Pages
						</span>

					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="medium-padding120">
		<div class="container">
			<div class="row mb60">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration heading--inline mb-0">
						<h2 class="heading-title">A Few Words from Happy Candidates</h2>
						<div class="heading-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					</header>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-module-slider pagination-bottom-center slider--item-with-shadow">

						<div class="swiper-container" data-show-items="3" data-prev-next="1" data-space-between="40">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<blockquote class="quote--squared">
										<p>
											<i class="puzzle-icon quote fas fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum.
										</p>

										<div class="quote-footer">
											<div class="author-block">
												<div class="avatar avatar--70">
													<img src="../../assets/img/author6.jpg" alt="avatar">
												</div>
												<div class="author-content">
													<h6 class="author-name">Philip Demarco</h6>
													<div class="author-prof">Copywriter</div>
												</div>
											</div>
										</div>
									</blockquote>
								</div>
								<div class="swiper-slide">
									<blockquote class="quote--squared">
										<p>
											<i class="puzzle-icon quote fas fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum.
										</p>

										<div class="quote-footer">
											<div class="author-block">
												<div class="avatar avatar--70">
													<img src="../../assets/img/author1.jpg" alt="avatar">
												</div>
												<div class="author-content">
													<h6 class="author-name">Angelina Johnson</h6>
													<div class="author-prof">Graphic Designer</div>
												</div>
											</div>
										</div>
									</blockquote>
								</div>
								<div class="swiper-slide">
									<blockquote class="quote--squared">
										<p>
											<i class="puzzle-icon quote fas fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum.
										</p>

										<div class="quote-footer">
											<div class="author-block">
												<div class="avatar avatar--70">
													<img src="../../assets/img/author7.jpg" alt="avatar">
												</div>
												<div class="author-content">
													<h6 class="author-name">Peter Spenser</h6>
													<div class="author-prof">Marketing Director</div>
												</div>
											</div>
										</div>
									</blockquote>
								</div>
								<div class="swiper-slide">
									<blockquote class="quote--squared">
										<p>
											<i class="puzzle-icon quote fas fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum.
										</p>

										<div class="quote-footer">
											<div class="author-block">
												<div class="avatar avatar--70">
													<img src="../../assets/img/author6.jpg" alt="avatar">
												</div>
												<div class="author-content">
													<h6 class="author-name">Philip Demarco</h6>
													<div class="author-prof">Copywriter</div>
												</div>
											</div>
										</div>
									</blockquote>
								</div>
								<div class="swiper-slide">
									<blockquote class="quote--squared">
										<p>
											<i class="puzzle-icon quote fas fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum.
										</p>

										<div class="quote-footer">
											<div class="author-block">
												<div class="avatar avatar--70">
													<img src="../../assets/img/author1.jpg" alt="avatar">
												</div>
												<div class="author-content">
													<h6 class="author-name">Angelina Johnson</h6>
													<div class="author-prof">Graphic Designer</div>
												</div>
											</div>
										</div>
									</blockquote>
								</div>
								<div class="swiper-slide">
									<blockquote class="quote--squared">
										<p>
											<i class="puzzle-icon quote fas fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum.
										</p>

										<div class="quote-footer">
											<div class="author-block">
												<div class="avatar avatar--70">
													<img src="../../assets/img/author7.jpg" alt="avatar">
												</div>
												<div class="author-content">
													<h6 class="author-name">Peter Spenser</h6>
													<div class="author-prof">Marketing Director</div>
												</div>
											</div>
										</div>
									</blockquote>
								</div>
								<div class="swiper-slide">
									<blockquote class="quote--squared">
										<p>
											<i class="puzzle-icon quote fas fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum.
										</p>

										<div class="quote-footer">
											<div class="author-block">
												<div class="avatar avatar--70">
													<img src="../../assets/img/author6.jpg" alt="avatar">
												</div>
												<div class="author-content">
													<h6 class="author-name">Philip Demarco</h6>
													<div class="author-prof">Copywriter</div>
												</div>
											</div>
										</div>
									</blockquote>
								</div>
							</div>
						</div>

						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<section class="medium-padding120 bg-accent-primary">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration heading--inline decoration--dark-theme mb-0">
						<h2 class="heading-title">Get to start the Puzzler right now!</h2>
						<div class="heading-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					</header>
				</div>

				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
					<button type="button" class="crumina-button button--dark button--l button--with-icon button--icon-left" data-toggle="modal" data-target="#signupModal"><i class="puzzle-icon fas fa-user-tie"></i>Sign Up</button>
				</div>

			</div>
		</div>
	</section>

</div>
@stop