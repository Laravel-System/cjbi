<section class="service-area home2-service-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($cat->post as $p)
                <div class="col-md-6 col-sm-6 col-xs-12 col">
                    <div class="service-wrap">
                        <div class="service-content">
                            <h3>{{ $p->title }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>