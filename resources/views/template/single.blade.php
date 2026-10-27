@extends('template.layout.master')
@section('content')
    <?php
        try{
            $img_page = App\Post::where('id', $data->cate->first()->cat_position->post_id)->first()->menus->first()->image;
            $image_url = url('images/' . ($img_page != '' ? $img_page : 'banner-1.jpg'));
        }
        catch(\Exception $e){
            $image_url = url('images/banner-1.jpg');
        }
        
        function limit_text($text, $limit) {
            if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '';
            }
            return $text;
        }
    ?>
    <div class="banner1" style="background: url({{$image_url}}) no-repeat 0px 0px;">
        <div class="overlay"></div>
    </div>
@if(Request()->search)
<style>
    body {
        line-height: 1.5;
        color: #555;
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        background-color: #ffffff;
        margin: 0;
    }

    .container {
        margin-right: auto;
        margin-left: auto;
        padding-left: 15px;
        padding-right: 15px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        line-height: 1.5;
        margin: 0 0 20px 0;
    }

    h2 {
        font-size: 30px;
    }

    #content {
        position: relative;
        overflow: hidden;
        background-color: #FFF;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section,
    summary {
        display: block;
    }

    ::selection {
        background: #283991;
    }

    ::selection {
        background: #1ABC9C;
        color: #FFF;
        text-shadow: none;
    }

    .content-wrap {
        padding: 60px 0;
        position: relative;
    }

    #content .container {
        position: relative;
    }

    .col-xs-1,
    .col-sm-1,
    .col-md-1,
    .col-lg-1,
    .col-xs-2,
    .col-sm-2,
    .col-md-2,
    .col-lg-2,
    .col-xs-3,
    .col-sm-3,
    .col-md-3,
    .col-lg-3,
    .col-xs-4,
    .col-sm-4,
    .col-md-4,
    .col-lg-4,
    .col-xs-5,
    .col-sm-5,
    .col-md-5,
    .col-lg-5,
    .col-xs-6,
    .col-sm-6,
    .col-md-6,
    .col-lg-6,
    .col-xs-7,
    .col-sm-7,
    .col-md-7,
    .col-lg-7,
    .col-xs-8,
    .col-sm-8,
    .col-md-8,
    .col-lg-8,
    .col-xs-9,
    .col-sm-9,
    .col-md-9,
    .col-lg-9,
    .col-xs-10,
    .col-sm-10,
    .col-md-10,
    .col-lg-10,
    .col-xs-11,
    .col-sm-11,
    .col-md-11,
    .col-lg-11,
    .col-xs-12,
    .col-sm-12,
    .col-md-12,
    .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-footer:before,
    .modal-footer:after {
        content: " ";
        display: table;
    }

    .clearfix:after,
    .dl-horizontal dd:after,
    .container:after,
    .container-fluid:after,
    .row:after,
    .form-horizontal .form-group:after,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:after,
    .nav:after,
    .navbar:after,
    .navbar-header:after,
    .navbar-collapse:after,
    .pager:after,
    .panel-body:after,
    .modal-footer:after {
        clear: both;
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }

    @media (min-width: 768px) {
        .col-sm-12 {
            width: 100%;
        }
    }

    @media (min-width: 768px) {

        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12 {
            float: left;
        }
    }

    a,
    h1>span:not(.nocolor),
    h2>span:not(.nocolor),
    h3>span:not(.nocolor),
    h4>span:not(.nocolor),
    h5>span:not(.nocolor),
    h6>span:not(.nocolor),
    .header-extras li .he-text span,
    #primary-menu>ul>li:hover a,
    #primary-menu>ul>li.current a,
    #primary-menu>div>ul>li:hover a,
    #primary-menu>div>ul>li.current a,
    #top-cart a:hover,
    .top-cart-action span.top-checkout-price,
    .breadcrumb a:hover,
    #portfolio-filter li a:hover,
    .portfolio-desc h3 a:hover,
    .portfolio-overlay a:hover,
    #portfolio-navigation a:hover,
    .entry-title h2 a:hover,
    .entry-meta li a:hover,
    .post-timeline .entry:hover .entry-timeline,
    .post-timeline .entry:hover .timeline-divider,
    .ipost .entry-title h3 a:hover,
    .ipost .entry-title h4 a:hover,
    .spost .entry-title h4 a:hover,
    .mpost .entry-title h4 a:hover,
    .comment-content .comment-author a:hover,
    .product-title h3 a:hover,
    .single-product .product-title h2 a:hover,
    .product-price ins,
    .single-product .product-price,
    .feature-box.fbox-border .fbox-icon i,
    .feature-box.fbox-border .fbox-icon img,
    .feature-box.fbox-plain .fbox-icon i,
    .feature-box.fbox-plain .fbox-icon img,
    .process-steps li.active h5,
    .process-steps li.ui-tabs-active h5,
    .team-title span,
    .pricing-box.best-price .pricing-price,
    .btn-link,
    .dark .post-timeline .entry:hover .entry-timeline,
    .dark .post-timeline .entry:hover .timeline-divider {
        color: #283991;
    }

    a {
        text-decoration: none !important;
    }
    .content-data img {
        display: none;
    }
