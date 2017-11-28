<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		table{
			border-collapse: collapse;
		}
		th, td{
			border: 1px solid black;
			padding: 5px;
		}

	</style>
</head>
<body>
	<table>
		<caption><h3>User List</h3></caption>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Blood group</th>
				<th>Cell No</th>
				<th>E-mail</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
			@foreach($user as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->gender}}</td>
				<td>{{$user->bday}}</td>
				<td>{{$user->b_group}}</td>
				<td>{{$user->cell}}</td>
				<td>{{$user->email}}</td>
				<td><img src="{{ asset('img/'.$user->image) }}" alt="" width="auto;" height="80px;"></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>