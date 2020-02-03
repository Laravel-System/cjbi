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
              <div class="form-group">
                <label>Choose Image Multi Upload</label>
                <button type="button"  data-toggle="modal" data-target="#myModal">Choose Image Multi Upload</button>
                </div>
              <button type="submit" class="btn btn-primary">Submit </button>
           </div>
			</form>
		</div>
	</div>

  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button> -->
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>

            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Upload</a>

                        </li>
                        <li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Browse</a>

                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab"><br> 
                          <form method="post" enctype="multipart/form-data">
                            <label>Choose Image Multi Upload</label>
                            <input type="file" name="image_multi[]" class="form-control upload" multiple>
                          </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="browseTab">
                          <nav class="navbar navbar-light blue lighten-4">
                             <a href=""> <span class="navbar-brand border thumbnail">Photo</span></a>
                             <a href=""> <span class="navbar-brand border thumbnail">Photo</span></a>
                             <a href=""> <span class="navbar-brand border thumbnail">Photo</span></a>
                             <a href=""> <span class="navbar-brand border thumbnail">Photo</span></a>
                             <a href=""> <span class="navbar-brand border thumbnail">Photo</span></a>
                             <a href=""> <span class="navbar-brand border thumbnail">Photo</span></a>
                          </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      })            
     
      $('body').on('change','.upload', function(){
        var url_get = "{{url('get_image_folder')}}";
        $.ajax({
            type: "GET",
            url: url_get,
            dataType: "json",
            success: function (result, xhr) {
                // if(url != "export_to_excel"){
                console.log(result);                  
            },
            error: function (result) {
                console.log(result.stutus);
            }
        });
      });
  });
</script>
@endsection
