<?php
    if(Request::segment(1) == 'jp'){
        $language = "ភាសា";
    }elseif(Request::segment(1) == 'en'){
        $language = "Language";
    }else{
        $language = "Language";
    }
 
?>
<?php $lang = App\Language::where('status','=',1)->get(); ?>
<?php
    function display_menu($parent_id = 0){
        if(Request::segment(1) == 'jp'){
            $local= 2;
        }elseif(Request::segment(1) == 'en'){
            $local= 1;
        }else{
            $local= 1;
        }
        $menu = App\Menu::where('parent_id', $parent_id)->where('language',$local)->where('status',1)->orderBy('ordering')->get();
        // echo "<ul>";
          foreach($menu as $key => $val){
              $sub_menu = App\Menu::where('parent_id', $val->id)->where('language',$local)->where('status',1)->orderBy('ordering')->get();
              
            if(Request::segment(1) == 'en'){
                if($val->link != "#"){
                    $url = url('en/'.$val->link);
                }else{
                    $url = url($val->link);  
                }
                $url_current = Request::segment(2);
            }elseif(Request::segment(1) == 'jp'){
                if($val->link != "#"){
                    $url = url('jp/'.$val->link);
                }else{
                    $url = url($val->link);  
                }
                 $url_current = Request::segment(2);
            }else{ 
                $url = url($val->link);
                $url_current = Request::segment(1);
            }
            if($url_current == $val->link ){
                $active = "class=active";
            }else{
                $active = "";
            }
            
            if(count($sub_menu) > 0){
                $par_active = App\Menu::where('link','=',$url_current)->where('language',$local)->first();
                if(count($par_active) > 0){
                    $act = $par_active->parent_id == $val->id?"active":"";
                }else{
                    $act = "";
                }
                echo '<li class="dropdown '.$act.'">';
                echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span data-hover="'.$val->name.'">'.$val->name.'</span> <b class="caret"></b></a>';
                echo '<ul class="dropdown-menu agile_short_dropdown">';
                foreach($sub_menu as $s){
                    $sub_active = $url_current==$s->link?"class=active":"";
                    $sub_url = url(Request::segment(1).'/'.$s->link);
                    echo '<li '.$sub_active.'><a href="'.$sub_url.'">'.$s->name.'</a></li>';
                }
                echo '</ul>';
                echo '</li>';
            }else{
                echo '<li '.$active.'> 
                    <a  href="'.$url.'" >'.$val->name.'</a>';
                // display_menu($val->id);
                echo "</li>";  
            }
        }
        // echo "</ul>";
    } 
?>
<?php
    $seg = Request()->segments();
    $str_seg = '';
    for($i=1;$i<count($seg);$i++){
        $str_seg .= $seg[$i]."/";
    }
?>
<div class="header">
    <div class="header_left">
        <a href="{{url('/')}}">
            <img class="collapsed" src="{{url('images/logo-cjbi2.jpg')}}" width="50%">
        </a>
    </div>
    <div class="header_right">
        <div class="agileinfo-social-grids">
            <ul>
                <li><a href="{{url('en/'.$str_seg)}}" style="color: #3c52a4">EN</a></li> <!--<img src="{{url('images/en.jpg')}}" alt="" srcset="">-->
                <li><a href="{{url('jp/'.$str_seg)}}" style="color: #3c52a4">JP</a></li> <!--<img class="img-jp" src="{{url('images/jp.jpg')}}" alt="" srcset="">-->
                
            </ul>
            
            <div class="cd-main-header">
                <a class="cd-search-trigger" href="#cd-search"> <span></span></a>
                <!-- cd-header-buttons -->
            </div>
            <div id="cd-search" class="cd-search">
                <form action="{{url($code.'/search/content')}}" method="get">
                    <input name="search" type="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- menu -->
<div class="header-bottom" id="navbar">
    <nav class=" navbar navbar-default">
        <div class="navbar-header navbar-left">
            <!-- <img class="collapsed" src="images/logo.gif" width="50%"> -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                    <?php display_menu(); ?>
                </ul>
            </nav>
        </div>
        <div class="agileinfo-social-grids">
            <ul>
                <li><a href="https://www.facebook.com/cjbi.asia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                @if(Request()->session()->get('member_id') != 0)
                <li><a href="{{url($code.'/member/logout')}}"><i class="fa fa-sign-out"></i></a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>
<style>
    .agileinfo-social-grids {
        display: -webkit-inline-box;
    }
    .header_left {
        float: left;
        margin: 2px 15px;
        /* width: 95% !important; */
    }

    .navbar-nav {
        margin: 0px 41px;
    }

    #navbar {
        margin-bottom: 0;
        z-index: 600;
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky+.content {
        padding-top: 60px;
    }
    .agileinfo-social-grids ul li a i {
        color: #3c52a4;
    }
    .agileinfo-social-grids ul li a img.img-jp {
        margin: 0 1em;
    }
</style>
<script>
    window.onscroll = function () {
        myFunction()
    };
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>