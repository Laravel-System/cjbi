@extends('template.layout.master')
@section('content')
<style type="text/css">
    .black-opacity:before {
        background: none !important;
    }
    .about-img:after {
        border: none !important;
    }
    @media(min-width: 1200px){
        .media-top{
            top: 40px;
        }
    }@media(min-width: 1024px and max-width: 1200px){
        .media-top{
            top: 20px;
        }
    }
</style>
<section class="about-area ptb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="about-img black-opacity">
                    <img src="{{url('images/'.$data->image)}}" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="about-wrap">
                    <h3>{{ $data->title }}</h3>
                    <p>{!! $data->description !!}</p>
                    @if($data->price)
                        <ul>
                            <li>{{$data->price}}</li>>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="row grid media-top">
            <?php foreach($data->image_post as $imp) { ?>
                <div class="col-md-3 portfolio clean col-sm-6 col-xs-12 col">
                    <div class="portfolio-wrap">
                        <div class="overlay">
                            <a class="popup" href="{{ url('images/'.$imp->image) }}">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <div class="portfolio-img">
                            <img src="{{ url('images/'.$imp->image) }}" alt="" />
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
@endsection