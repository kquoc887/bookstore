@extends('admin.master')
@section('panel-header', 'List Book')
@section('content')
<p>Type something in the input field to search the table for first names, last names or emails:</p>
<input class="form-control" id="searchTable" type="text" placeholder="Search...">
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Publishing_company</th>
				<th>Author</th>
				<th>Pages</th>
				<th>Image</th>
				<th>Price</th>
				<th>Publishing Year</th>
				<th>Category</th>
				<th>Supplier</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody id="myTable">
			<?php $stt = 0; ?>
			 @foreach($data as $item)
			 	<?php $stt = $stt + 1; ?>
			 	<tr class="text-center">
				 	<td>{!! $stt !!}</td>
			        <td>{!! $item->name !!}</td>
			        <td>{!! $item->publishing_company !!}</td>
			        <td>{!! $item->author !!}</td>
			        <td>{!! $item->pages !!}</td>
			        <td>{!! $item->image !!}</td>
			        <td>{!! number_format($item->price, 0, ".", ".") !!}</td>
			        <td>{!! $item->image !!}</td>
			        <td>{!! $item->category->name !!}</td>
			        <td>{!! $item->supplier->name !!}</td>
			        <td><i class="glyphicon glyphicon-trash"></i><a onclick="return verifyDelete('You want to delete')" class="btn btn-link" href="{{route('admin.book.getDelete', $item->id)}}">Delete</a></td>
			         <td><i class="glyphicon glyphicon-edit"></i><a class="btn btn-link" href="{{route('admin.book.getEdit', $item->id)}}">Edit</a></td>
			    </tr>
			 @endforeach
		</tbody>
	</table>
</div>
@stop