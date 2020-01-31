@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>News and Event</strong></h2>
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
  @if(Request::is('news_events'))
  <div class="row">
		<div class="col-md-12">
		<a href="{{url('news_events/create')}}" class="btn btn-primary create" >
               Add New</a>
			<div class="panel panel-default">
				<div class="panel-heading">
                     List Courses
                </div>
				<div class="panel-body">
	                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                           <thead>
                               <tr>
                                 <th>Title</th>
                                 <th>Language</th>
                                 <th>Category</th>
                                 <th>Status</th>
                                 <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                             @if(count($post) > 0 )
                               @foreach($post as $p)
                               <tr>
                                   <td>{{ $p->title }}</td>
                                   <?php $lang = App\Language::get(); ?>
                                   <td>@foreach($lang as $language) @if($language->id == $p->language){{ $language->name }}@endif @endforeach</td>
                                   <td>@if(count($p->cate)>0)
                                         {{ $p->cate->first()->name }}
                                     @else
                                         NULL
                                     @endif

                                   </td>
                                   <td>
                                     @if($p->status == 0)
                                       Not Active
                                     @else
                                       <span>Active</span>
                                     @endif
                                   </td>
                                   <td>
                                     <a href="{{ url('news_events/'.$p->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-edit "></i></a>
                                     <a href="{{ url('news_events/'.$p->id.'/deleted') }}" class="btn btn-danger"><i class="fa fa-ban"></i></a>
                                   </td>
                               </tr>
                             @endforeach
                           @endif
                           </tbody>
                       </table>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
@elseif(Request::is('news_events/create'))
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('news_events/create') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
      <div class="col-md-6">
           <div class="form-group">
             <label>Title</label>
             <input type="text" name="title" class="form-control">
           </div>
           <div class="form-group">
             <label>Link</label>
             <input type="text" name="link" class="form-control">
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
             <label>Description</label>
             <textarea name="description" class="ckeditor" id="editor" placeholder="Enter Description"></textarea>
           </div>


        </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Link Download</label>
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
                <label>Event Start Date</label>
                  <div class='input-group date' id='datetimepicker1'>
                      <input type='text' name="event_start_date" class="form-control" />
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
              </div>

              <div class="form-group">
                <label>Event End Date</label>
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' name="event_end_date" class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
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
            </div>
            <div class="col-md-12">
                 <button type="submit" class="btn btn-primary">Submit </button>
            </div>

			</form>
		</div>
	</div>
@elseif(Request::is('news_events/'.$post->id.'/edit'))
<div class="row">
  <div class="col-md-12">
    <form action="{{ url('news_events/'.$post->id.'/edit') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-md-6">
         <div class="form-group">
           <label>Title</label>
           <input type="text" name="title" class="form-control" value="{{ $post->title }}">
         </div>
         <div class="form-group">
           <label>Link</label>
           <input type="text" name="link" class="form-control" value="{{ $post->link }}">
         </div>
          <div class="form-group">
              <label>Language</label>
              <?php $lang = App\Language::get(); ?>
              <select class="form-control" name="language">
                @if(count($lang) > 0)
                  @foreach($lang as $la)
                    <option value="{{ $la->id }}" <?php  if($la->id == $post->language){echo "selected";}  ?>> {{ $la->name }} </option>
                  @endforeach
                @endif
              </select>
          </div>
         <div class="form-group">
           <label>Categories</label><br>
             <select class="form-control" name="categorie_id[]">
             <option value="0">Select Category</option>
             @if(count($category)>0)
               @foreach($category as $c)
                 <option value="{{$c->id}}" <?php if(count($post->cate)>0){if($post->cate->first()->id == $c->id){echo "selected";}}?> >{{$c->name}}</option>
               @endforeach
             @endif
           </select>
         </div>

         <div class="form-group">
           <label>Description</label>
           <textarea name="description" class="ckeditor" id="editor" >{{ $post->description }}</textarea>
         </div>

      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="1" <?php if($post->status == 1){echo "selected";} ?> >Active</option>
                <option value="0" <?php if($post->status == 0){echo "selected";} ?> >Not Active</option>
            </select>
        </div>
        <div class="form-group">
          <label>Link Download</label>
          <input type="text" name="link_download" class="form-control" value="{{ $post->link_download }}">
        </div>
         <div class="form-group">
          <label>Event Start Date</label>
          <div class='input-group date' id='datetimepicker1'>
              <input type='text' name="event_start_date" class="form-control" value="{{ date('d-m-Y h:m:s',strtotime($post->event_start_date)) }}"/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>
        <div class="form-group">
          <label>Event End Date</label>
          <div class='input-group date' id='datetimepicker2'>
              <input type='text' name="event_end_date" class="form-control"  value="{{ date('d-m-Y h:m:s',strtotime($post->event_end_date)) }}"/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>

        <div class="form-group">
          <label>Publish Date</label>
          <div class='input-group date' id='datetimepicker1'>
              <input type='text' name="publish_date" class="form-control" value="{{ date('d-m-Y',strtotime($post->publish_date)) }}"/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>
        <div class="form-group">
          <label>Unpublish Date</label>
          <div class='input-group date' id='datetimepicker2'>
              <input type='text' name="unpublish_date" class="form-control"  value="{{ date('d-m-Y',strtotime($post->unpublish_date)) }}"/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>
        <div class="form-group">
          <label>Choose image</label>
          <input type="file" name="image" class="form-control">
          @if($post->image)
              <img src="{{ url('images/'.$post->image) }}" class="img-close" style="width:100px;"/>
              <a class="btn btn-danger closes"><i class="fa fa-ban"></i></a>
              <input type="hidden" name="image_hidden" class="image-hidden" class="form-control" value="{{ $post->image }}">
          @endif
        </div>
        <div class="form-group">
          <label>Choose Image Multi Upload</label>
          <input type="file" name="image_multi[]" class="form-control" multiple>
          @if($post->image_post)
            @foreach ($post->image_post as $key => $value)
                <img src="{{ url('images/'.$value->image) }}" class="mult-img-close" style="width:100px;"/>
            @endforeach
            @if($post->image_post->sum('post_id') > 0)
                <a class="btn btn-danger mult_closes"><i class="fa fa-ban"></i></a>
                <input type="hidden" id="mult_image_hidden" name="mult_image_hidden" class="image-hidden" class="form-control" value="1">
            @endif
         @endif
        </div>
     </div>
      <div class="col-md-12">
           <button type="submit" class="btn btn-primary">Submit </button>
     </div>
    </form>
  </div>
</div>
@endif
<script>
    $(".closes").click(function(){
        $(this).remove();
        $(".image-hidden").removeAttr("value");
        $(".img-close").remove();
    });
    
    $(".mult_closes").click(function(){
        $(this).remove();
        $("#mult_image_hidden").attr("value","0");
        $(".mult-img-close").remove();
    });
</script>
@endsection