@extends('admin.layout')
@section('content')
<!--=== Responsive DataTable ===-->
<div class="row">
	<div class="alert alert-light" role="alert">
	</div>
	<div class="col-md-12">
		<div class="widget box">
			<div class="widget-header">
				<?php $url = 'http://' . getenv('HTTP_HOST') . '/baocaotuan/public/admin/useradd' ?>
				<h4><i class="icon-reorder"></i> Danh sách user  &nbsp;&nbsp;<a href="{{$url}}" class="bs-tooltip" title="Thêm"><i class="icon-plus-sign"></i></a></h4>
				<div class="toolbar no-padding">
					<div class="btn-group">
						<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
					</div>
				</div>
			</div>
			<div class="widget-content no-padding">
				<table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable" data-display-length="10">
					<thead>
						<tr>
							<th>
							</th>
							<th data-class="expand">Username</th>
							<th data-hide="phone">Tên đầy đủ</th>
							<th data-hide="phone">Email</th>
							<th data-hide="phone">Vị trí</th>
							<th data-hide="phone">Work Phone</th>
							<th data-hide="phone">Moblie Phone</th>
							<th data-hide="phone">Enable</th>
							<th style="text-align:center;">Thao tác</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
						<tr>
							<td>
							</td>
							<td>{{$user->username}}</td>
							<td>{{$user->fullname}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->role}}</td>
							<td>{{$user->workphone}}</td>
							<td>{{$user->mobilephone}}</td>
							<?php $enable =  ($user->enable == 1) ? 'active' : 'inactive' ?>
							<td>{{ $enable }}</td>
							<td>
								<ul class="table-controls">
									<li>
										<a href="{{ url('admin/edit/' .$user->id)}}"><i class="icon-pencil"></i></a>
									</li>
										<li>
										<a href="{{ url('admin/delete/' .$user->id)}}" onclick="return confirm('Bạn có chắn chắn muốn xóa?')"><i class="icon-trash"></i></a>
									</li>
								</ul>
							</td>
							{{-- <td align="center">
								<ul class="table-controls">
									<li>
										@if ($user->enable==0)
										<a href="{{@Config::get('app.url'). '/ticket/public/admin/userenable/'.$user->userid}}" class="bs-tooltip" title="Enable"><i class="icon-lock"></i></a> 
										@else
										<a href="{{@Config::get('app.url'). '/ticket/public/admin/userdisale/'.$user->userid}}" class="bs-tooltip" title="Disable"><i class="icon-unlock"></i></a> 
										@endif
										
									</li>
									<li>
										@if ($user->available==0)
										<a href="{{@Config::get('app.url'). '/ticket/public/admin/usermakeready/'.$user->userid}}" class="bs-tooltip" title="Make ready"><i class="icon-remove"></i></a> 
										@else
										<a href="{{@Config::get('app.url'). '/ticket/public/admin/usermakebusy/'.$user->userid}}" class="bs-tooltip" title="Make busy"><i class="icon-ok"></i></a> 
										@endif
										
									</li>
									<li>
										<a href="{{@Config::get('app.url'). '/ticket/public/admin/userresetpassword/'.$user->userid}}" class="bs-tooltip" title="Reset Password"><i class="icon-cog"></i></a> 
									</li>
									<li>
										<a href="{{@Config::get('app.url'). '/ticket/public/admin/useredit/'.$user->userid}}" class="bs-tooltip" title="Sửa"><i class="icon-pencil"></i></a> 
									</li>
									<li>
										<a href="{{@Config::get('app.url'). '/ticket/public/admin/userdelete/'.$user->userid}}" class="bs-tooltip" title="Xóa"><i class="icon-trash"></i></a> 
									</li>
									
								</ul>
							</td> --}}
						</tr>	
						@endforeach							
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /Responsive DataTable -->


@endsection