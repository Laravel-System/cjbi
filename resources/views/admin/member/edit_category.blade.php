@extends('admin.layout.master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ url('member_category/'.$cat->id.'/edit') }}" method="post">
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
              <textarea name="description" class="ckeditor" id="editor" placeholder="Enter Description">{{ $cat->description }}</textarea>
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
                  <input type='text' name="unpublish_date" class="form-control"  value="{{ date('d-m-Y',strtotime($cat->unpublish_date)) }}"/>
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