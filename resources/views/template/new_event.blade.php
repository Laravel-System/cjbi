<link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
<style>
    .pagination {
        float: right;
    }
    .content-wrap {
        padding: 60px 0;
    }
    .content-wrap h1, h2, h3, h4, h5, h6{
        font-family: 'Crete Round', serif;
    }
    .content-wrap {
        position: relative;
        padding: 80px 0;
    }

    #content .container {
        position: relative;
    }

    .clear {
        clear: both;
        display: block;
        font-size: 0px;
        height: 0px;
        line-height: 0;
        width: 100%;
        overflow: hidden;
    }

    #posts {
        position: relative;
    }

    .events .entry,
    .ievent {
        padding: 20px;
        background-color: #F9F9F9;
        border-bottom: 3px solid #EEE;
    }

    .entry {
        position: relative;
        margin: 0 0 50px;
        padding: 0 0 50px;
        border-bottom: 2px solid #F5F5F5;
    }

@media (min-width: 768px){
    .small-thumbs .entry-image,
    .ievent .entry-image {
        float: left;
        width: 300px;
        margin: 0 30px 0 0;
    }
}

    .entry-image,
    .entry-image>a,
    .entry-image .slide a,
    .entry-image img {
        display: block;
        position: relative;
        width: 100%;
        height: auto;
    }

    .entry-image {
        margin-bottom: 30px;
    }

    .entry-image,
    .entry-image>a,
    .entry-image .slide a,
    .entry-image img {
        display: block;
        position: relative;
        width: 100%;
        height: auto;
    }

    .small-thumbs .entry-image img,
    .ievent .entry-image img {
        border-radius: 0;
    }

    .entry-image img {
        border-radius: 3px;
    }

    .events .entry-c,
    .ievent .entry-c {
        padding: 5px 0;
    }

    .entry-c {
        position: relative;
        overflow: hidden;
    }

    .small-thumbs .entry-title h2,
    .ievent .entry-title h2 {
        font-size: 20px;
        font-weight: 200;
    }

    .entry-title h2 {
        margin: 0;
        font-size: 24px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .entry-title h2 a {
        color: #333;
    }

    .entry-meta {
        margin: 10px -10px -15px 0;
        list-style: none;
    }

    .entry-meta li {
        float: left;
        font-size: 13px;
        line-height: 14px;
        margin: 0 10px 15px 0;
        color: #999;
        font-family: 'Crete Round', serif;
        font-style: italic;
    }

    .label-info {
        background-color: #5bc0de;
    }

    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: bold;
        line-height: 1;
        color: #ffffff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
    }
    .entry-meta li:first-child:before {
        display: none;
    }
    .entry-meta li:before {
        content: '/';
        display: inline-block;
        margin-right: 10px;
        opacity: 0.5;
    }
    .entry-meta li {
        float: left;
        font-size: 13px;
        line-height: 14px;
        margin: 0 10px 15px 0;
        color: #999;
        font-family: 'Crete Round', serif;
        font-style: italic;
    }

    .entry-meta li {
        float: left;
        font-size: 13px;
        line-height: 14px;
        margin: 0 10px 15px 0;
        color: #999;
        font-family: 'Crete Round', serif;
        font-style: italic;
    }

    .entry-meta li i {
        position: relative;
        top: 1px;
        font-size: 14px;
        margin-right: 3px;
    }

    .clearfix:before{
        content: " ";
        display: table;
    }

    dl,
    dt,
    dd,
    ol,
    ul,
    li {
        margin: 0;
        padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #444;
        font-weight: 600;
        line-height: 1.5;
        margin: 0 0 20px 0;
        font-family: 'Raleway', sans-serif;
    }

    #posts .entry-content {
        margin-top: 30px;
    }

    .entry-content {
        position: relative;
    }

    .entry-title h2 a:hover {
        text-decoration: none;
    }
    @media (max-width: 767px)
        .small-thumbs .entry-image, .ievent .entry-image
            float: none !important;
            width: 100% !important;
            margin: 0 0 20px !important;
        }
    }
</style>

<?php

    function ymdd($date){
        $mo = ['','January','February','March','April','May','June','July','August','September','October','November','December'];
        $da = date("D", strtotime($date));
        $day = date("d ", strtotime($date));
        $month = date("m", strtotime($date));
        $year = date("Y", strtotime($date));
        for($i=0;$i < count($mo);$i++){
            if($i==$month){
                return $da." ".$day." ".$mo[$i].", ".$year;
            }
        }
    }
    function getTime($time){
        $ti = date("H:i", strtotime($time));
        return $ti;
    }

    $event_data = $cat->post()->orderBy('event_start_date', 'DESC')->paginate(5);
?>
<div class="content-wrap">  
        <div class="container clearfix">
            <div class="clear"></div>
            <div id="posts" class="events small-thumbs">
                @foreach($event_data as $p)
                <?php  
                    $url_det = url($code.'/'.'detail'.'/'.$p->id.'/'.$p->link);
                ?>
                <div class="entry clearfix">
                    <div class="entry-image">
                        <a href="{{$url_det}}">
                            <img src="{{url('images/'.$p->image)}}">
                        </a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h2><a href="{{$url_det}}">{{$p->title}}</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><span class="label label-info">{{$p->cate->first()->name}}</span></li>
                            <li><i class="fa fa-calendar"></i> {{ ymdd($p->event_start_date) }} </li>
                            <li><i class="glyphicon glyphicon-time" style="color: #999;"></i> {{ getTime($p->event_start_date) }}  </li>
                            @if($p->link_download)<li><i class="fa fa-map-marker"></i> {{ $p->link_download }}</li>@endif
                        </ul>
                        <div class="entry-content" style="margin-top: 15px;">
                            <p></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{ $event_data->links() }}
        </div>
    </div>