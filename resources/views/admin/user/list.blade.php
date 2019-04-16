@extends('admin.master')
@section('panel-header', 'List User')
@section('content')
<p>Type something in the input field to search the table for first names, last names or emails:</p>
<input class="form-control" id="searchTable" type="text" placeholder="Search...">
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Level</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody id="myTable">
			<?php $stt = 0; ?>
			 @foreach($data as $user)
			 	<?php $stt = $stt + 1; ?>
			 	<tr class="text-center">
				 	<td>{!! $stt !!}</td>
			        <td>{!! $user->username !!}</td>
			        <td>{!! $user->email !!}</td>
			        <td>
			        	@if ($user->level == 1 && $user->id == 1)
			        		{{"Super Admin"}}
			        	@elseif ($user->level == 1 )
							{{"Admin"}}
			        	@else 
			        		{{"Member"}}
			        	@endif
			        </td>
			        <td><i class="glyphicon glyphicon-trash"></i><a onclick="return verifyDelete('You want to delete')" class="btn btn-link" href="{{route('admin.user.getDelete', $user->id)}}">Delete</a></td>
			         <td><i class="glyphicon glyphicon-edit"></i><a class="btn btn-link" href="{{route('admin.user.getEdit', $user->id)}}">Edit</a></td>
			    </tr>
			 @endforeach
		</tbody>
	</table>
</div>
@stop