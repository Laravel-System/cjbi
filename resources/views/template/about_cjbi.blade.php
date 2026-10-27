<!-- <section class="testimonials4 cid-qxz0gNvgdF" id="testimonials4-8" data-rv-view="61">
  <div class="container-fluid">
		<h2 class="w3ls_head">{{$cat->name}}</h2>
		 @foreach($cat->post as $p)
			<div class="col-md-6 testimonials-container"> 
				<div class="testimonials-item">
					<div class="user row">
						<div class="col-lg-4 col-md-3 no-padding" >
							<div class="user_image">
								<img src="{{ url('template/images/'.$p->image) }}" media-simple="true">
							</div>
						</div>	
						<div class="testimonials-caption col-lg-8 col-md-7">
							<div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
								<a href="#"><h3>{{$p->title}}</h3></a>
							</div>
							<div class="border"></div>	 
							<div class="user_text ">
								<p class=" ">
									{!! $p->description !!}							
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
  </div>
</section> -->

<div class="banner-bottom">
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head">Gallary </h2>
			</div>
			<div class="w3ls_banner_bottom_grids margins">
				<div class="col-md-4 agileits_services_grid ">
					<div class="w3_agile_services_grid1">
						<img src="{{url('template/images/4.jpg')}}" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
 
				</div>
				<div class="col-md-4 agileits_services_grid margin">
					<div class="w3_agile_services_grid1">
						<img src="{{url('template/images/5.jpg')}}" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
				 
				</div>
				<div class="col-md-4 agileits_services_grid  margin">
					<div class="w3_agile_services_grid1 ">
						<img src="{{url('template/images/6.jpg')}}" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					 
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_banner_bottom_grids margins">
				<div class="col-md-4 agileits_services_grid ">
					<div class="w3_agile_services_grid1">
						<img src="{{url('template/images/7.jpg')}}" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					 
				</div>
				<div class="col-md-4 agileits_services_grid margin">
					<div class="w3_agile_services_grid1 margin">
						<img src="{{url('template/images/4.jpg')}}" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
				</div>

				<div class="col-md-4 agileits_services_grid margin">
					<div class="w3_agile_services_grid1 ">
						<img src="{{url('template/images/5.jpg')}}" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>