@extends('admin.layout.master')
@section('content')
  <div class="row">
        <div class="col-md-12">

      <h2><strong>Member Account</strong></h2>
         @include('errors.message_error')
    </div>
  </div>
  <hr/>
  <div class="row">
    <div class="col-md-12">
    <a href="{{url('member/account/create')}}" class="btn btn-primary create">
                Create Member Account</a>
      <div class="panel panel-default">
        <div class="panel-heading">
                     List Member Account
                </div><br>
               
                <div class="panel-body">        
                  <div class="table-responsive">
                  <form method="post"enctype='multipart/form-data'>
                  {{ csrf_field() }}
                  
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                   
                          <thead>
                              <tr>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody class="item_list">
                            @if(count($member) > 0 )
                              @foreach($member as $p)
                              <tr>  
                                <td>{{$p->email}}</td>
                                <td>{{$p->username}}</td>
                                <td>
                                  <a href="{{ url('member/account/edit/'.$p->id) }}" class="btn btn-primary"><i class="fa fa-edit "></i></a>
                                  <a href="{{ url('member/account/delete/'.$p->id) }}" class="btn btn-danger"><i class="fa fa-ban"></i></a>
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

@endsection
