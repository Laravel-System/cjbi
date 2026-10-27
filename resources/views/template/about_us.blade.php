<style>
	.wthree-services-right-top ul {
		padding-left: 2em;
	}
</style>
<div class="about-top">
	<div class="container">
		<div class="col-md-9">
			<div class="w3l-heading">
				<h2 class="w3ls_head">{{$cat->name}}</h2>
			</div>
			<div class="wthree-services-bottom-grids">
				@foreach($cat->post as $p)
				@if($p->image)
				<div class="col-md-12 wthree-services-left">
					<img src="{{ url('images/'.$p->image) }}" class="img-responsive" alt="">
				</div>
				<div class="col-md-12 wthree-services-right">
					@else
					<div class="col-md-12 wthree-services-right">
						@endif
						<div class="wthree-services-right-top">
							@if($p->action_title==1)
							<h4 style="text-align: center;">{{$p->title}}</h4>
							@endif
							{!! $p->description !!}
						</div>
						<div class="clearfix"> </div>
						@endforeach
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			@include('template.layout.sidebar')
		</div>
	</div>
</div>
<!-- //about -->