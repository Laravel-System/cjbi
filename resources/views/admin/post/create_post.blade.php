@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Create Post</strong></h2>
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('create_post') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			   <div class="col-md-11">
              <div class="form-group">
                <label> Title</label>
                <input type="text" name="title" class="form-control">
              </div>

               <div class="form-group">
                <label>Categories</label><br>
                  <select class="form-control" name="categorie_id[]">
                    <option value="0">Select Category</option>
                    @if(count($category)>0)
                      @foreach($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                    @endif
                  </select>
              </div>
              <div class="form-group">
                  <label>Language</label>
                  <?php $lang = App\Language::get(); ?>
                  <select class="form-control" name="language">
                      @if(count($lang) > 0)
                          @foreach($lang as $la)
                            <option value="{{ $la->id }}"> {{ $la->name }} </option>
                          @endforeach
                      @endif
                  </select>
              </div>
              <div class="form-group">
                <label>Post Format</label><br>
                  <select class="form-control" name="categorie_id[]">
                    <option value="0">Select Post Format</option>
                    <option value="standard">Standard</option>
                    <option value="file">File</option>
                    <option value="image">Image</option>
                    <option value="gallery">Gallery</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="ckeditor" id="editor" placeholder="Enter Description"></textarea>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="text" name="link_download" class="form-control">
              </div>
              <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Not Active</option>
                  </select>
              </div>
              <div class="form-group">
              <label>Publish Date</label>
              <div class='input-group date' id='datetimepicker1'>
                  <input type='text' name="publish_date" class="form-control" />
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
            <div class="form-group">
              <label>Unpublish Date</label>
              <div class='input-group date' id='datetimepicker2'>
                  <input type='text' name="unpublish_date" class="form-control" />
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
              <div class="form-group">
                <label>Choose Image Feature</label>
                <input type="file" name="image" class="form-control">
              </div>
							<div class="form-group">
                <label>Choose Image Multi Upload</label>
                <input type="file" name="image_multi[]" class="form-control" multiple>
              </div>
              <button type="submit" class="btn btn-primary">Submit </button>
           </div>
			</form>
		</div>
	</div>

@endsection
