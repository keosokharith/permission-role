@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
        <section class="content-header">
           <div class="col-sm-12 row">
                <div class="col-sm-8">
                    <h2>Dashboard/Role Create</h2>      
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


                        
						  <form method="POST" action="{{route('role.store')}}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>role Name: <span class="color-red">*</span></label>
                                    <input type="text" name="name" placeholder="input role name" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>role display: <span class="color-red">*</span></label>
                                    <input type="text" name="display_name" placeholder="input role display" class="form-control">
                                </div>
                                
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
									<div class="form-group row">
										<label for="name" class="col-md-12 control-label">
										<strong>List All Permission Roles <span class="color-red">*</span></strong>
										</label>
										<div class="col-sm-12">
											<div class="row">

											<!-- tabs -->
											<div class="tabbable tabs-left">
											
												<div class="col-sm-3">
													<div class=" tab-border">
														<ul class="nav nav-tabs">
															<li class="active"><a href="#home" data-toggle="tab">User and Role</a></li>
															<li><a href="#general" data-toggle="tab">General</a></li>
															<li><a href="#our-team" data-toggle="tab">Our Team</a></li>
															<li><a href="#post" data-toggle="tab">Post</a></li>
														</ul>
													</div>
												</div>
												
												<div class="col-sm-9 ">
													<div class="tab-content contact-tab-border">
														
														<div class="tab-pane active" id="home">
														   @foreach($permission_sub as $sub) 
															   @if($sub->parent_id==1)
																	<label class="main-page"> Roles List <input type="checkbox" id="role_1" class="hidden"/> <a>Check all</a></label>
																	<script>
																		 $("#role_1").click(function () {
																			 $('.role_1 input:checkbox').not(this).prop('checked', this.checked);
																		 });
																	</script> 
																@elseif($sub->parent_id==2)
																	<label class="main-page"> Users List <input type="checkbox" id="role_2" class="hidden"/> <a>Check all</a></label>
																	<script>
																		 $("#role_2").click(function () {
																			 $('.role_2 input:checkbox').not(this).prop('checked', this.checked);
																		 });
																	</script> 
																@endif           
															<div class="myborder">
																<table>
																	<tr>
																		@foreach($permissions as $permission)
																			@if($sub->parent_id==1 || $sub->parent_id==2)
																				@if($permission->parent_id==$sub->parent_id)
																					<td class="role_{{$permission->parent_id}}">
																						<input type="checkbox" name="permission[]"  value="{{$permission->id}}"> &nbsp; {{$permission->display_name}}
																					</td>
																				@endif
																			@endif
																		@endforeach
																	</tr> 
																</table>
															</div>
															@endforeach
														</div> 
														
														<div class="tab-pane" id="general">  
															@foreach($permission_sub as $sub) 
																@if($sub->parent_id==3)
																	<label class="main-page"> Menu List <input type="checkbox" id="role_3" class="hidden"/> <a>Check all</a></label>
																	<script>
																		 $("#role_3").click(function () {
																			 $('.role_3 input:checkbox').not(this).prop('checked', this.checked);
																		 });
																	</script> 
																@elseif($sub->parent_id==4)
																	<label class="main-page"> Slider List <input type="checkbox" id="role_4" class="hidden"/> <a>Check all</a></label>
																	<script>
																		 $("#role_4").click(function () {
																			 $('.role_4 input:checkbox').not(this).prop('checked', this.checked);
																		 });
																	</script> 
																@endif                      
																<div class="myborder">
																	<table>
																		<tr>
																			@foreach($permissions as $permission)
																				@if($sub->parent_id==3 || $sub->parent_id==4)
																					@if($permission->parent_id==$sub->parent_id)
																						<td class="role_{{$permission->parent_id}}">
																							<input type="checkbox" name="permission[]"  value="{{$permission->id}}"> &nbsp; {{$permission->display_name}}
																						</td>
																					@endif
																				@endif
																			@endforeach
																		</tr> 
																	</table>
																</div>
															@endforeach
														</div>
														
														<div class="tab-pane" id="our-team">  
															@foreach($permission_sub as $sub) 
																@if($sub->parent_id==5)
																	<label class="main-page"> Our Team List <input type="checkbox" id="role_5" class="hidden"/> <a>Check all</a></label>
																	<script>
																		 $("#role_5").click(function () {
																			 $('.role_5 input:checkbox').not(this).prop('checked', this.checked);
																		 });
																	</script> 
																@endif                      
																<div class="myborder">
																	<table>
																		<tr>
																			@foreach($permissions as $permission)
																				@if($sub->parent_id==5)
																					@if($permission->parent_id==$sub->parent_id)
																						<td class="role_{{$permission->parent_id}}">
																							<input type="checkbox" name="permission[]"  value="{{$permission->id}}"> &nbsp; {{$permission->display_name}}
																						</td>
																					@endif
																				@endif
																			@endforeach
																		</tr> 
																	</table>
																</div>
															@endforeach
														</div> 
														
														<div class="tab-pane" id="post">  
															@foreach($permission_sub as $sub) 
																@if($sub->parent_id==6)
																	<label class="main-page"> Post List <input type="checkbox" id="role_6" class="hidden"/> <a>Check all</a></label>
																	<script>
																		 $("#role_6").click(function () {
																			 $('.role_6 input:checkbox').not(this).prop('checked', this.checked);
																		 });
																	</script> 
																@endif                      
																<div class="myborder">
																	<table>
																		<tr>
																			@foreach($permissions as $permission)
																				@if($sub->parent_id==6)
																					@if($permission->parent_id==$sub->parent_id)
																						<td class="role_{{$permission->parent_id}}">
																							<input type="checkbox" name="permission[]"  value="{{$permission->id}}"> &nbsp; {{$permission->display_name}}
																						</td>
																					@endif
																				@endif
																			@endforeach
																		</tr> 
																	</table>
																</div>
															@endforeach
														</div>

													</div>
												</div>

											</div>
											<!-- /tabs -->
										</div>
									</div>
									</div><!-- row -->
								</div>
                                

                                <div class="col-sm-12"><hr>
                                    <input type="submit" class="btn btn-primary pull-right" value="Save">
                                </div>
                            </div>
                        </form>
            
                  
                </div><!-- col-md-12 -->
            </div><!-- content -->
        </div><!-- box -->
    </div><!-- content-wrapper -->
    <style>
		.myborder{float: left;width: 100%;} 
		.myborder > table{border: 1px solid #eeee;padding: 10px;float: left;width: 100%;}
		.myborder tr td{float: left;margin: 15px 0;width: 50%;}
		.myborder tr td input{margin-left: 10px;margin-right: 10px;}
		.control-label strong, .main-page{float: left;font-size: 15px;font-weight: 600 !important;margin: 10px 0;width: 100%;}
		.tab-border{border: 1px solid #dadada;min-height: 600px;padding-top: 15px;}
		.contact-tab-border{border: 1px solid #dadada;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;}
		.tabbable.tabs-left{ width: 100%; float: left;}
		.tab-content{ float: left;min-height: 600px;width: 100%;}
		.tabs-left > .nav-tabs {border-bottom: 0;}
		.tab-content .tab-pane,
		.pill-content > .pill-pane {display: none;}
		.tab-content > .active,
		.pill-content > .active {display: block;float: left;width: 100%;}
		.nav-tabs  li {float: none !important;margin-bottom: 5px;}
		#myform .nav-tabs > li a{margin: 10px;border: 0px;}
		#myform .nav-tabs > li.active a, 
		#myform .nav > li > a:focus, 
		#myform .nav > li > a:hover{border: 0px;border-radius: 0;background-color: #eeeeee !important;margin: 10px;}
		.nav-tabs{ border-bottom: none !important}
		span.labels{ font-size: 16px; font-weight: 600;}
		.tabbable .nav-tabs{ background-color: #fff !important;}
		
		.nav-tabs > li{ float: none !important; padding: 5px !important;}

		.nav-tabs > li.active > a, 
		.nav-tabs > li.active > a:focus, 
		.nav-tabs > li.active > a:hover{
			border: none !important;
			background-color: #eee !important;
			border-radius: 0px !important;
		}
		.nav-tabs > li > a:hover{ border-color: #fff !important;}
		
		.mce-content-body img{
			padding: 0 20px !important;
		}
	</style>
@endsection
