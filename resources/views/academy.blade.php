@extends('layouts.project')

@section('content')
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>
   <div class="container py-2">

					<div class="row">
						<div class="col">

							<div class="row py-4 mb-2">
                                <!-- feature 1 -->
                                <div class="col-md-7">
                                    <div class="overflow-hidden">
                                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.academy/1')}}</h2>
                                    </div>
                                    <!-- <div class="overflow-hidden mb-3">
                                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
                                    </div> -->
                                    <div class="spacer3"></div>
                                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.academy/2')}}</p>
                                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.academy/3')}}</p>
                                    <div class="spacer3"></div>
                                    <!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
                                </div>
                                <div class="col-md-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                                    <div class="row">
                                        <div class="col-12">
                                            <a onclick="myFunction('myImg')">
                                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                                        <span class="">
                                                            <img src="img/feature/1b.jpg" class="img-fluid" alt="" id="myImg">
                                                            <span class="thumb-info-title">
                                                                <span class="thumb-info-inner">{{__ ('messages.content3/1/1')}}</span>
                                                                <!-- <span class="thumb-info-type">Project Type</span> -->
                                                            </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="spacer2"></div>
                                </div>

                                <!-- feature 2 -->

                                <div class="col-md-5 ">
                                    <a onclick="myFunction('myImg1')" >
                                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                            <span class="">
                                                <img src="img/feature/1teach.jpg" class="img-fluid mb-2" alt="classroom" id="myImg1">
                                                 <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">{{__ ('messages.content3/1/3')}}</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="spacer2"></div>
                                </div>
                                <div class="col-md-7  mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                                    <div class="overflow-hidden">
                                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.academy/4')}}</h2>
                                    </div>
                                    <div class="spacer3"></div>
                                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.academy/5')}}</p>
                                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.academy/5/1')}}</p>
                                </div>


                                <!-- feature 3 -->
                                <div class="col-md-7 ">
                                    <div class="overflow-hidden">
                                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.academy/6')}}</h2>
                                    </div>

                                    <div class="spacer3"></div>
                                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.academy/7')}}</p>
                                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.academy/8')}}</p>
                                </div>

                                <div class="col-md-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                                        <div class="col-12">
                                            <a onclick="myFunction('we')" >
                                                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                                    <span class="">
                                                    <img src="img/feature/we.jpg" class="img-fluid mb-2" alt="classroom" id="we">
                                                         {{-- <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">{{__ ('messages.content3/1/3')}}</span>

                                                        </span> --}}
                                                    </span>
                                                </span>
                                            </a>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>

							<div class="row">
								<div class="col">

									<div class="overflow-hidden">
                                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.office')}}</h2>
                                    </div>
                                    <div class="spacer"></div>
									<div class="lightbox m-academy" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
										<div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/2.jpg">
													<img class="img-fluid" src="img/academy/2.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/4.jpg">
													<img class="img-fluid" src="img/academy/4.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/8.jpg">
													<img class="img-fluid" src="img/academy/8.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/1.jpg">
													<img class="img-fluid" src="img/academy/1.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/3.jpg">
													<img class="img-fluid" src="img/academy/3.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/5.jpg">
													<img class="img-fluid" src="img/academy/5.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/6.jpg">
													<img class="img-fluid" src="img/academy/6.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/academy/7.jpg">
													<img class="img-fluid" src="img/academy/7.jpg" alt="Project Image">
												</a>
											</div>
										</div>
									</div>
                                    <div class="spacer2"></div>
								</div>

							</div>

						</div>
					</div>

				</div>

@endsection
