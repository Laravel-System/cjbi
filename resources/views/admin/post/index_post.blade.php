@extends('admin.layout.master')
@section('content')
  <div class="row">
        <div class="col-md-12">

      <h2><strong>Post</strong></h2>
         @include('errors.message_error')
    </div>
  </div>
  <hr/>
  <div class="row">
    <div class="col-md-12">
    <a href="{{url('create_post')}}" class="btn btn-primary create">
                Create Post</a>
      <div class="panel panel-default">
        <div class="panel-heading">
                     List Posts
                </div><br>
               
                <div class="panel-body">
        
                  <div class="table-responsive">
                  <form method="post"enctype='multipart/form-data'>
                  {{ csrf_field() }}
                  
                  <button formaction="{{url('multiple_delete_post')}}" type="submit" style="background:#990000;color:white;">Delete all selected</button>
               
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                   
                          <thead>
                              <tr>
                           
                              <th>
                                <input type="checkbox" class="selectall"> All
                              </th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if(count($post) > 0 )
                              @foreach($post as $p)
                              <tr>  
                                <td>
                                  <input type="checkbox" class="selectbox" name="ids[]" value="{{$p->id}}">
                                </td>
                                <td>{{ $p->title }}</td>
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
                                  <a href="{{ url('edit/'.$p->id.'/post') }}" class="btn btn-primary"><i class="fa fa-edit "></i></a>
                                  <a href="{{ url('delete/'.$p->id.'/post') }}" class="btn btn-danger"><i class="fa fa-ban"></i></a>
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
<script>
  $(document).ready(function(){
    $('.selectall').click(function () {    
      $('.selectbox').prop('checked',$(this).prop('checked'));    
    });
    $('.selectbox').click(function(){
      var total=$('.selectbox').length;
      var number=$('.selectbox:checked').lenght;
      if(total==number){
        $('.selectall').prop('checked',true);
      }else{
        $('.selectall').prop('checked',false);
      }
    });
  });
</script>
@endsection
