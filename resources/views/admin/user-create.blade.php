@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
        <section class="content-header">
           <div class="col-sm-12 row">
                <div class="col-sm-8">
                    <h2>Dashboard/Users create</h2>      
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
                        
                        @if ( count( $errors ) > 0 )
						   <div  class="alert alert-danger">
								@foreach ($errors->all() as $error)
								  <div>{{ $error }}</div>
								@endforeach
						   </div>
						@endif

						
                    		
 					<form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<div class="row">

									<div class="col-xs-12 col-sm-12 col-md-12">

										<div class="form-group">

											<strong>Name:</strong>
											<input type="text" name="name" class="form-control">
										</div>

									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">

										<div class="form-group">

											<strong>Email:</strong>

											<input type="text" name="email" class="form-control">

										</div>

									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">

										<div class="form-group">

											<strong>Password:</strong>
											<input type="password" name="password" class="form-control">
										</div>

									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">

										<div class="form-group">

											<strong>Confirm Password:</strong>
											<input type="password" name="confirm-password" class="form-control">
											
										</div>

									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">

										<div class="form-group">

											<strong>Role:</strong>
											@foreach($roles as $role)
												<div class="form-group">
													<input type="checkbox" name="roles[]"  value="{{$role->id}}"> &nbsp; {{$role->display_name}} <br>
												</div>
											@endforeach
			
											

										</div>

									</div>

									<div class="col-xs-12 col-sm-12 col-md-12 text-center">

											<button type="submit" class="btn btn-primary">Submit</button>

									</div>

								</div>

					</form>
                     

                  
                </div><!-- col-md-12 -->
            </div><!-- content -->
        </div><!-- box -->
    </div><!-- content-wrapper -->
@endsection
