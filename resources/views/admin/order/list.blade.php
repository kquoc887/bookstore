@extends('admin.master')
@section('panel-header', 'List Order')
@section('content')
<p>Type something in the input field to search the table for BookName or Order:</p>
<input class="form-control" id="searchTable" type="text" placeholder="Search...">
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Book Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>OrderId</th>
			</tr>
		</thead>
		<tbody id="myTable">
			<?php $stt = 0; ?>
			 @foreach($data as $item)
			 	<?php $stt = $stt + 1; ?>
			 	<tr class="text-center">
				 	<td>{!! $stt !!}</td>
			        <td>{!! $item->bookName !!}</td>
			        <td>{!! $item->quantity !!}</td>
			        <td>{!! number_format($item->price, 0, ',', '.') !!}</td>
			        <td>{!! $item->order_id !!}</td>
			    </tr>
			 @endforeach
		</tbody>
	</table>
</div>
@stop