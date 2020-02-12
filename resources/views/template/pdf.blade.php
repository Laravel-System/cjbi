<?php $post_data = App\Post::where('status',1)->where('language',$local)->where('post_type','=','page')->where('link','=',$link)->first(); ?>
{{ dd($post_data) }}
<section class="porftolio-area ptb-100">
    <div class="container">
        <div class="row grid">
            @foreach($post_data->galleries as $gi)
                @foreach($gi->gallerie_image as $gal)
                    <?php //dd($post_data); ?>
                    <div class="col-md-3 portfolio clean col-sm-6 col-xs-12 col">
                        <div class="portfolio-wrap">
                            <div class="overlay">
                                <a class="popup" href="{{ url('Galleries/'.$gal->image) }}">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{ url('Galleries/'.$gal->image) }}" alt="" />
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>