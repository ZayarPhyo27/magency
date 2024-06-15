@extends('layouts.project')

@section('content')

   <div class="container pt-5">
      <div class="row py-4 mb-2">
         <div class="col-md-5 ">
            <div class="overflow-hidden">
               <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.content5')}}</h2>
            </div><hr>
            <img src="img/world.png" class="img-fluid " alt="world">

            </div>
            <div class="col-md-7  mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
               <!-- <div class="overflow-hidden">
                  <h2 class="text-primary font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__ ('messages.content3/4')}}</h2>
               </div> -->
               <!-- <div class="overflow-hidden mb-3">
                  <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Agency</p>
               </div> -->
               <div class="spacer2"></div>
               <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content5/1')}}</p>
               <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content5/2')}}</p>
               <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{__ ('messages.content5/3')}}</p>
            </div>
        </div>
    </div>
@endsection
