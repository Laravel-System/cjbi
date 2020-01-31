<?php
    if(Request::segment(1) == 'kh'){
        $read = "បន្ថែមទៀត";
    }elseif(Request::segment(1) == 'cn'){
        $read = "阅读更多";
    }
    elseif(Request::segment(1) == 'en'){
        $read = "Read More";
    }else{
        $read = "Read More";
    }
?>
<section class="blog-area ptb-70-0 bg-1" style="background: #f1f1f1">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-10  col-xs-12 wow fadeInUp">
                <div class="section-title section-title2">
                    <h2>{{$cat->name}}</h2>
                    <p>{!! $cat->description !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($cat->post->sortByDesc('updated_at')->take(3) as $key=>$p)
                <?php
                    $image = url('images/'.$p->image);
                    $trans = ".".($key+1)."s";
                    if(Request::segment(1) == 'kh') {
                        $url = url('kh/'.$p->link.'/'.$p->id.'/detail');
                    }elseif(Request::segment(1) == 'en') {
                        $url = url('en/'.$p->link.'/'.$p->id.'/detail');
                    }elseif(Request::segment(1) == 'cn') {
                        $url = url('cn/'.$p->link.'/'.$p->id.'/detail');
                    }else {
                        $url = url($p->link.'/'.$p->id.'/detail');
                    }
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay="{{ $trans }}">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="{{ $image }}" alt="Image{{ $p->images }}" />
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog.html">{{ $p->title }}</a></h3>
                            <p>{!! $p->description !!}</p>
                            <a href="{{ $url }}" class="btn-style">{{ $read }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>