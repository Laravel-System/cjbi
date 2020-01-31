<?php
    if(Request::segment(1) == 'kh'){
        $language = "ភាសា";
    }elseif(Request::segment(1) == 'en'){
        $language = "Language";
    }elseif(Request::segment(1) == 'cn'){
        $language = "语言";
    }else{
        $language = "Language";
    }
?>
<?php $lang = App\Language::where('status','=',1)->get(); ?>
<?php
    function display_menu($parent_id = 0){
        if(Request::segment(1) == 'kh'){
            $local= 2;
        }elseif(Request::segment(1) == 'cn'){
            $local= 3;    
        }elseif(Request::segment(1) == 'en'){
            $local= 1;
        }else{
            $local= 1;
        }
        $menu = App\Menu::where('parent_id', $parent_id)->where('language',$local)->where('status',1)->orderBy('ordering')->get();
        // echo "<ul>";
          foreach($menu as $key => $val){
            //$url_current = url()->current();

            if(Request::segment(1) == 'en'){
                if($val->link != "#"){
                    $url = url('en/'.$val->link);
                }else{
                    $url = url($val->link);  
                }
                $url_current = Request::segment(2);
            }elseif(Request::segment(1) == 'kh'){
                if($val->link != "#"){
                    $url = url('kh/'.$val->link);
                }else{
                    $url = url($val->link);  
                }
                 $url_current = Request::segment(2);
            }elseif(Request::segment(1) == 'cn'){
                if($val->link != "#"){
                    $url = url('cn/'.$val->link);
                }else{
                    $url = url($val->link);  
                }
                $url_current = Request::segment(2);
            }else{ 
                $url = url($val->link);
                $url_current = Request::segment(1);
            }
            if($url_current == $val->link){
                $active = "class=active";
            }else{ 
                
                $active = "";
            }
            
            echo '<li '.$active.'><a  href="'.$url.'" >'.$val->name.'</a>';

            //sub menu 1
            $submenu = App\Menu::where('parent_id',$val->id)->where('status',1)->where('language',$local)->get();
            if(count($submenu )> 0){
                echo '<ul class="submenu">';
                foreach ($submenu as $keys => $values){
                    echo '<li><a href="#">'.$values->name.'<span class="pull-right">+</span></a>';
                    //sub menu 2
                    $submenu_sub = App\Menu::where('parent_id',$values->id)->where('status',1)->where('language',$local)->get();
                    if(count($submenu_sub) > 0){
                    echo '<ul class="submenu">';
                    foreach ($submenu_sub as $k => $v) {
                        echo '<li><a href="#">'.$v->name.'<span class="pull-right">+</span></a></li>';
                    }
                    echo '</ul>';
                    }
                    // end sub menu 2

                    echo '</li>';
                }
                echo '</ul>';
            }    
            // end sub menu 1

            // display_menu($val->id);
            echo"</li>";
            
        }
        // echo "</ul>";
    } 
?>
<style type="text/css">
    ul.submenu {
        display: block;
        justify-content: normal;
    }
    .contact-icon {
        display: flex;
    }
    .header-bottom {
        box-shadow: 0px 1px 1px rgba(0,0,0,.1);
    }
    @media(max-width: 430px) {
        .contact-info-lang {
            display: none;
        }
    }
    @media (min-width: 992px) and (max-width: 1440px) {
        .contact-info-lang {
            display: none;
        }
    }
</style>
    <div class="header-bottom"  id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                    <?php
                        $web_name = App\Setting::where('language',$local)->first();
                        $local_lang = App\Language::where('id','=',$local)->first();
                    ?>
                    <div class="logo">
                        <h1><a href="{{url($local_lang->code.'/')}}">{{$web_name->website_name}}</a></h1>
                    </div>
                </div>
                <div class="col-md-11 hidden-sm hidden-xs">
                    <div class="mainmenu">
                        <ul id="navigation">
                            <?php display_menu(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-3">
                    <!-- <div class="search-wrap text-right">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="header-middle-right" style="margin-top: 20px;">
                        <div class="mainmenu">
                            <ul>
                                <li>
                                    <div class="contact-icon">
                                        <i style="color: #296dc1" class="fa fa-language"></i>
                                        <div class="contact-info contact-info-lang" style="margin-top: 5px; width: 50px">
                                            <span style="color: #296dc1">{{ $language }}</span>
                                        </div>
                                    </div>
                                    <ul class="submenu">
                                        @foreach($lang as $la)  
                                            <li>
                                                @if(count($link) > 0)
                                                <a href="{{ url($la->code.'/'.$link)  }}">
                                                    <img src="{{ url('images/'.$la->image) }}" width="20px" height="20px" alt="No Image">
                                                    {{ $la->name }}
                                                </a>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
                    <div class="responsive-menu-wrap floatright"></div>
                </div>
            </div>
        </div>
    </div>
</header>