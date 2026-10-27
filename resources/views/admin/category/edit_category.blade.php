@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Edit Category</strong></h2>
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('edit/'.$cat->id.'/category') }}" method="post">
			{{ csrf_field() }}
			   <div class="col-md-11">
              <div class="form-group">
                <label>Title</label>
                <input type="text" name="name" class="form-control" value="{{ $cat->name }}">
              </div>
							<div class="form-group">
                  <label>Language</label>
                  <?php $lang = App\Language::get(); ?>
                  <select class="form-control" name="language">
                    @if(count($lang) > 0)
                      @foreach($lang as $la)
                        <option value="{{ $la->id }}" <?php  if($la->id == $cat->language){echo "selected";}  ?>> {{ $la->name }} </option>
                      @endforeach
                    @endif
                  </select>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="ckeditor" id="editor" class="form-control" rows="3">{{ $cat->description }}</textarea>
              </div>
              <div class="form-group">
                <label>Style</label>
								<select name="block" class="form-control">
									<option value="non">None</option>
                  <option value="about_us" <?php if($cat->block == "about_us"){ echo "selected";}  ?> >About Us</option>
                  <option value="about_cjbi" <?php if($cat->block == "about_cjbi"){ echo "selected";}  ?> >About Cjbi</option>
                  <option value="upcoming_event" <?php if($cat->block == "upcoming_event"){ echo "selected";}  ?> >Upcoming Event  </option>
                  <option value="event" <?php if($cat->block == "event"){ echo "selected";}  ?> >Event  </option>
                  <option value="partner" <?php if($cat->block == "partner"){ echo "selected";}  ?> >Partner</option>
 									<option value="team" <?php if($cat->block == "team"){ echo "selected";}  ?> >Team</option>
                  <option value="contact_us" <?php if($cat->block == "contact_us"){ echo "selected";}  ?> >Contact Us</option>
                   <option value="become_member" <?php if($cat->block == "become_member"){ echo "selected";}  ?> > Become Member</option>
                   <option value="slide" <?php if($cat->block == "slide"){ echo "selected";}  ?> > Slide</option>
                   <option value="welcom" <?php if($cat->block == "welcom"){ echo "selected";}  ?> > Welcome</option>
                   <option value="single" <?php if($cat->block == "single"){ echo "selected";}  ?> > Single</option>
                   <option value="information" <?php if($cat->block == "information"){ echo "selected";}  ?> > Information</option>
                   <option value="form_profile" <?php if($cat->block == "form_profile"){ echo "selected";}  ?> > Form Profile</option>
                   <option value="form_member" <?php if($cat->block == "form_member"){ echo "selected";}  ?> > Form Member</option>
                   <option value="member_login" <?php if($cat->block == "member_login"){ echo "selected";}  ?> > Login Form</option>
                   <option value="gallery" <?php if($cat->block == "gallery"){ echo "selected";}  ?> > Gallery</option>
                   <option value="video_upload" <?php if($cat->block == "video_upload"){ echo "selected";}  ?> > Video</option>
                   <option value="list_newsletter" <?php if($cat->block == "list_newsletter"){ echo "selected";}  ?> > Newsletter</option>
 								</select>
              </div>
              <div class="form-group">
                <label>Parent</label>
                <select class="form-control" name="parent_id">
								<?php $cate = App\Category::where('category_type','=','category')->get(); ?>
										<<option value="">Select Parent Category</option>
                    @foreach($cate as $c)
                      <option value="{{$c->id}}" <?php if($c->id == $cat->parent_id){echo "selected";}?> >{{$c->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="1" <?php if($cat->status == 1){echo "selected";} ?> >Active</option>
                    <option value="0" <?php if($cat->status == 0){echo "selected";} ?> >Not Active</option>
                </select>
              </div>

              <div class="form-group">
								<label>Publish Date</label>
								<div class='input-group date' id='datetimepicker1'>
										<input type='text' name="publish_date" class="form-control" value="{{ date('d-m-Y',strtotime($cat->publish_date)) }}"/>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
								</div>
							</div>
							<div class="form-group">
								<label>Unpublish Date</label>
								<div class='input-group date' id='datetimepicker2'>
										<input type='text' name="unpublish_date" class="form-control" value="{{ date('d-m-Y',strtotime($cat->unpublish_date)) }}"/>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
								</div>
							</div>
              <button type="submit" class="btn btn-primary">Submit </button>
           </div>
			</form>
		</div>
	</div>

@endsection
