@extends('layouts.project')
@section('content')

	<style>
	.owl-dots{
		display: none !important;
	}
	</style>

		<div role="main" class="main">

		<div class="slider-container rev_slider_wrapper" style="height: 600px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 600, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class=" slide-overlay-primary" data-transition="fade">
								<img src="img/content/header/1.webp"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="">

								{{-- <div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="img/content/header/slide-title-border.png" alt=""></div> --}}

								<!-- <div class="tp-caption text-dark font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div> -->

								{{-- <div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/content/header/slide-white-line.png" alt=""></div> --}}

								{{-- <div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="img/content/header/slide-title-border.png" alt=""></div> --}}

								<!-- <h1 class="tp-caption font-weight-extra-bold text-dark negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">WEB DESIGN?</h1> -->

								<!-- <div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Check out our options and features</div> -->
							</li>
							<li class=" slide-overlay-primary" data-transition="fade">
								<img src="img/content/header/4.webp"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="">
							</li>
                            <li class=" slide-overlay-primary" data-transition="fade">
								<img src="img/content/header/5.webp"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="">
                            </li>
						</ul>
					</div>
				</div>

			<!-- SEO  -->
			<div class="home-intro" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									Unlock new opportunities with <span class="highlighted-word text-color-primary font-weight-semibold text-5">Japanese Language Skills</span>
									<span>Check out our options and features included.</span>
								</p>
								<p>

								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="/feature" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Join MAgency</a>
									<div class="learn-more">or <a href="/about">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>


				<!-- parallex and dark text -->
			<!-- <section class="parallax section section-parallax section-center" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src=""> -->

				<div class="row py-3">
					<div class="col-md-8 text-center mx-md-auto">
						<h4 class="  mb-0 text-dark">{{__ ('messages.content1') }}</h4>
						<h5 class=" text-dark"></h5>
						<p class="mb-1 appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="font-size: 15px;">{{__ ('messages.content1/2')}}</p>
						<p class=" appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="font-size: 15px;">{{__ ('messages.content1/3')}}</p>
					</div>
				</div>

				<div class="container">
				<div class="featured-boxes py-5 mt-5 mb-4">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-primary featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-people"></i>
									<h3 class="text-color-primary font-weight-bold text-3 mb-2 mt-3">{{__ ('messages.card/1')}}</h3>
									<p class="px-3">{{__ ('messages.card/1/1')}}</p>
									<p><a href="/feature" class="text-dark learn-more font-weight-bold text-2">{{__ ('messages.view-more')}}<i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-dark featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-docs"></i>
									<h3 class="font-weight-bold text-3 mb-2 mt-3">{{__ ('messages.card/2')}}</h3>
									<p class="px-3">{{__ ('messages.card/2/1')}}</p>
									<p><a href="/feature" class="text-dark learn-more font-weight-bold text-2">{{__ ('messages.view-more')}} <i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-primary featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-trophy"></i>
									<h3 class="text-color-primary font-weight-bold text-3 mb-2 mt-3">{{__ ('messages.card/3')}}</h3>
									<p class="px-3">{{ __ ('messages.card/3/1') }}</p>
									<p><a href="/feature" class="text-dark learn-more font-weight-bold text-2">{{__ ('messages.view-more')}} <i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-dark featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-equalizer"></i>
									<h3 class="font-weight-bold text-3 mb-2 mt-3">{{__ ('messages.card/4')}}</h3>
									<p class="px-3">{{__ ('messages.card/4/1')}}</p>
									<p><a href="/feature" class="text-dark learn-more font-weight-bold text-2">{{__ ('messages.view-more')}} <i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- </section> -->

				<!-- <div class="spacer"></div> -->
			<!-- testimonials -->
			<div class="owl-carousel owl-theme container" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}">

				<div class="testimonial testimonial-style-5">
					{{-- <blockquote>
						<p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes"</p>
					</blockquote>
					<div class="testimonial-arrow-down"></div> --}}
					<div class="testimonial-author">
						<img src="img/clients/6.jpg" class="img-fluid rounded-circle" alt="">
						<p><strong class="font-weight-extra-bold pt-2">BO BO PE WIN</strong><span>Director</span></p>
					</div>
				</div>

				<div class="testimonial testimonial-style-5">
						<div class="testimonial-author">
							<img src="img/clients/ceo1.jpg" class="img-fluid rounded-circle" alt="">
							<p><strong class="font-weight-extra-bold">NAY LIN HTAT (LOUIS)</strong><span>Managing Director</span></p>
						</div>
				</div>

                <div class="testimonial testimonial-style-5">
                    <div class="testimonial-author">
                        <img src="img/clients/tin.jpg" class="img-fluid rounded-circle" alt="">
                        <p><strong class="font-weight-extra-bold">TIN TIN HTIKE</strong><span>Advisor</span></p>
                    </div>
                </div>

                <div class="testimonial testimonial-style-5">
                    <div class="testimonial-author">
                        <img src="img/clients/jp.jpg" class="img-fluid rounded-circle" alt="">
                        <p><strong class="font-weight-extra-bold">YOSHINORI KANEKO</strong><span>Coordinator</span></p>
                    </div>
                </div>

			</div>



			<div class="container">
				<div class="heading heading-border heading-middle-border heading-middle-border-center">
					<h2 class="font-weight-normal">Our Group</h2>
				</div>
			</div>

			<!-- Carousel image add -->
            <div class="home">
                <div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
                    <div>
                        <!-- <a href="portfolio-single-wide-slider.html"> -->
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/MCreation.png" class="img-fluid" style="margin: -6px;" alt="">

                                </span>
                            </span>
                        <!-- </a> -->
                    </div>
                    <div>
                        <!-- <a href="portfolio-single-wide-slider.html"> -->
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/zeetrading.png" class="img-fluid" style="margin: -2px;" alt="">

                                </span>
                            </span>
                        <!-- </a> -->
                    </div>
                    <div>

                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/seacross.png" class="img-fluid" style="margin: -2px;" alt="">

                                </span>
                            </span>
                        </a>
                    </div>
                    <div>

                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/Venue36.png" class="img-fluid" style="margin: -2px;" alt="">

                                </span>
                            </span>

                    </div>
                    <div>

                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/seabrother.png" class="img-fluid" style="margin: -2px;" alt="">

                                </span>
                            </span>

                    </div>
                    <div>

                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/UniFarm.png" class="img-fluid" style="margin-top: 30px;" alt="">

                                </span>
                            </span>

                    </div>
                    <div>

                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/myanFarm.png" class="img-fluid" style="margin-top: 30px;" alt="">

                                </span>
                            </span>

                    </div>
                    <div>

                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="">
                                    <img src="img/group/MST.png" class="img-fluid" style="margin: -2px;" alt="">

                                </span>
                            </span>

                    </div>
                </div>

            </div>


			<section class="section pb-70 section-height-5 bg-primary border-0 pt-5 m-0 appear-animation" data-appear-animation="fadeIn" style="display: none;">
				<div class="container">
					<div class="row mt-4 mt-lg-5">
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-support text-color-primary text-6"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="text-color-light font-weight-bold text-4 line-height-5 mb-1">CUSTOMER SUPPORT</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit <span class="alternative-font text-color-light">amet</span>, consectetur adipiscing elit. Praesent tincidunt pretium vulputate.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-layers text-color-primary text-6"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">SLIDERS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget pretium purus.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-menu text-color-primary text-5"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">BUTTONS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel magna fringilla.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-lg-4">
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-doc text-color-primary text-5"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">HTML5 / CSS3 / JS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim ante eleifend.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-user text-color-primary text-5"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">ICONS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit <span class="alternative-font text-color-light">amet</span>, consectetur adipiscing elit. Praesent consequat pharetra massa.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-screen-desktop text-color-primary text-6"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">LIGHTBOX</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum aliquet erat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!-- youtube video -->
			<!-- <div class="video-container container">
				<iframe class="i-frame object embed" style="max-height: 550px;" src="https://www.youtube.com/embed/MckXq7H3cTA" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>
			</div> -->



			{{--  Latest Post
                <div class="container">
				<div class="row pt-5 mt-4">
					<div class="col">
						<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
					</div>
				</div>
				<div class="row recent-posts pb-5 mb-4">
					<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">15</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">14</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">13</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-6 col-lg-3">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">12</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div> --}}

            {{-- <div class="spacer"></div>
            <div class="row justify-content-center">
                <div class="container">
                    <h4 class="mb-0 text-dark">M PLUS MYANMAR</h4>
                    <h5 class="text-dark">(Dark Text)</h5>
                    <p class="mb-0">{{__ ('messages.content2')}}</p>
                </div>
            </div> --}}



		</div>




@endsection
