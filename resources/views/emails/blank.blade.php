<h3>Xác nhận thông tin đặt hàng:</h3>
<p>Họ tên:{{$name}}</p>
<p>Điện thoại:{{$phone}}</p>
<p>Địa chỉ: {{$address}}</p>
<p>Bạn đã đặt các các cuốn cách sau:</p>
<table class="table-bordered">
@foreach ($content as $row)
	<tr>
		<td>Tên sách: {{$row->name}}</td>
		<td>Số lượng: {{$row->qty}}</td>
	</tr>
@endforeach
</table>
