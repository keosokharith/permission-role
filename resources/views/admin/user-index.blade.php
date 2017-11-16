@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
        <section class="content-header">
           <div class="col-sm-12 row">
                <div class="col-sm-8">
                    <h2>Dashboard/Users</h2>      
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

                         @permission('user-create')
                        	<a href="{{route('user.create')}}" class="btn btn-primary pull-right">creat user</a><br><br>
                         @endpermission
                         
                         <div class="mywrapper table-responsive">
                             <table class="table" id="datatable">
                              <thead>
                                  <th>User Name</th>
                                  <th>Email</th>
                                  <th>Created Date</th>
                                  <th>Updated Date</th>
                                  <th>Action</th>
                              </thead>
                              <tbody>
                                @foreach($user as $key =>$value)
									<tr>
										<td>{{$value->name}}</td>
									  <td>{{$value->email}}</td>
										<td>{{$value->created_at}}</td>
										<td>{{$value->updated_at}}</td>
										<td>
											@permission('user-edit')
												<a href="">Edit</a> 
											@endpermission

											@permission('user-delete')
												| <a href="">Deleted</a>
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
