<?php
	$slide = App\Slide::first();
?>

<div class="banner" style="/*background:url(..template/images/banner.jpg) no-repeat 0px 0px;*/">
	<!-- <div class="container"> -->
	<section class="slider">
		<div class="flexslider">

			<div class="flex-viewport" style="overflow: hidden; position: relative;">
				<ul class="slides"
					style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-3756px, 0px, 0px);">
					@foreach($slide->slide_image as $sl)
					<li class="clone" style="width: 1252px; float: left; display: block;">
						<img src="{{ url('Galleries/'.$sl->image) }}" width="100%" height="auto">

					</li>
					@endforeach
				</ul>
			</div>
			<ol class="flex-control-nav flex-control-paging">
				<li><a class="">1</a></li>
				<li><a class="">2</a></li>
				<li><a class="flex-active">3</a></li>
			</ol>
			<ul class="flex-direction-nav">
				<li><a class="flex-prev" href="#">Previous</a></li>
				<li><a class="flex-next" href="#">Next</a></li>
			</ul>
		</div>
	</section>
	<!-- flexSlider -->
	<script defer="" src="{{url('template/js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->
	<!-- </div> -->
</div>

