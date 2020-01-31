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
<div class="pricing-table-area ptb-70-0">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-10  col-xs-12 wow fadeInUp">
                <div class="section-title section-title2">
                    <h2>{{ $cat->name }}</h2>
                    <p>{!! $cat->description !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pricing-active next-prev-style">
                @foreach($cat->post->sortByDesc('updated_at') as $key=>$p)
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
                    <div class="col-xs-12 wow fadeInUp" data-wow-delay="{{ $trans }}">
                        <div class="service-wrap">
                            <div class="service-img">
                                <img src="{{ $image }}" alt="Image{{ $p->image }}">
                            </div>
                            <div class="service-content">
                                <h3>{{ $p->title }}</h3>
                                <p>{!! $p->description !!}</p>
                                @if($p->link)
                                <a href="{{$url}}"> {{ $read }}</a>
                                @else
                                <a href="#"> {{ $read }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>