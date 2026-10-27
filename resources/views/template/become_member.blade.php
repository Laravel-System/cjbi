<style>
    .become-mem-center {
        margin: 12% 0;
        text-align: center;
    }
    .become-member {
        background-color: #002B71;
        color: #fff;
        padding: 16px;
        font-size: 22px;
    }

    .become-member:hover,
    .become-member:focus {
        color: red;
        text-decoration: none;
    }
</style>
<style>
    /* upcoming events */
    #content {
        position: relative;
        overflow: hidden;
        background-color: #FFF;
    }

    #content .container {
        position: relative;
    }

    .intro-txt {
        padding-left: 0;
    }

    .upcoming-event-widget-wrapper {
        background-color: #2a388f;
        padding: 30px;
        overflow-y: scroll;
        height: 340px;
    }

    .radius-bordered {
        border-radius: 5px;
    }

    .nobottommargin {
        margin-bottom: 0 !important;
    }

    .upcoming-event-widget-wrapper .widget-title,
    .upcoming-event-widget-wrapper .entry-title h4 a {
        color: #fff;
    }

    .entry-c {
        position: relative;
        overflow: hidden;
    }

    .widget-title {
        text-transform: uppercase;
    }

    .event-date {
        float: left;
        width: 55px;
        height: 55px;
        margin-right: 10px;
        color: #fff;
        border: 1px solid #ffffff;
        border-radius: 3px;
        position: relative;
        display: inline-block;
        text-align: center;
    }

    .event-date li {
        list-style: none;
    }

    .spost.clearfix:hover .event-date {
        color: #fff100;
        border: 1px solid #fff100;
    }

    .spost .entry-title h4,
    .mpost .entry-title h4 {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
    }

    .spost .entry-meta {
        margin: 8px -10px 0 0;
    }

    .entry-meta {
        margin: 10px -10px -15px 0;
        list-style: none;
    }

    .spost,
    .mpost {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px dashed #E5E5E5;
    }

    .event-date span {
        display: block;
    }

    .home-latest-news .widget-title,
    .home-latest-news .entry-title h4 a,
    .upcoming-event-widget-wrapper h4 {
        color: #fff;
    }

    .month {
        font-size: 12px;
        line-height: 5px;
    }

    .day {
        font-size: 23px;
        font-weight: bold;
    }

    .upcoming-event-widget-wrapper .spost .entry-meta li,
    .home-latest-news .spost .entry-meta li {
        color: #cccccc;
    }

    .eurocham .entry-meta li {
        border-radius: 3px;
        color: #fff !important;
        padding: 3px;
        background-color: #ed1c24;
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

    .read-more-on-b {
        margin-top: 25px;
        padding: 20px;
        border-top: 1px dashed #E5E5E5;
    }

    .read-more-on-b a:hover {
        color: #fff100 !important;
    }

    .read-more-on-b a {
        color: #fff;
    }

    #scrollbar1::-webkit-scrollbar {
        width: 7px;
        background-color: #F5F5F5;
    }

    #scrollbar1::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        border-radius: 3px;
        background: rgba(42, 56, 143, .6);
    }

    #scrollbar1::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #F5F5F5;
    }

    ::selection {
        background: #283991;
    }

    ::selection {
        background: #1ABC9C;
        color: #FFF;
        text-shadow: none;
    }

    p {
        color: #555;
        line-height: 1.8em;
        margin: 1em 0 0 0;
        text-align: justify;
        font-size: 16px;
    }

    .w3layouts_register_left {
        padding: 0 !important;
    }

    /* end upcoming envents */
</style>
<?php 
    $up_com = App\Post::with(['cate'])->where('language',$local)->where('post_type','news_event')->whereHas('cate',function($q){$q->where('category.id',13);})->get();
    if($code == 'jp'){
        $btn_be = "CJBIの会員になるためには";
        $up_comming = "今後開催されるイベント";
        $view_allup = "今後のイベントをすべて表示";
    }else{
        $btn_be = "BECOME A MEMBER";
        $up_comming = "Upcoming Events";
        $view_allup = "View All Upcoming Events";
    }
    function month($date){
        $mo = ['','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $month = date("m", strtotime($date));
        for($i=0;$i < count($mo);$i++){
            if($i==$month){
                return $mo[$i];
            }
        }
    }
	$img_banner = $cat->post()->first();
?>
<div class="register" style="background: url({{url('images/'.$img_banner->image)}})">
    <div style="background: rgba(0,0,0,.5)">
        <div class="container">
            <div class="col-md-12 w3layouts_register_left">
                @if(Request()->session()->get('member_id') == 0)
                <div class="col-lg-3" style="padding: 0;">
                    @include('template.layout.form_login_side')
                </div>
                <div class="col-md-5 become-mem-center">
                <a href="{{url('become-a-member')}}" class="become-member">{{$btn_be}}</a>
                @else
                <div class="col-md-8">
                
                @endif
                    
                </div>
                <div class="col-md-4 upcoming-event-widget-wrapper radius-bordered clearfix" id="scrollbar1">
                    <div class="nobottommargin">
                        <h3 class="widget-title" style="font-size: 1.5em;">{{$up_comming}}</h3>

                        @foreach($up_com as $p)
                        <?php  
                            $url_de = url($code.'/detail'.'/'.$p->id.'/'.$p->link);
                        ?>
                        <div class="spost clearfix eurocham">
                            <a href="{{$url_de}}" target="_blank">
                                <div class="entry-c">
                                    <div class="event-date">
                                        <li><span
                                                class="day"><?php echo date("d", strtotime($p->event_start_date)) ?></span><span
                                                class="month">{{month($p->event_start_date)}}</span></li>
                                    </div>
                                    <div class="entry-title">
                                        <h4>{{$p->title}}</h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>{{$p->cate[0]->name}}</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        <div class="read-more-on-b"><a class="view-more" href="{{url('upcoming-event')}}"
                                target="_blank">{{$view_allup}} &gt;&gt;</a></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
