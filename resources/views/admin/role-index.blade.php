@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
        <section class="content-header">
           <div class="col-sm-12 row">
                <div class="col-sm-8">
                    <h2>Dashboard/Role</h2>      
                </div>

            </div>
        </section>  

        <div class="box"> 
            <div class="content">
                <div class="col-md-12 banner">

                        @if($mess = Session::get('success'))
                            <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong> {{$mess}}
                            </div>
                        @endif

                        @if($mess = Session::get('danger'))
                            <div class="alert alert-danger">
                              <strong>Danger!</strong> {{$mess}}
                            </div>
                        @endif
                        
                        @permission('role-create')
                        	<a href="{{route('role.create')}}" class="btn btn-primary pull-right">creat role</a><br><br>
                        @endpermission
                        
                        <div class="mywrapper table-responsive">
                             <table class="table" id="datatable">
                                <thead>
                                    <th>Role Name</th>
                                    <th>Role display</th>
                                    <th>action</th>
                                </thead>
                                <tbody>
                                    @foreach($roles as $value)
										<tr>
											<td>{{$value->name}}</td>
											<td>{{$value->display_name }}</td>
											<td>
											@permission('role-edit')
												<a href="{{route('role.edit',$value->id)}}"><i class="fa fa-edit"></i></a>

											@endpermission
											@permission('role-delete')
												\ <a href="{{route('role.delete',$value->id)}}"><i class="fa fa-trash"></i></a>
											@endpermission
											</td>
										</tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

            
                  
                </div><!-- col-md-12 -->
            </div><!-- content -->
        </div><!-- box -->
    </div><!-- content-wrapper -->
@endsection