</style>
    <section id="content" class="">
        <div class="content-wrap">
            <div class=" container clearfix">
                <div class="col-md-9">
                    <h2 style='margin: 20px 0 20px;'>Contents</h2>

                    @foreach($contents as $d)
                    <div class='col-sm-12 content-data' style='margin-bottom: 15px;'>
                        <h4 style='margin-bottom: 3px;'>
                            <a href=''>{{ $d->title }}</a>
                        </h4>
                        {!! limit_text($d->description, 30) !!}
                    </div>
                    <div class='clearfix'></div>
                    @endforeach

                </div>
                @include('template.layout.sidebar')
            </div>
            
        </div>
    </section>
    
    @else
        <?php 
             if(Request::segment(1) == 'en'){
                $id= 44;
            //  }elseif(Request::segment(1) == 'jp'){
            //     $id =46;
             }
             else{
                 $id=46;
             }
            $cates = DB::table('page_categories')->where('categorie_id','=',$id)->where('page_id','=',$data->id)->get();
            if(count($cates)>0){
                foreach($cates as $cate){
                    if($cate->page_id == $data->id){
                        $col_md ="col-md-12";
                        $tm_grid ="";
                        $ith ="";
                    }
                    else{
                        $col_md ="col-md-4";
                        $tm_grid ="team-grids";
                        $ith = "ih-item";
                    }
                }
            }
            else{
                $col_md ="col-md-4";
                $tm_grid ="team-grids";
                $ith = "ih-item";
            }
            
            
        ?>
    <div class="about-top">
        <div class="container">
            <div class="w3l-heading">
                <h2 class="w3ls_head">{{$data->title}}</h2>
            </div>
          
            <div class="wthree-services-bottom-grids">
                <div class="col-md-9 wthree-services-left">
                    @if(Request()->page != 'member_profile')
                        @if($data->show_image_feature == 1)
                        <img src="{{ url('images/'.$data->image) }}" class="img-responsive" alt="" width="900px">
                        @else
                        @if(count($data->image_post) > 0)
                        <img src="{{ url('Galleries/'.$data->image_post->first()->image) }}" class="img-responsive" alt=""
                            width="900px">
                        @endif
                    @endif

                    @if($data->image_post)
                    <div class="team-bottom">
                        @foreach($data->image_post as $k=>$ip)
                        @if($data->show_image_feature == 1)
                        <div class="<?php echo $col_md.' '.$tm_grid;?>" style="margin-bottom:20px; margin-top:20px;">
                            <div class="<?php echo $ith; ?>  effect5">
                                <div class="img"><img src="{{ url('Galleries/'.$ip->image) }}" alt="img"
                                    class="img-responsive"></div>
                            </div>
                        </div>
                        @else
                        @if($k != 0)
                        <div class="<?php echo $col_md.' '.$tm_grid;?>">
                            <div class="<?php echo $ith; ?> effect5">
                                <div class="img"><img src="{{ url('Galleries/'.$ip->image) }}" alt="img"
                                        class="img-responsive"></div>
                            </div>
                        </div>
                        @endif
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @endif
                    <div class="wthree-services-right-top">
                        <!-- <h4 style="text-align: center;">{{$data->title}}</h4> -->
                        {!! $data->description !!}
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-12 text-center">
                        <!-- <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="AcI8r1V0"></script>
                        <div class="fb-share-button" data-href="https://google.com" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> -->
                        <!-- Load Facebook SDK for JavaScript -->
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <!-- Your share button code -->
                        <div class="fb-share-button" 
                        data-href="https://www.google.com" 
                        data-layout="button_count" data-size="large"">
                        </div>
                    </div>
                       
                    <div class="clearfix"> </div>
                </div>
                @include('template.layout.sidebar')
            </div>
          
        </div>
    </div>
    <script>

    </script>
    <style>
        .team-grids {
            padding: 10px 0 0 5px;
        }

        embed:focus {
            outline: none;
        }
    </style>
    @endif
    @endsection