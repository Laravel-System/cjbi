@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Menu</strong></h2>   
		     @include('errors.message_error')  
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
		<a href="{{url('menu_create')}}" class="btn btn-primary" style="margin-bottom: 15px;margin-left: 89%">
                Create Menu</a>
			<div class="panel panel-default">
				<div class="panel-heading">
                     List Menus
                </div>
				<div class="panel-body">
	                <div class="table-responsive">
	                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        <thead>
	                            <tr>
	                            	<th>Title</th>
	                            	<th>Link</th>
	                                <th>Parent</th>
	                                <th>Menu Type</th>
	                                <th>Status</th>
	                     			<th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        @if(count($menu)> 0 )
	                        	@foreach($menu as $m)
	                            <tr>
	                                <td>{{ $m->name }}</td>
	                                <td>{{ $m->link }}</td>
	                                <td>
	                                @if($m->parent_id == 15)
	                                	Home
	                                @elseif($m->parent_id == 16)
	                                	Movie
	                                @elseif($m->parent_id == 37)
	                                	Game
	                                @elseif($m->parent_id == 36)
	                                	Software
	                                @elseif($m->parent_id == 51)
	                                	Music
	                                @elseif($m->parent_id == 46)
	                                	Mobile Apps
	                                @elseif($m->parent_id == 50)
	                                	Anime
	                                @elseif($m->parent_id == 52)
	                                	Ebook
	                                @elseif($m->parent_id == 53)
	                                	Picture
	                                @elseif($m->parent_id == 54)
	                                	Other
	                                @else
	                                	{{ $m->parent_id}}
	                                @endif
	                                </td>
	                                <td>
	                                	@if(count($m->menu_type)> 0)
	                                		{{ $m->menu_type->name }}
	                                	@else
	                                		Null
	                                	@endif
	                                </td>
	                                <td>
		                                @if($m->status == 0)
		                                	Not Active
		                                @else
		                                	<span>Active</span>
		                                @endif
	                                </td>
	                                <td>
	                                	<a href="{{ url('menu_edit/'.$m->id.'/edit')}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
										<a href="{{ url('menu_delete/'.$m->id.'/delete') }}" class="btn btn-danger"><i class="fa fa-ban"></i> Delete</a>
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
	
@endsection