<section class="about-area ptb-140">
    <div class="container">
        <div class="row">
            @foreach($cat->post as $p)
                <div class="col-md-6 col-xs-12">
                    <div class="about-img img-shadow">
                        <img src="{{ url('images/'.$p->image) }}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="about-wrap">
                        <h3>{{ $p->title }}</h3>
                        <p>{!! $p->description !!}</p>
                        <!--<ul>-->
                        <!--    <li>{{ $p->link_download }}</li>-->
                        <!--</ul>-->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>