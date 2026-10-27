@extends('admin.layout.master')
@section('content')
  <div class="row">
        <div class="col-md-12">

      <h2><strong>Member Registered</strong></h2>
         @include('errors.message_error')
    </div>
  </div>
  <hr/>
  <div class="row">
    <div class="col-md-12">
    <!-- <a href="{{url('member/account/create')}}" class="btn btn-primary create">
                Create Member Account</a> -->
      <div class="panel panel-default">
        <div class="panel-heading">
                     List Member Registered
                </div><br>
               
                <div class="panel-body">        
                  <div class="table-responsive">
                  <form method="post"enctype='multipart/form-data'>
                  {{ csrf_field() }}
                  
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                   
                          <thead>
                              <tr>
                                <td>Photo</td>
                                <th>Name</th>
                                <th>Email</th>
                                <td>Company Name</td>
                                <td>Company Logo</td>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody class="item_list">
                            @if(count($member_data) > 0 )
                              @foreach($member_data as $p)
                              <?php
                                $descripts = json_decode($p->description);
                              ?>
                              <tr>  
                                <td><img src="<?php echo array_key_exists('photo',$descripts)?url('imagess/'.$descripts->photo):'' ?>" alt="" width="70px"></td>
                                <td>{{$p->title}}</td>
                                <td> {{$descripts->email}}</td>
                                <td>{{$descripts->com_name}}</td>
                                <td><img src="<?php echo array_key_exists('company_logo',$descripts)?url('imagess/'.$descripts->company_logo):'' ?>" alt="" width="70px"></td>
                                <td>
                                  <button type="button" onclick="newPage({{$p->id}})" class="btn btn-primary">Detail</button>
                                  <?php if(array_key_exists('cv',$descripts)){ ?>
                                  <a href="{{ url('imagess/'.$descripts->cv) }}" class="btn btn-info" download>Download CV</a>
                                  <?php } ?>
                                  <?php if(array_key_exists('moc',$descripts)){ ?>
                                  <a href="{{ url('imagess/'.$descripts->moc) }}" class="btn btn-info" download>Download MOC</a>
                                  <?php } ?>
                                  <?php if(array_key_exists('patent',$descripts)){ ?>
                                  <a href="{{ url('imagess/'.$descripts->patent) }}" class="btn btn-info" download>Download Patent</a>
                                  <?php } ?>
                                  <!-- <a href="{{ url('member/account/delete/'.$p->id) }}" class="btn btn-danger"><i class="fa fa-ban"></i></a> -->
                                </td>
                              </tr>
                            @endforeach
                          @endif
                          </tbody>
                      </table>
                    </form>  
                  </div>
              </div>
          </div>
    </div>
  </div>
<script src="{{url('js/multiple_checkbox.js')}}"></script>
<script>
    function newPage(id){
        window.open('{{url("member_register/get_mem_form")}}/'+id, '_blank');
    }
</script>
@endsection


