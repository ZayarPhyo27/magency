@extends('layouts.project')

@section('content')
		<!-- modal content -->
		<div id="myModal" class="modal">
			<span class="close">&times;</span>
			<img class="modal-content" id="img01">
		</div>

		<div class="ee container py-2">
			<!-- The Modal -->

			<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
				<!-- <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
				<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
				<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
				<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
				<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li> -->
			</ul>


			<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
				<div class="row portfolio-list sort-destination" data-sort-id="portfolio">




					<div class="col-md-6 col-lg-4 isotope-item brands">

						<div class="portfolio-item" onclick="myFunction('myImg')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class="border-radius-0">
										<img id="myImg" src="img/content/1.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Presentation</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item" onclick="myFunction('myImg1')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg1" src="img/content/7b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Identity</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item" onclick="myFunction('myImg2')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg2" src="img/content/5.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Screens</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>


					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item" onclick="myFunction('myImg3')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg3" src="img/content/6b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Mobile Mockup</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item" onclick="myFunction('myImg4')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg4" src="img/content/4b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>





					<!--- htae htarr --->
					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item" onclick="myFunction('myImg5')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg5" src="img/content/8.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Mobile Mockup</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item medias">
						<div class="portfolio-item" onclick="myFunction('myImg6')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg6" src="img/content/1b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Mobile Mockup</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item" onclick="myFunction('myImg7')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg7" src="img/content/20.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>
					<!-- sone wrrrr -->

					<div class="col-md-6 col-lg-4 isotope-item brands">
						<div class="portfolio-item" onclick="myFunction('myImg8')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg8" src="img/content/9b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Company T-Shirt</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item" onclick="myFunction('myImg9')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg9" src="img/content/34h.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Screens</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item medias">
						<div class="portfolio-item" onclick="myFunction('myImg10')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg10" src="img/content/11b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Label</span>
											<span class="thumb-info-type">Media</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item" onclick="myFunction('myImg11')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg11" src="img/content/13b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Business Folders</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item" onclick="myFunction('myImg12')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg12" src="img/content/16.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Tablet Screen</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item" onclick="myFunction('myImg13')">
							<a>
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img id="myImg13" src="img/content/3.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Tablet Screen</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>

    @endsection
