<?php $menu_im = App\Menu::where('link',$link)->where('language',$local)->first(); ?>
<?php $menu_na = App\Menu::where('language',$local)->where('link',$link)->first();
?>
@if(count($menu_im) > 0)
<div class="breadcumb-area black-opacity" style="background: url({{ url('images/'.$menu_im->image) }})no-repeat center center / cover;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="breadcumb-wrap">
					<!-- <h2>{{ $menu_na->name }}</h2> -->
				</div>
			</div>
		</div>
	</div>
	<div class="breadcumb-menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
                    <?php $menu_home = App\Menu::where('link','=','home')->where('language',$local)->first(); ?>
					<ul>
						<li><a href="{{ url('/'.$menu_home->link) }}">{{ $menu_home->name }}</a></li>
						<li>/</li>
						<li>{{ $menu_na->name }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endif