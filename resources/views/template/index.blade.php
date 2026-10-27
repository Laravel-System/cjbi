<?php
      function limit_text($text, $limit) {
            if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '';
            }
            return $text;
      }
      function last_text($text, $limit) {
            if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '';
            }
            return $text;
      }
?>
@extends('template.layout.master')

@section('content')

@if(count($page) > 0)

@if($page->description)
            @include('frontend.single_page') 

<?php   $cate_product = App\Category::where('category_type','=','product')->get();   ?>
<!-- position_1 -->
@elseif(count($page->categories) > 0)
<?php
      $key = 0;
      foreach($page->categories as $c){
            if($c->block == 'slide')$key=1;
      }
?>
 @if($key == 0)@include('template.banner')@endif

            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_1')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                        @include('template.'.$tem)

            @endif

            @endforeach

            <!-- position_2 -->

            @foreach($page->categories as $cat)
                  @if($cat->cat_position->position == 'position_2')

                        @if($cat->block)
                              <?php  $tem = $cat->block; ?>
                        @else
                              <?php   $tem = "non"; ?>
                        @endif

                        @include('template.'.$tem)
                  @endif
            @endforeach

            <!-- position_3 -->

            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_3')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                        @include('template.'.$tem)
            @endif
            @endforeach

            <!-- position_4 -->
            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_4')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                  @include('template.'.$tem)
            @endif
            @endforeach

            <!-- position_5 -->
            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_5')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                  @include('template.'.$tem)
            @endif
            @endforeach


            <!-- position_6 -->
            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_6')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                  @include('template.'.$tem)
            @endif
            @endforeach

            <!-- position_7 -->
            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_7')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                  @include('template.'.$tem)
            @endif
            @endforeach

            <!-- position_8 -->
            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_8')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                  @include('template.'.$tem)
            @endif
            @endforeach

            <!-- position_9 -->
            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_9')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                  @include('template.'.$tem)
            @endif
            @endforeach

            <!-- position_10 -->
            @foreach($page->categories as $cat)
            @if($cat->cat_position->position == 'position_10')
                  @if($cat->block)
                        <?php  $tem = $cat->block; ?>
                  @else
                        <?php   $tem = "non"; ?>
                  @endif
                  @include('template.'.$tem)
            @endif
            @endforeach
      @else
      @include('template.non')

      @endif
@else
    @include('template.non')
@endif
            
@endsection