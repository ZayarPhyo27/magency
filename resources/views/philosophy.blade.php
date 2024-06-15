@extends('layouts.project')

@section('content')

<div class="container pt-2">

					<div class="row py-4 mb-2">
						<div class="col-md-8 order-2">
							<div class="overflow-hidden">
								<h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.philosophy')}}</h2>
								<hr class="text-primary">
							</div>
							<!-- <div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
							</div> -->
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content4/1')}}</p>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content4/2')}}</p>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content4/3')}}</p>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content4/4')}}</p>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content4/5')}}</p>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content4/6')}}</p>

							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<!-- <div class="col-lg-6">
									<a href="#" class="btn btn-modern btn-dark mt-3">See More</a>

								</div> -->

							</div>
						</div>
						<div class="col-md-4 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<div class="spacer"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="testimonial-author">
                                        <img src="img/clients/ceo1.jpg" class="img-fluid">
                                        <span class=""><strong class="d-block font-weight-extra-bold text-center">NAY LIN HTAT (LOUIS)</strong><div class="text-center">Managing Director</div></span>
                                    </div>
                                    <div class="spacer"></div>
                                    <div class="testimonial-author">
                                    <img src="img/clients/6.jpg" class="img-fluid" alt="">
                                    <span class="" ><strong class=" d-block font-weight-extra-bold pt-2 text-center">BO BO PE WIN</strong><div class="text-center">Director</div></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="testimonial-author">
                                        <img src="img/clients/tin.jpg" class="img-fluid">
                                        <span class=""><strong class="d-block font-weight-extra-bold text-center">TIN TIN HTIKE</strong><div class="text-center">Advisor</div></span>
                                    </div>
                                    <div class="spacer"></div>
                                    <div class="testimonial-author">
                                    <img src="img/clients/jp.jpg" class="img-fluid" alt="">
                                    <span class="" ><strong class=" d-block font-weight-extra-bold pt-2 text-center">YOSHINORI KANEKO</strong><div class="text-center">Coordinator</div></span>
                                    </div>
                                </div>
                            </div>

						</div>
					</div>
				</div>

@endsection
