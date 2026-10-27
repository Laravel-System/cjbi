<?php
    if($code == 'jp'){
        $read_more = "続きを読む";
    }else{
        $read_more = "Read More";
    }
?>
<div class="welcome">
    <div class="container">
        @foreach($cat->post as $p)
        <div class="w3l-heading">
            <h3 class="w3ls_head">{{ $p->title }}</h3>
        </div>
        <div class="bs-example bs-example-tabs welcome-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3agile_tabs">
                        @if($p->image)
                        <div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
                            <img src="{{ url('images/'.$p->image) }}" alt=" " class="img-responsive">
                        </div>
                        <div class="col-md-7 w3agile_tab_left">
                            @else
                            <div class="col-md-12 w3agile_tab_left">
                                @endif
                                <?php  
                                    $url_det = url($code.'/'.'detail'.'/'.$p->id.'/'.$p->link);
                                    if($code == 'jp'){
                                        $des = str_limit($p->description, 600, "");
                                    }else{
                                        $des = limit_text($p->description, 100);
                                    }
                                ?>
                                
                                {!! $des !!}<b><a href="<?php echo $url_det; ?>">[...] {{ $read_more }}</a></b>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
    .w3agile_tab_left p {
        /* margin: 0; */
    }
</style>