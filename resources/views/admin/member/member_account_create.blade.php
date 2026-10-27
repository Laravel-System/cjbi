@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>User Create</strong></h2>   
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('member/account/create') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			   <div class="col-md-8">
				<div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label>User Name</label>
                    <input class="form-control" name="username"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" name="phone"/>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" class="form-control" name="password"/>
                </div>
                <div class="form-group">
                    <label>Comfirm Password</label>
                    <input type="password" id="confirm_pass" class="form-control" name="comfirm_password"/>
                </div>
                
                <button type="submit" id="btn_submit" class="btn btn-primary" disabled>Submit </button>

             </div>
			</form>
		</div>
	</div>
    <script>
        $("#confirm_pass").on("keyup", function(){
            console.log($(this).val());
            if($(this).val() != $("#password").val()){
                $(this).attr("style","border-color: red");
                $("#btn_submit").attr("disabled", "disabled");
            }else{
                $(this).attr("style","border-color: #66afe9");
                $("#btn_submit").removeAttr("disabled");
            }
        });
    </script>
@endsection