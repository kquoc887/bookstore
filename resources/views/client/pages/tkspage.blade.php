@extends('client.master')
@section('content-client')
<div class="container">
   <div>Cam mon quy khach hang da mua hang tai shop</div>
   <div>
       <table class="table table-bordered">
           <tr>
               <td>Ma don hang</td>
               <td>Tong tien</td>
           </tr>
           <tr>
               <td><label id="id-order">{{$order->id}}</label></td>
               <td><label id="order-total">{{$order->total}}</label></td>
           </tr>
       </table>
   </div>
</div>
@endsection
@section('script')
<script>
    var data_info = '';
    var ord_id = $('#id-order').text();
       if (ord_id != '') {
            data_info = {
                org_token: 'kDOYES4so7j114INT9jDNYiZ50IFFpW4',
                order_id: $('#id-order').text(),
                order_total: $('#order-total').text(),                        
            };
       }
</script>
<script src="http://192.168.1.30:8080/Affilate/public/js/affilate.js"></script>
@endsection