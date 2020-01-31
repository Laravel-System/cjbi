<section class="brand-area black-opacity ptb-70-0" style="background: #0552b1">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-10 col-xs-12 wow fadeInUp">
                <div class="section-title section-title2">
                    <h2>{{ $cat->name }}</h2>
                    <p>{{ strip_tags($cat->description) }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="brand-active">
                @foreach($cat->post as $p)
                    @if($p->image)
                        <div class="col-xs-12">
                            <div class="brand-wrap">
                                <a href="#">
                                    <img src="{{ url('images/'.$p->image) }}" alt="No">
                                </a>
                            </div>
                        </div>
                    @endif
                    @if($p->image_post)
                        @foreach($p->image_post as $ip)
                            <div class="col-xs-12">
                                <div class="brand-wrap">
                                    <a href="#">
                                        <img src="{{ url('images/'.$ip->image) }}" alt="No">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>