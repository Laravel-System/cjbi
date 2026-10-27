<?php
	$gal = App\Post::where('id',$page->id)->first();
?>

<div class="container">
	<div class="col-md-12" style="margin-top: 3em;">

		<div class="postcontent nobottommargin clearfix">
		@foreach($gal->galleries as $g)
			<div class="col-xs-6 col-md-3 bottommargin-sm gallery_box" style="height: 305px;">
				<a href="{{url($code.'/gallery/detail/'.$g->id)}}"
					class="thumbnail nobottommargin">
					<img alt="" src="{{url('Galleries/'.$g->feature_image)}}">
				</a>
				<div><b>{{ str_limit($g->name, 80) }}</b></div>
			</div>
		@endforeach	
		</div>

	</div>
</div>
<style type="text/css">
	.w3l-heading {
		padding-left: 15px;
	}

	.w3ls_head {
		font-size: 20px;
		text-align: left;
		padding: 10px;
		line-height: 1.5;
		margin-bottom: 1em;
		border-left: 5px solid #384594;
	}

	.w3ls_head:before,
	.w3ls_head:after {
		display: none;
	}
</style>
<style>
	.thumbnail {
		height: auto !important;
		margin-bottom: 20px !important;
	}
	.thumbnail img {
		height: auto !important;
	}
	/* .postcontent {
		width: 860px;
	} */

	.postcontent.bothsidebar {
		width: 580px;
	}

	.postcontent #portfolio {
		margin: 0 -12px -12px 0;
	}

	.postcontent .portfolio-item {
		width: 206px;
		margin: 0 12px 12px 0;
	}

	.postcontent .portfolio-item .portfolio-image,
	.postcontent .portfolio-item .portfolio-image a,
	.postcontent .portfolio-item .portfolio-image img {
		width: 206px;
		height: 155px;
	}

	.postcontent .portfolio-desc h3 {
		font-size: 17px;
	}

	.postcontent .portfolio-desc span {
		font-size: 12px;
	}
	.postcontent .portfolio-nomargin .portfolio-item {
		width: 214px;
	}

	.postcontent .portfolio-nomargin .portfolio-item .portfolio-image,
	.postcontent .portfolio-nomargin .portfolio-item .portfolio-image a,
	.postcontent .portfolio-nomargin .portfolio-item .portfolio-image img {
		width: 214px;
		height: 161px;
	}
	.postcontent .portfolio-notitle .portfolio-desc {
		height: 70px;
		bottom: -71px;
	}

	.postcontent .portfolio-full.portfolio-notitle .portfolio-desc,
	.postcontent .portfolio-nomargin.portfolio-notitle .portfolio-desc {
		bottom: -70px;
	}

	.postcontent .portfolio-notitle .portfolio-item:hover .portfolio-overlay a {
		margin-top: -50px !important;
	}

	.postcontent #portfolio.portfolio-3 {
		margin: 0 -16px -16px 0;
	}

	.postcontent .portfolio-3 .portfolio-item {
		width: 276px;
		margin: 0 16px 16px 0;
	}

	.postcontent .portfolio-3 .portfolio-item .portfolio-image,
	.postcontent .portfolio-3 .portfolio-item .portfolio-image a,
	.postcontent .portfolio-3 .portfolio-item .portfolio-image img {
		width: 276px;
		height: 207px;
	}

	.postcontent .portfolio-3 .portfolio-desc h3 {
		font-size: 18px;
	}

	.postcontent .portfolio-3 .portfolio-desc span {
		font-size: 13px;
	}
	.postcontent .portfolio-3.portfolio-nomargin .portfolio-item {
		width: 285px;
	}

	.postcontent .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image,
	.postcontent .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image a,
	.postcontent .portfolio-3.portfolio-nomargin .portfolio-item .portfolio-image img {
		width: 285px;
		height: 214px;
	}
	.postcontent .portfolio-3.portfolio-notitle .portfolio-desc {
		height: 72px;
		bottom: -73px;
	}

	.postcontent .portfolio-3.portfolio-full.portfolio-notitle .portfolio-desc,
	.postcontent .portfolio-3.portfolio-nomargin.portfolio-notitle .portfolio-desc {
		bottom: -72px;
	}

	.postcontent .portfolio-3.portfolio-notitle .portfolio-item:hover .portfolio-overlay a {
		margin-top: -40px !important;
	}

	.postcontent #portfolio.portfolio-2 {
		margin: 0 -20px -20px 0;
	}

	.postcontent .portfolio-2 .portfolio-item {
		width: 420px;
		margin: 0 20px 20px 0;
	}

	.postcontent .portfolio-2 .portfolio-item .portfolio-image,
	.postcontent .portfolio-2 .portfolio-item .portfolio-image a,
	.postcontent .portfolio-2 .portfolio-item .portfolio-image img {
		width: 420px;
		height: 315px;
	}

	.postcontent .portfolio-2 .portfolio-desc h3 {
		font-size: 21px;
	}

	.postcontent .portfolio-2 .portfolio-desc span {
		font-size: 14px;
	}

	.postcontent .portfolio-2.portfolio-nomargin .portfolio-item {
		width: 429px;
	}

	.postcontent .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image,
	.postcontent .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image a,
	.postcontent .portfolio-2.portfolio-nomargin .portfolio-item .portfolio-image img {
		width: 429px;
		height: 322px;
	}

	.postcontent .portfolio-2.portfolio-nomargin .portfolio-desc {
		padding-bottom: 20px;
	}
	.postcontent .portfolio-2.portfolio-notitle .portfolio-desc {
		height: 90px;
		bottom: -91px;
	}

	.postcontent .portfolio-2.portfolio-full.portfolio-notitle .portfolio-desc,
	.postcontent .portfolio-2.portfolio-nomargin.portfolio-notitle .portfolio-desc {
		bottom: -90px;
	}

	.postcontent .portfolio-2.portfolio-notitle .portfolio-item:hover .portfolio-overlay a {
		margin-top: -40px !important;
	}

	.postcontent #portfolio.portfolio-5 {
		margin: 0;
	}

	.postcontent .portfolio-5 .portfolio-item {
		width: 172px;
		margin: 0;
	}

	.postcontent .portfolio-5 .portfolio-item .portfolio-image,
	.postcontent .portfolio-5 .portfolio-item .portfolio-image a,
	.postcontent .portfolio-5 .portfolio-item .portfolio-image img {
		width: 172px;
		height: 128px;
	}

	.postcontent .portfolio-5 .portfolio-desc h3 {
		font-size: 15px;
	}

	.postcontent .portfolio-5 .portfolio-desc span {
		font-size: 12px;
	}

	.postcontent .portfolio-5 .portfolio-desc {
		padding: 15px 10px;
	}
	.postcontent .portfolio-5.portfolio-notitle .portfolio-desc {
		height: 68px;
		bottom: -69px;
	}

	.postcontent .portfolio-5.portfolio-full.portfolio-notitle .portfolio-desc,
	.postcontent .portfolio-5.portfolio-nomargin.portfolio-notitle .portfolio-desc {
		bottom: -68px;
	}

	.postcontent .portfolio-5.portfolio-notitle .portfolio-item:hover .portfolio-overlay a {
		margin-top: -50px !important;
	}

	.postcontent .portfolio-1 .portfolio-item .portfolio-image,
	.postcontent .portfolio-1 .portfolio-item .portfolio-image a,
	.postcontent .portfolio-1 .portfolio-item .portfolio-image img {
		width: 540px;
		height: 300px;
	}

	.postcontent .portfolio-1 .portfolio-desc {
		width: 280px;
	}

	.postcontent #portfolio.portfolio-1.portfolio-fullwidth {
		margin: 0 0 -40px 0;
	}

	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item {
		margin-bottom: 40px;
	}

	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image,
	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image a,
	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item .portfolio-image img {
		width: 860px;
		height: 377px;
	}

	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item:hover .portfolio-image img {
		-webkit-transform: translateX(-40px);
		-moz-transform: translateX(-40px);
		-ms-transform: translateX(-40px);
		-o-transform: translateX(-40px);
		transform: translateX(-40px);
	}

	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-item.alt:hover .portfolio-image img {
		-webkit-transform: translateX(40px);
		-moz-transform: translateX(40px);
		-ms-transform: translateX(40px);
		-o-transform: translateX(40px);
		transform: translateX(40px);
	}

	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-desc {
		width: 320px;
		padding: 25px;
		right: -320px;
	}

	.postcontent .portfolio-1.portfolio-fullwidth .alt .portfolio-desc {
		left: -320px;
		right: auto;
	}

	.postcontent .portfolio-1.portfolio-fullwidth .portfolio-overlay a {
		left: 32%;
	}

	.postcontent .portfolio-1.portfolio-fullwidth .alt .portfolio-overlay a {
		left: auto;
		right: 32%;
	}

	.postcontent .post-grid.grid-2 .entry {
		width: 410px;
	}

	.postcontent .post-grid.grid-2 .entry-image,
	.postcontent .post-grid.grid-2 .entry-image img {
		height: 230px;
	}

	.postcontent .post-grid.grid-2 .entry-title h2 {
		font-size: 18px;
	}

	.postcontent #shop.product-3 {
		margin: 0 -25px -25px 0;
	}

	.postcontent .product-3 .product {
		margin: 0 25px 25px 0;
		width: 270px;
	}

	.postcontent .product-3 .product-image {
		height: 360px;
	}
	.postcontent #shop.product-2 {
		margin: 0 -40px -40px 0;
	}

	.postcontent .product-2 .product {
		margin: 0 40px 40px 0;
		width: 410px;
	}

	.postcontent .product-2 .product-image {
		height: 547px;
	}
</style>