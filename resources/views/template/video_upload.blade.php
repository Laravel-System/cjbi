<style>
	.wthree-services-right-top ul {
		padding-left: 2em;
	}
	.responsive-iframe {
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		width: 50%;
		height: 50%;
		border: none;
	} 
	.video_detail {
		position: relative;
		width: 100%;
		overflow: hidden;
		height: 190px;
		/* padding-top: 56.25%; */
	}
</style>
<?php
	$cats = $cat->post()->orderBy('id','DESC')->get();
?>
<div class="about-top">
	<div class="container">
		<div class="col-md-12">
			<div class="w3l-heading">
				<h2 class="w3ls_head">{{$cat->name}}</h2>
			</div>
			<div class="wthree-services-bottom-grids">
				@foreach($cats as $p)
					<div class="col-md-4 col-sm-6 col-xs-12 wthree-services-left " style="margin-top:50px;">
						<div class="responsive">
							<iframe class="video_detail responsive-iframe" title="YouTube video player" src="{{ $p->location_job }}" allowfullscreen></iframe>
						</div>
						<div class="wthree-services-right-top" style="margin-top:20px;">
							@if($p->action_title==1)
							<h4 style="text-align: center;">{{$p->title}}</h4>
							@endif
							{!! $p->description !!}
						</div>
						<div class="clearfix"> </div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
	</div>
</div>