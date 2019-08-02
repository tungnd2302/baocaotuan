@extends('admin.layout')
@section('content')
@php 
	// echo '<pre>';
 //    print_r($useredit);
 //    echo '</pre>';
@endphp
<br>
<div class="tab-pane" id="tab_edit_account">
	<?php $url = 'http://' . getenv('HTTP_HOST') . '/baocaotuan/public/admin/douseredit';?>
	<form class="form-horizontal" action="{{$url}}" method="post">
		<input type="hidden" name="userid" value="{{$useredit->id}}"/>
		{{csrf_field()}}
		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header"><h4>Thông tin đăng nhập</h4></div>
				{{-- @if ($err_msg !='')
					<div class="alert fade in alert-danger" style="display: yes;">
						<i class="icon-remove close" data-dismiss="alert"></i>
						{{$err_msg}}
					</div>
				@endif --}}
				<div class="widget-content">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
									<input type="hidden" name="id" class="form-control" value="{{$useredit->id}}" required>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Username:</label>
								<div class="col-md-8">
									<input type="text" name="username" class="form-control" value="{{$useredit->username}}" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Loại:</label>
								<div class="col-md-8">
									<select class="form-control" name="local">
										<option value="0" <?php if($useredit->local==0){echo 'selected="selected"';}?>>Ldap</option>
										<option value="1" <?php if($useredit->local==1){echo 'selected="selected"';}?>>Local</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Role:</label>
								<div class="col-md-8">
									<select class="form-control" name="role">
										<option value="Administrator" <?php if($useredit->role=="Administrator"){echo 'selected="selected"';}?>>Administrator</option>
										<option value="Supervisor" <?php if($useredit->role=="Supervisor"){echo 'selected="selected"';}?>>Supervisor</option>		
										<option value="Technical" <?php if($useredit->role=="Technical"){echo 'selected="selected"';}?>>Technical</option>
										<option value="Requestor" <?php if($useredit->role=="Requestor"){echo 'selected="selected"';}?>>Requestor</option>
										<option value="Reporter" <?php if($useredit->role=="Reporter"){echo 'selected="selected"';}?>>Reporter</option>
									</select>
								</div>
							</div>							

						</div>
														
					</div> <!-- /.row -->
				</div> <!-- /.widget-content -->
			</div> <!-- /.widget -->
		</div> <!-- /.col-md-12 -->

		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header"><h4>Thông tin cá nhân</h4></div>
				<div class="widget-content">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-4 control-label">Email:</label>
								<div class="col-md-8"><input type="text" name="email" class="form-control" value="{{$useredit->email}}" required></div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Tên đầy đủ:</label>
								<div class="col-md-8"><input type="text" name="fullname" class="form-control" value="{{$useredit->fullname}}" required></div>
							</div>

							

							<div class="form-group">
								<label class="col-md-4 control-label">Máy lẻ:</label>
								<div class="col-md-8"><input type="text" name="workphone" class="form-control" value="{{$useredit->workphone}}" ></div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Di động:</label>
								<div class="col-md-8"><input type="text" name="mobilephone" class="form-control" value="{{$useredit->mobilephone}}" ></div>
							</div>

							
						</div>
														
					</div> <!-- /.row -->
				</div> <!-- /.widget-content -->
			</div> <!-- /.widget -->
		</div> <!-- /.col-md-12 -->			
		<div class="row">
			<div class="form-actions" align = "center">
				<p class="btn-toolbar btn-toolbar-demo">
					<button class="btn btn-primary" style="width:100px;" type="submit">Cập nhật</button>
					{{-- <a href="{{@Config::get('app.url')}}/ticket/public/admin/userlist"> --}}
						<button class="btn btn-primary" type="button" style="width:100px;">Hủy bỏ</button>
					</a>
				</p>
			</div>
		</div>
	</form>
</div>

@endsection