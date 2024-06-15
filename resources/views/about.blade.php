@extends('layouts.project')

@section('content')

		<div class="container pt-5">
			<div class="row py-4 mb-2">
				<div class="col-md-5">
					<div class="col-12">
						<a onclick="myFunction('myImg2')" >
							<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
								<span class="">
								<img src="img/about/about-us.jpg" class="img-fluid " alt="classroom" id="myImg2" style="height: 440px;
                                object-fit: cover;">
								</span>
							</span>
						</a>
					</div>
					{{-- <div class="col-12">
						<a onclick="myFunction('myImg3')" >
							<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
								<span class="">
								<img src="img/about/4.jpg" class="img-fluid " alt="classroom" id="myImg3">
								</span>
							</span>
						</a>
					</div> --}}

				</div>

				<div class="col-md-7  mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
					<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
						<!-- <div class="col-lg-5 col-md-5 col-sm-5 col-5 text-right">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<ul class="list list-icons list-icons-style-none mt-2">
									<li> <strong class="text-dark">{{__ ('messages.about1/1')}}</strong> </li>
									<li> <strong class="text-dark">{{__ ('messages.about1/2')}}</strong></li>
									<li> <strong class="text-dark">{{__ ('messages.about1/3')}}</strong></li>
									<li> <strong class="text-dark">{{__ ('messages.about1/5')}}</strong></li>
									<li> <strong class="text-dark">{{__ ('messages.about1/6')}}</strong></li>
									<li> <strong class="text-dark">{{__ ('messages.about1/8')}}</strong></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-7 text-left">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<ul class="list list-icons list-icons-style-none list-dark mt-2">
									<li>:M PLUS MYANMAR CO., LTD.</li>
									<li>:November 24, 2018</li>
									<li>:U NAY LIN HTAT (LOUIS)</li>
									<li>:No. 38 Alanpya Pagoda Road, Mingalar Taung Nyunt Township, Yangon</li>
									<li>:{{__ ('messages.about1/7')}}</li>
									<li>:No. 63/2022</li>
								</ul>
							</div>
						</div> -->

						<div class=" col-5"><strong class="text-dark">{{__ ('messages.about1/1')}}</strong></div>
						<div class=" col-7">: M AGENCY MYANMAR CO., LTD</div>
						<div class="col-5"><strong class="text-dark">{{__ ('messages.about1/2')}}</strong></strong></div>
						<div class="col-7">: November 24, 2018</div>
						<div class="col-5"><strong class="text-dark">{{__ ('messages.about1/3')}}</strong></div>
						<div class="col-7">: U NAY LIN HTAT (LOUIS)</div>
						<div class="col-5"><strong class="text-dark">{{__ ('messages.about1/5')}}</strong></div>
						<div class="col-7">: No. 38 Alanpya Pagoda Road, Mingalar Taung Nyunt   Township, Yangon</div>
						<div class="col-5"><strong class="text-dark">{{__ ('messages.about1/6')}}</strong></div>
						<div class="col-7">:{{__ ('messages.about1/7')}}</div>
						<div class="col-5"><strong class="text-dark">{{__ ('messages.about1/8')}}</strong></div>
						<div class="col-7">: No. 63/2022</div>

						<div class="spacer"></div>
						<div class="col-lg-12 about">
							<div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
                                <div>
                                    <!--  -->
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="">
                                                <img src="img/group/MCreation.png" class="img-fluid" style="margin: -6px;" alt="">

                                            </span>
                                        </span>
                                    <!--  -->
                                </div>
                                <div>
                                    <!--  -->
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="">
                                                <img src="img/group/zeetrading.png" class="img-fluid" style="margin: -2px;" alt="">

                                            </span>
                                        </span>
                                    <!--  -->
                                </div>
                                <div>

                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="">
                                                <img src="img/group/seacross.png" class="img-fluid" style="margin: -2px;" alt="">

                                            </span>
                                        </span>

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

							<p class="lead mb-0 text-4">{{__ ('messages.content2')}}</p>

						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
