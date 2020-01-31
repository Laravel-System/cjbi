<?php  
    $gallery = App\Gallery::where('status','=',1)->where('language',$local)->get();
    
    if(Request::Segment(1) == 'en'){
        $url = url('en/gallerys');
    }elseif(Request::Segment(1) == 'kh'){
        $url = url('kh/gallerys');
    }elseif(Request::Segment(1) == 'cn'){
        $url = url('cn/gallerys');
    }else{
        $url = url('gallerys');
    }
?>
<div class="col-md-6 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
    <div class="footer-widget instagram-wrap">
        <h2>{{ $wid->title }}</h2>
        <ul>
            @foreach($gallery->sortByDesc('id')->take(1) as $gal)
                @foreach($gal->gallerie_image->take(4) as $gi)
                    <li style="width: 25%"><a href="{{$url}}"><img src="{{ url('Galleries/'.$gi->image) }}" alt=""></a></li>
                @endforeach
            @endforeach
        </ul>
    </div>
</div>