<style>
    .dropbtn {
    background-color: #296dc1;
    color: white;
    padding: px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size:14px;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
    display: block;
    }

    .dropdown:hover .dropbtn {
    background-color: #990000;
    }
</style>
<?php $seting = App\Setting::first(); 
        if(count($seting)>0){
            $seting_name = $seting->website_name;
        }else{
            $seting_name ="TITB ADMIN";
        }
?>
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">MY WEB TITB</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/admin')}}">{{$seting_name}}</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;float: right;font-size: 16px;"><a href="{{ url('/') }}" target="_blank" style="color:#fff;text-transform: uppercase;">{{Auth::user()->username}} </a> &nbsp; &nbsp; |&nbsp; &nbsp;  <a href="{{ url('/') }}" target="_blank" style="color:#fff;">View Site</a> &nbsp; <?php  echo date('l')."&nbsp; ". date('d-M-Y'); ?> &nbsp;
  <div class="dropdown">
  <button class="dropbtn">Logout</button>
  <div class="dropdown-content">
 <?php 
	$user = App\User::where('id',Auth::user()->id)->first();
    
 ?>
  <a href="{{url('ch_pass_user/'.$user->id)}}">Change password</a>
  
  <a href="{{ url('logout') }}">Logout</a>
  </div>
</div></a> </div>

  
        </nav>
  
