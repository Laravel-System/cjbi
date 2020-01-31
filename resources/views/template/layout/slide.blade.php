<?php $slides = App\Slide::where('language', $local)->get(); ?>
<section class="slider-area">
	<div class="slider-active dotate-style slider-next-prev-style">
		@foreach($slides as $slide)
			@foreach($slide->slide_image as $sl)
				<div class="slider-items">
					<img style="height: 450px" src="{{ url('Galleries/'.$sl->image) }}" alt="" class="slider">
					<div class="slider-content text-center">
						<div class="table">
							<div class="table-cell" style="vertical-align: bottom;padding-bottom: 40px;">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8 col-md-offset-2">
											<h2>{{ $slide->name }}</h2>
											<!-- <ul>
												<li><a href="#">Read More</a></li>
											</ul> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@endforeach
	</div>
</section>