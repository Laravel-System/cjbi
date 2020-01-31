<section class="team-area team-area2 ptb-100">
    <div class="container">
        <div class="row">
            @foreach($cat->post->sortBy('id') as $p)
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                    <div class="team-wrap2 mb-30">
                        <div class="team-img">
                            <img src="{{ url('images/'.$p->image) }}" alt="No Image" />
                        </div>
                        <div class="team-content">
                            <h3>{{ $p->title }}</h3>
                            <p>{!! $p->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>