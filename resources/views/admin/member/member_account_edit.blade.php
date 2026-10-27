@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Member Account Edit</strong></h2>   
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('create_users') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			   <div class="col-md-8">
				<div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" value="{{$member->name}}"/>
                </div>
                <div class="form-group">
                    <label>User Name</label>
                    <input class="form-control" name="username" value="{{$member->username}}"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" value="{{$member->email}}"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" name="phone" value="{{$member->phone}}"/>
                </div>
                <div class="form-group">
                    <label>Change Password</label><br>
                    <input type="checkbox" class="selectbox check_change_pwd" name="show_password" value="0" />
                </div>
                <br>
                <div id="dis-non" style="display: none;">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" class="form-control" name="password"/>
                    </div>
                    <div class="form-group">
                        <label>Comfirm Password</label>
                        <input type="password" id="confirm_pass" class="form-control" name="comfirm_password"/>
                    </div>
                </div>
                
                <button type="submit" id="btn_submit" class="btn btn-primary">Submit </button>

             </div>
			</form>
		</div>
	</div>
	<script>
        $(".check_change_pwd").click(function(e){
            var this_val = $(this).val();
            if(this_val == 0){
                $(".check_change_pwd").val("1");
                $("#dis-non").attr("style","display: block");
                $("#btn_submit").attr("disabled", "disabled");
            }
            if(this_val == 1){
                $(".check_change_pwd").val("0");
                $("#dis-non").css("display","none");
                $("#btn_submit").removeAttr("disabled");
                $("#confirm_pass").val("");
                $("#password").val("");
            }
        });
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