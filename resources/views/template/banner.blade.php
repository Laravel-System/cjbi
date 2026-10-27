<?php
    if($page->menus->first()->image){
        $image_url = url('images/'.$page->menus->first()->image);
    }else{
        $image_url = url('images/banner-1.jpg');
    }
?>
<div class="banner1" style="background: url({{$image_url}}) no-repeat 0px 0px;">
	<div class="overlay" style="background-color: rgba(0,0,0,0);"></div>
</div>