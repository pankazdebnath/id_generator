@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			@if(Session::has('success'))
				<div class="alert alert-success">{{Session::get('success')}}</div>
			@endif
			@if(!empty($user))

			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="float-right">
					<a  style="padding: 0" href="{{ route('add') }}"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a>
				</div>
				<div>
					<h3>User Table</h3>
				</div>
				
					<table>
						<thead>
							<th width="25%">Name</th>
							<th width="20%">E-mail</th>
							<th width="15%">Cell No</th>
							<th width="5%">B.G.</th>
							<th width="6%">Gender</th>
							<th width="15%">Created</th>
							<th width="12%">Actions</th>
						</thead>
						<tbody>
							@foreach($user as $user)
							<tr>
								<td class="table-text"><div>{{$user->name}}</div></td>

								<td class="table-text"><div>{{$user->email}}</div></td>

								<td class="table-text"><div>{{$user->cell}}</div></td>

								<td class="table-text"><div>{{$user->b_group}}</div></td>

								<td class="table-text"><div>{{$user->gender}}</div></td>

								<td class="table-text"><div>{{$user->created_at}}</div></td>

								<td>
									<a href="{{ route('details', $user->id) }}" class="btn btn-info" >Details</a>
	                                <a href="{{ route('edit', $user->id) }}" class="btn btn-warning">Edit</a>
	                                <a href="{{ route('delete', $user->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

					<div class="float-left">
					    <a class="btn btn-info" style="padding: 0" href="{{ url('userpdf') }}"><i class="fa fa-download" aria-hidden="true"></i> PDF</a>
					</div>

				</div>
			</div>
			@endif
		</div>
	</div>
@endsection