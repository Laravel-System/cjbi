@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Change Password</strong></h2>   
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('chang_password/'.$id)}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			   <div class="col-md-8">
            <div class="form-group">
                  <input type="password" class="form-control" id="email"
                        placeholder="New password" name="password">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" id="pwd"
                     placeholder="Confirm password" name="confirm_password">
                  </div>
                <button type="submit" class="btn btn-primary">Submit </button>
             </div>
			</form>
		</div>
	</div>
@endsection