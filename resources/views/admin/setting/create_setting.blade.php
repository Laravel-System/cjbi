@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Setting</strong></h2>
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
    @if(Request::segment(3) == 'edit')
      <form action="{{ url('setting/'.$set_id->id.'/edit') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
         <div class="col-md-11">
              <div class="form-group">
                <label>Website Name</label>
                <input type="text" name="website_name" class="form-control" value="{{ $set_id->website_name }}">
              </div>
              <div class="form-group">
                <label>Website URL</label>
                <input type="text" name="website_url" class="form-control" value="{{ $set_id->website_url }}">
              </div>
              <div class="form-group">
                <label>Language</label>
                <select class="form-control" name="language">
                  <?php $lang = App\Language::where('status','=',1)->get(); ?>
                  @foreach($lang as $langs)
                    <option value="{{ $langs->id }}" <?php if ($langs->id == $set_id->language) { echo "selected"; } ?>>{{ $langs->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $set_id->phone }}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{ $set_id->email }}">
              </div>
							<div class="form-group">
                <label>If Slide Show Only Home Page &nbsp;&nbsp;&nbsp;</label>
                <input type="checkbox" name="is_slide_only_page" value="1" <?php if($set_id->is_slide_only_page == 1){echo "checked";} ?> >
              </div>
              <div class="form-group">
                <label>Logo image</label>
                <input type="file" name="logo_image" class="form-control" id="file">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @if($set_id->logo_image)
                    <img src="{{ url('images/'.$set_id->logo_image) }}" class="close_img" style="width:100px;"/>
                    <a class="btn btn-danger closes"><i class="fa fa-ban"></i></a>
                    <input type="hidden" name="image_hidden" class="image-hidden" class="form-control" value="{{ $set_id->logo_image }}">
                @endif
              </div>
              <div class="form-group">
                <label>Text Logo</label>
                <textarea name="logo_text" class="ckeditor" id="editor2">{{ $set_id->logo_text }}
                </textarea>
              </div>
              <div class="form-group">
                <label>Favicon Image</label>
                <input type="file" name="favicon_image" class="form-control" id="file">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @if($set_id->favicon_image)
                <img src="{{ url('images/'.$set_id->favicon_image) }}" class="fav-closes" style="width:50px; height: 50px;"/>
                <a class="btn btn-danger fav-click"><i class="fa fa-ban"></i></a>
                <input type="hidden" name="fav_image_hidden" class="fav-image-hidden" class="form-control" value="{{ $set_id->favicon_image }}">
                @endif
              </div>
              <div class="form-group">
                <label>Work Time</label>
                <textarea name="work_time" class="ckeditor" id="editor_wt">{{ $set_id->work_time }}
                </textarea>
              </div>
              <div class="form-group">
                <label>Copy Right</label>
                <textarea name="copyright" class="ckeditor" id="editor">{{ $set_id->copyright }}
                </textarea>
              </div>
              <div class="form-group">
                <label>Wedsite Address</label>
                <textarea name="address_site" class="ckeditor" id="editor1">{{ $set_id->address_site }}
                </textarea>
              </div>

              <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="ckeditor" id="editor4">{{ $set_id->address }} </textarea>
              </div>
              <!-- <div class="form-group">
                <label>Facebook Page</label>
                <input name="link_fb" class="form-control" value="{{ $set_id->link_fb }}" >
              </div> -->
              <button type="submit" class="btn btn-primary">Submit </button>
              <button type="reset" class="btn btn-danger">Reset</button>
           </div>
      </form>
      <script>
          $(".closes").click(function(){
            $(this).remove();
            $(".close_img").remove();
            $(".image-hidden").removeAttr("value");
          });
          
          $(".fav-click").click(function(){
            $(this).remove();
            $(".fav-closes").remove();
            $(".fav-image-hidden").removeAttr("value");
          });
      </script>
    @else
			<form action="{{ url('create_setting') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			   <div class="col-md-12">
              <div class="form-group">
                <label>Website Name</label>
                <input type="text" name="website_name" class="form-control">
              </div>
              <div class="form-group">
                <label>Website URL</label>
                <input type="text" name="website_url" class="form-control">
              </div>
              <div class="form-group">
                <label>Language</label>
                <select class="form-control" name="language">
                  <?php $lang = App\Language::where('status','=',1)->get(); ?>
                  @foreach($lang as $langs)
                    <option value="{{ $langs->id }}">{{ $langs->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Logo image</label>
                <input type="file" name="logo_image" class="form-control" id="file">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </div>
              <div class="form-group">
                <label>Text Logo</label>
                <textarea name="logo_text" class="ckeditor" id="editor1">
                </textarea>
              </div>
              <div class="form-group">
                <label>Favicon Image</label>
                <input type="file" name="favicon_image" class="form-control" id="file">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </div>
              <div class="form-group">
                <label>Work Time</label>
                <textarea name="work_time" class="ckeditor" id="editor_wt">
                </textarea>
              </div>
              <div class="form-group">
                <label>Copy right</label>
                <textarea name="copyright" class="ckeditor" id="editor2">
                </textarea>
              </div>
              <div class="form-group">
                <label>Wedsite Address</label>
                <textarea name="address_site" class="ckeditor" id="editor"></textarea>
                
              </div>

              <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="ckeditor" id="editor4"></textarea>
              </div>
              <!-- <div class="form-group">
                <label>Facebook Page</label>
                <input type="text" name="link_fb" class="form-control">
              </div> -->
              <button type="submit" class="btn btn-primary">Submit </button>
              <button type="reset" class="btn btn-danger">Reset</button>
           </div>
			</form>
    @endif
		</div>
	</div>

@endsection
<script>
 CKEDITOR.replace( 'ckeditor1' );
</script>
<script>
 CKEDITOR.replace( 'ckeditor2' );
</script>
<script>
 CKEDITOR.replace( 'ckeditor3' );
</script>
<script>
 CKEDITOR.replace( 'ckeditor4' );
</script>
<script>
 CKEDITOR.replace( 'ckeditor_wt' );
</script>