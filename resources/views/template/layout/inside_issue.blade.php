<div class="col-md-3 col-sm-12 wthree-services-right">
    <div class="sidebar nobottommargin  clearfix">
        <div class="sidebar-widgets-wrap">
            @if(Request()->has('list_new'))
            <?php $post_type = DB::table('category_of_post')->where('language',$code=='en'?1:2)->get(); ?>
            <div class="widget widget_links clearfix">
                <h4>{{ $news }}</h4>
                <ul>	
                   @foreach($post_type as $p)
                    <li><a href="{{ url($code.'/news?list_new='.Request()->list_new.'&post_type='.$p->id) }}"><div>{{ $p->name }}</div></a></li>
                   @endforeach
                </ul>
            </div>
            @endif
            <div class="widget clearfix">
                <div class="side_login" style="padding: 0;">
                    @include('template.layout.inside_issue_form')
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .postcontent.col_last,
    .sidebar.col_last {
        float: right;
        border-left: #e5e5e5;
        border-left-style: solid;
        border-left-width: 2px;
    }

    /* subscript */
    .sub {
        background-color: #2a388f;
        padding: 20px;
        color: #fff;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .here {
        text-align: center;
        color: #fff;
        margin: 0;
    }

    .clearfixs {
        margin-bottom: 20px;
    }

    .b {
        margin-bottom: 10px;
        padding-left: 0;
        padding-right: 0;
    }

    /* end sub */
    .col_last {
        margin-right: 0 !important;
        clear: right;
    }

    .postcontent,
    .sidebar {
        margin-right: 40px;
    }

    .postcontent,
    .sidebar,
    .col_full,
    .col_half,
    .col_one_third,
    .col_two_third,
    .col_three_fourth,
    .col_one_fourth,
    .col_one_fifth,
    .col_two_fifth,
    .col_three_fifth,
    .col_four_fifth,
    .col_one_sixth,
    .col_five_sixth {
        display: block;
        position: relative;
        margin-right: 4%;
        margin-bottom: 50px;
        float: left;
    }

    .sidebar {
        width: 240px;
    }

    .sidebar-widgets-wrap,
    .widget.widget_links small {
        padding-left: 10px;
    }

    .sidebar-widgets-wrap .widget:first-child {
        padding-top: 0;
        border-top: 0;
    }

    .sidebar-widgets-wrap .widget {
        padding: 0;
        border: none;
    }

    .widget:first-child {
        margin-top: 0;
    }

    /* .sidebar-widgets-wrap .widget {
        padding-top: 50px;
        border-top: 1px solid #EEE;
    } */

    .widget {
        position: relative;
        margin-top: 50px;
    }

    .sidebar-widgets-wrap .widget>h4 {
        letter-spacing: 1px;
    }

    .widget a {
        width: 100%;
    }

    .widget>h4 {
        margin-bottom: 25px;
        font-size: 18px;
        color: #283991;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .widget_nav_menu>ul>li:first-child,
    .widget_links>ul>li:first-child,
    .widget_meta>ul>li:first-child,
    .widget_archive>ul>li:first-child,
    .widget_recent_comments>ul>li:first-child,
    .widget_recent_entries>ul>li:first-child,
    .widget_categories>ul>li:first-child,
    .widget_pages>ul>li:first-child,
    .widget_rss>ul>li:first-child {
        border-top: 0 !important;
    }

    .widget_nav_menu li,
    .widget_links li,
    .widget_meta li,
    .widget_archive li,
    .widget_recent_comments li,
    .widget_recent_entries li,
    .widget_categories li,
    .widget_pages li,
    .widget_rss li {
        padding: 4px;
    }

    .widget_nav_menu ul,
    .widget_nav_menu li,
    .widget_links ul,
    .widget_links li,
    .widget_meta ul,
    .widget_meta li,
    .widget_archive ul,
    .widget_archive li,
    .widget_recent_comments ul,
    .widget_recent_comments li,
    .widget_recent_entries ul,
    .widget_recent_entries li,
    .widget_categories ul,
    .widget_categories li,
    .widget_pages ul,
    .widget_pages li,
    .widget_rss ul,
    .widget_rss li {

        margin: 0;
        margin-left: 10px;
    }

    .widget_nav_menu li a,
    .widget_links li a,
    .widget_meta li a,
    .widget_archive li a,
    .widget_recent_entries li a,
    .widget_categories li a,
    .widget_pages li a,
    .widget_rss li a,
    .widget_recent_comments li a {
        background: url(icon.png) left top no-repeat;
        border: none !important;
        color: #444;
        font-size: 14px;
    }

    .sidebar-widgets-wrap .widget>h4 {
        letter-spacing: 1px;
    }

    .widget>h4 {
        margin-bottom: 25px;
        font-size: 18px;
        color: #283991;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .spost:first-child,
    .mpost:first-child {
        margin-top: 0;
        padding-top: 0;
        border-top: 0;
    }

    .spost,
    .mpost {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px dashed #E5E5E5;
    }

    .entry-c {
        position: relative;
        overflow: hidden;
    }

    .spost .entry-title h4,
    .mpost .entry-title h4 {
        margin: 0;
        font-size: 14px;
        font-weight: 500;

    }

    .entry-title h4 a {
        text-decoration: none;
    }

    .spost .entry-meta {
        margin: 8px -10px 0 0;
    }

    .entry-meta {
        margin: 10px -10px -15px 0;
        list-style: none;
    }

    .spost .entry-meta li,
    .mpost .entry-meta li {
        font-size: 13px;
        margin: 0 10px 0 0;
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

    /*  */

    #primary-menu.style-3>ul>li.current>a,
    #primary-menu.sub-title>ul>li:hover>a,
    #primary-menu.sub-title>ul>li.current>a,
    #primary-menu.sub-title>div>ul>li:hover>a,
    #primary-menu.sub-title>div>ul>li.current>a,
    #top-cart>a>span,
    #page-menu-wrap,
    #page-menu.dots-menu nav li.current a,
    #page-menu.dots-menu nav li .dots-menu-caption,
    #portfolio-filter li.activeFilter a,
    #portfolio-shuffle:hover,
    .entry-link:hover,
    .sale-flash,
    .button:not(.button-white):not(.button-dark):not(.button-border):not(.button-black):not(.button-red):not(.button-teal):not(.button-yellow):not(.button-green):not(.button-brown):not(.button-aqua):not(.button-purple):not(.button-leaf):not(.button-pink):not(.button-blue):not(.button-dirtygreen):not(.button-amber):not(.button-lime),
    .button.button-dark:hover,
    .promo.promo-flat,
    .feature-box .fbox-icon i,
    .feature-box .fbox-icon img,
    .fbox-effect.fbox-dark .fbox-icon i:hover,
    .fbox-effect.fbox-dark:hover .fbox-icon i,
    .fbox-border.fbox-effect.fbox-dark .fbox-icon i:after,
    .i-rounded:hover,
    .i-circled:hover,
    ul.tab-nav.tab-nav2 li.ui-state-active a,
    .testimonial .flex-control-nav li a,
    .skills li .progress,
    .owl-theme .owl-dots .owl-dot span,
    #gotoTop:hover,
    .dark .button-dark:hover,
    .dark .fbox-effect.fbox-dark .fbox-icon i:hover,
    .dark .fbox-effect.fbox-dark:hover .fbox-icon i,
    .dark .fbox-border.fbox-effect.fbox-dark .fbox-icon i:after,
    .dark .i-rounded:hover,
    .dark .i-circled:hover,
    .dark ul.tab-nav.tab-nav2 li.ui-state-active a,
    .dark .tagcloud a:hover,
    .ei-slider-thumbs li.ei-slider-element {
        background-color: #283991;
    }

    body:not(.device-touch) .button {
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

    .button:hover {
        color: #fff100;
    }

    .button.button-rounded {
        border-radius: 3px;
        text-decoration: none;
    }

    .button,
    .bordered-btn {
        text-align: center;
        margin-left: 0;
        margin-bottom: 10px;
        min-width: 200px;
    }

    .button {
        display: inline-block;
        position: relative;
        cursor: pointer;
        outline: none;
        white-space: nowrap;
        margin: 5px;
        padding: 0 22px;
        font-size: 14px;
        height: 40px;
        line-height: 40px;
        background-color: #1ABC9C;
        color: #FFF;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    }

    .btn-red {
        background-color: #ed1c24 !important;
    }

    .sidebar-widgets-wrap h2 {
        font-size: 20px;
    }

    .subscribe-widget h5 {
        font-weight: 300;
        font-size: 14px;
        line-height: 1.5;
    }
    .wthree-services-right > h1, h2, h3,  h4, h5, h6 {
        color: #444;
        /* font-weight: 600; */
        line-height: 1.5;
        margin: 0 0 20px 0;
        /*font-family: 'Raleway', sans-serif;*/
    }

    .spost .entry-title h4 a,
    .mpost .entry-title h4 a {
        color: #333;
    }

    .widget_links ul li a {
        text-decoration: none;
    }
    .widget_links > ul > li {
        margin-left: 10px;
        list-style: none;
    }
</style>
<style>
#html_element {
    transform:scale(0.65);
    -webkit-transform:scale(0.65);
    transform-origin:0 0;
    -webkit-transform-origin:0 0;
}
.aside--login dd {
    background-color: #fff;
}
.aside--login-txt {
    padding: 10px 0;
}
</style>