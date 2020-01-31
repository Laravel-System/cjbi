@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Edit Menu</strong></h2>   
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
			<form action="" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			   <div class="col-md-11">
              <div class="form-group">
                <label>Title</label>
                <input type="text" name="name" class="form-control" value="{{ $menu->name }}">
              </div>
              <div class="form-group">
                <label>Parent</label>
                 <select name="parent_id" class="form-control">
                 <option value="0">Please select parent</option>
                  @foreach($menus as $m)
                      @if($m->language == $menu->language)
                        <option value="{{ $m->id }}" <?php if($m->id == $menu->parent_id){ echo 'selected'; } ?> >{{ $m->name }}</option>
                      @endif
                   @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" class="form-control" value="{{ $menu->link }}">
              </div>
              <div class="form-group">
                  <label>Language</label>
                  <?php $lang = App\Language::get(); ?>
                  <select class="form-control" name="language">
                    @if(count($lang) > 0)
                      @foreach($lang as $la)
                        <option value="{{ $la->id }}" <?php  if($la->id == $menu->language){echo "selected";}  ?>> {{ $la->name }} </option>
                      @endforeach
                    @endif
                  </select>
              </div>
              <div class="form-group">
                  <label>Menu Type</label>
                    <select name="menu_type" class="form-control">
                      <option value="">Please select menu type</option>
                    @foreach($menu_type as $me)
                      <option value="{{ $me->id }}" <?php if(count($menu->menu_type) > 0){ if($menu->menu_type->id == $me->id){echo "selected";} }?>  >{{  $me->name }}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label>Ordering</label>
                 <select name="ordering" class="form-control">
                 <option value="0">Please select menu order</option>
                    @foreach($menus as $m)
                        @if($menu->language == $m->language)
                          <option value="{{ $m->ordering }}" <?php if($m->id == $menu->id){ echo 'selected'; } ?> >{{ $m->name }}</option>
                        @endif
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1" <?php if($menu->status == 1){echo "selected";} ?> >Active</option>
                        <option value="0" <?php if($menu->status == 0){echo "selected";} ?> >Not Active</option>
                    </select>
                </div>
              <div class="form-group">
                <label>Choose image</label>
                <input type="file" name="image" class="form-control">
                @if($menu->image)
                    <img src="{{ url('images/'.$menu->image) }}" class="img-close" width="50px" height="50px">
                    <a class="btn btn-danger closes"><i class="fa fa-ban"></i></a>
                    <input type="hidden" name="image_hidden" class="image-hidden" class="form-control" value="{{ $menu->image }}">
                @else 
                    <p></p>
                @endif
              </div>
           <!--   <div class="form-group">-->
           <!--     <label>Class Module</label>-->
           <!--     <input type="text" name="modul_class" class="form-control" value="{{ $menu->modul_class }}">-->
           <!--   </div>-->
              <!--<p style="font-size:12px;"> <b style="color:red;">Note : </b> (Lavel 1: <&nbsp;i&nbsp; class="fa fa-caret-down"><&nbsp;/i&nbsp;> Lavel 2: <&nbsp;i&nbsp; class="fa fa-caret-right" &nbsp;>&nbsp;<&nbsp;/&nbsp;i>&nbsp; )</p>-->
              <button type="submit" class="btn btn-primary">Submit </button>
           </div>
			</form>
		</div>
	</div>
	<script>
	    $(".closes").click(function(){
	        $(this).remove();
	        $(".image-hidden").removeAttr("value");
	        $(".img-close").remove();
	    });
	</script>
@endsection