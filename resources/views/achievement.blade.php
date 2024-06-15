@extends('layouts.project')

@section('content')
   <div class="container pt-5">
        <div class="row pb-4">
            <div class="col">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-7 mx-auto">
                        <div class="overflow-hidden">
                            <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Our Achievement</h2>
                        </div>
                        <!-- <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
                        </div> -->
                        <div class="spacer3"></div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                        <!-- <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"> -->
                    </div>
                    <div class="col-md-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="thumb-gallery">
                            <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <img alt="Addon Image" src="img/add-on/addon-11.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <img alt="Addon Image" src="img/add-on/addon-3.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <img alt="Addon Image" src="img/add-on/addd-on-1.jpeg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <img alt="Addon Image" src="img/add-on/addon-4.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <img alt="Addon Image" src="img/add-on/addon-5.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <img alt="Addon Image" src="img/add-on/addon-6.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <img alt="Addon Image" src="img/add-on/addon-7.jpg" class="img-fluid">
                                    </span>
                                </div>
                            </div>
                            <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block cur-pointer">
                                        <img alt="Addon Image" src="img/add-on/addon-11.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block cur-pointer">
                                        <img alt="Addon Image" src="img/add-on/addon-3.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block cur-pointer">
                                        <img alt="Addon Image" src="img/add-on/addd-on-1.jpeg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block cur-pointer">
                                        <img alt="Addon Image" src="img/add-on/addon-4.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block cur-pointer">
                                        <img alt="Addon Image" src="img/add-on/addon-5.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block cur-pointer">
                                        <img alt="Addon Image" src="img/add-on/addon-6.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="img-thumbnail img-thumbnail-no-borders d-block cur-pointer">
                                        <img alt="Addon Image" src="img/add-on/addon-7.jpg" class="img-fluid">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="home-concept mt-5">
                                <div class="container">

                                    <div class="row text-center">
                                        <span class="sun"></span>
                                        <span class="cloud"></span>
                                        <div class="col-lg-2 ml-lg-auto">
                                            <div class="process-image">
                                                <img src="img/home/home-concept-item-1.png" alt="" />
                                                <strong>Strategy</strong>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="process-image process-image-on-middle">
                                                <img src="img/home/home-concept-item-2.png" alt="" />
                                                <strong>Planning</strong>
                                            </div>
                                        </div>

                                        <div class="col-lg-2">
                                            <div class="process-image">
                                                <img src="img/home/home-concept-item-3.png" alt="" />
                                                <strong>Build</strong>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ml-lg-auto">
                                            <div class="project-image">
                                                <div id="fcSlideshow" class="fc-slideshow">
                                                    <ul class="fc-slides">
                                                        <li><img class="img-responsive" src="img/projects/project-home-1.jpg" alt="" /></a></li>
                                                        {{-- <li><img class="img-responsive" src="img/projects/project-home-2.jpg" alt="" /></a></li>
                                                        <li><img class="img-responsive" src="img/projects/project-home-3.jpg" alt="" /></a></li> --}}
                                                    </ul>
                                                </div>
                                                <strong class="our-work">Achievement</strong>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="projects" class="container">
                        <div class="row justify-content-center pt-2 mt-2">
                            <div class="col-lg-9 text-center">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                                    <h2 class="font-weight-bold mb-2">Projects</h2>
                                </div>
                                <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p>
                            </div>
                        </div>
                        <div class="row pb-5 mb-5">
                            <div class="col">

                                <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">


                                        <div class="portfolio-item">
                                            <a  data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-3.jpg" class="img-fluid border-radius-0" alt="">

                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-4.jpg" class="img-fluid border-radius-0" alt="">

                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a  data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-5.jpg" class="img-fluid border-radius-0" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a  data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-6.jpg" class="img-fluid border-radius-0" alt="">


                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a  data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-3.jpg" class="img-fluid border-radius-0" alt="">


                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a  data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-4.jpg" class="img-fluid border-radius-0" alt="">


                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a  data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-5.jpg" class="img-fluid border-radius-0" alt="">


                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a href="" data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-6.jpg" class="img-fluid border-radius-0" alt="">


                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a href="" data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-4.jpg" class="img-fluid border-radius-0" alt="">


                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a href="" data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-3.jpg" class="img-fluid border-radius-0" alt="">


                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="portfolio-item">
                                            <a href="" data-ajax-on-modal>
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/add-on/addon-4.jpg" class="img-fluid border-radius-0" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
@endsection
