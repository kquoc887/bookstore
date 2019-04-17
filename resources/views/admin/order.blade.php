@extends('admin.master')
@section('panel-header', 'Report')
@section('content')
	<div class="report_content">
		<div class="count-order">Total Order:{{$total_order}}</div>
		<div class="report_money">Total: {{number_format($total_money,0, ',', '.'). 'VNĐ'}}</div>
	</div>
@stop