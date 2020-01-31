<?php   
    $setting= App\Setting::where('language',$local)->get();
    $widget = App\Widget::where('language',$local)->get();
?>
<footer>
	<div class="footer-top ptb-70-0">
		<div class="container">
			<div class="row">
                @foreach($widget as $wid)
                    @foreach($setting as $settings)
                        @if($wid->position == 'footer_1')
                            @if($wid->page_side)
                                <?php  $tem = $wid->page_side; ?>
                            @else
                                <?php   $tem = "non"; ?>
                            @endif
                                @include('template.'.$tem)
                        @endif
                    
                        @if($wid->position == 'footer_2')
                            @if($wid->page_side)
                                <?php  $tem = $wid->page_side; ?>
                            @else
                                <?php   $tem = "non"; ?>
                            @endif
                                @include('template.'.$tem)
                        @endif

                        @if($wid->position == 'footer_3')
                            @if($wid->page_side)
                                <?php  $tem = $wid->page_side; ?>
                            @else
                                <?php   $tem = "non"; ?>
                            @endif
                                @include('template.'.$tem)
                        @endif

                        @if($wid->position == 'footer_4')
                            @if($wid->page_side)
                                <?php  $tem = $wid->page_side; ?>
                            @else
                                <?php   $tem = "non"; ?>
                            @endif
                                @include('template.'.$tem)
                        @endif
                    @endforeach
                @endforeach
			</div>
		</div>
	</div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @foreach($setting as $set)
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> {{ strip_tags($set->copyright) }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>