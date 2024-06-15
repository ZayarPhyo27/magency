@extends('layouts.project')

@section('content')

		<!-- modal content -->
		<div id="myModal" class="modal">
			<span class="close">&times;</span>
			<img class="modal-content" id="img01">
		</div>

        <div class="container pt-5">
            <div class="row py-4 mb-2">
                <!-- feature 1 -->
                <div class="col-md-7">
                    <div class="overflow-hidden">
                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.content3')}}</h2>
                    </div>
                    <!-- <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
                    </div> -->
                    <div class="spacer3"></div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content3/1')}}</p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content3/2')}}</p>
                    <!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-10 mx-auto">
                            <img class="img-fluid rounded mb-4" src="img/feature/feature1.jpg" alt="Project Image" >
                        </div>
                    </div>
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
                                            <!-- <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span> -->
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="col-12">
                            <a onclick="myFunction('myImg1')" >
                                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                    <span class="">
                                        <img src="img/feature/4.jpg" class="img-fluid" alt="" id="myImg1">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{__ ('messages.content3/1/2')}}</span>
                                            <!-- <span class="thumb-info-type">Project Type</span> -->
                                        </span>
                                        <!-- <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span> -->
                                    </span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- feature 2 -->
                <div class="col-md-5 ">
                    <img src="img/feature/myanmar.png" class="img-fluid mb-2" alt="myanmar">
                    <div class="spacer2"></div>
                </div>
                <div class="col-md-7  mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="overflow-hidden">
                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.content3/4')}}</h2>
                    </div>
                    <!-- <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
                    </div> -->
                    <div class="spacer3"></div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content3/5')}}</p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content3/6')}}</p>
                    <!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-10 mx-auto">
                            <img class="img-fluid rounded mb-4" src="img/feature/feature2.png" alt="Project Image">
                        </div>
                    </div>
                </div>


                <!-- feature 3 -->
                <div class="col-md-7 ">
                    <div class="overflow-hidden">
                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.content3/7/1')}}</h2>
                    </div>
                    <!-- <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
                    </div> -->
                    <div class="spacer3"></div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content3/7')}}</p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content3/8')}}</p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content3/9')}}</p>
                    <!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-10 mx-auto">
                            <img class="img-fluid rounded mb-4" src="img/feature/feature3.png" alt="Project Image">
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>

                <div class="col-md-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-12">
                            <a onclick="myFunction('myImg4')" >
                                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                    <span class="">
                                    <img src="img/feature/6.jpg" class="img-fluid mb-2" alt="classroom" id="myImg4">
                                        <!-- <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{__ ('messages.content3/1/3')}}</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                            <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span> -->
                                </span>
                            </a>
                        </div>
                        <div class="col-12">
                            <a onclick="myFunction('myImg5')" >
                                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                    <span class="">
                                    <img src="img/feature/7.jpg" class="img-fluid mb-2" alt="classroom" id="myImg5">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{__ ('messages.content3/1/3')}}</span>
                                            <!-- <span class="thumb-info-type">Project Type</span> -->
                                        </span>
                                        <!-- <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span> -->
                                    </span>
                                </span>
                            </a>
                        </div>

                </div>

                <!-- feature 4 -->
                <div class="col-md-5 ">

                        <div class="col-12">
                            <a onclick="myFunction('myImg2')" >
                                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                    <span class="">
                                    <img src="img/feature/92.jpg" class="img-fluid " alt="classroom" id="myImg2">
                                        <!-- <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{__ ('messages.content3/1/4')}}</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span> -->
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12">
                            <a onclick="myFunction('myImg3')" >
                                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                    <span class="">
                                    <img src="img/feature/91.jpg" class="img-fluid " alt="classroom" id="myImg3" style="height: 230px;
                                    object-fit: cover;">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{__ ('messages.content3/1/3')}}</span>
                                            <!-- <span class="thumb-info-type">Project Type</span> -->
                                        </span>
                                        <!-- <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span> -->
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="spacer2"></div>
                </div>

                <div class="col-md-7  mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="overflow-hidden">
                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300" style="text-align: center;font-size: 30px !important;">{{__ ('messages.content3/10')}}</h2>
                    </div>
                    <div class="spacer3"></div>
                    <!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-10 mx-auto"  onclick="myFunction('myImg7')">
                            <img class="img-fluid rounded mb-4" src="img/feature/feature4.png" alt="Project Image" id="myImg7">
                        </div>
                    </div>
                </div>


                <!-- feature 5 -->
                <div class="col-md-7 ">
                    <div class="overflow-hidden">
                        <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300" style="font-size: 30px !important;">{{__ ('messages.content3/10')}}</h2>
                    </div>
                    <!-- <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
                    </div> -->
                    <div class="spacer3"></div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content3/1/4')}}</p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content3/1/5')}}</p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">{{__ ('messages.content3/1/6')}}</p>
                    <div class="spacer"></div>
                    <!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-12 mx-auto"  onclick="myFunction('myImg7')">
                            <img class="img-fluid rounded mb-4" src="img/feature/1.jpg" alt="Project Image" id="myImg7">
                        </div>
                    </div>
                </div>
                <div class="col-md-5  mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" onclick="myFunction('myImg6')">
                    <div class="spacer2"></div>
                    <img class="img-fluid rounded mb-4" src="img/feature/feature5.png" alt="Project Image" id="myImg6">
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content3/1/7')}}</p>
                </div>

            </div>
        </div>

@endsection
