@extends('layouts.app1')

@section('content')
    <table id="example">
        <thead>
        <tr>
            <th>ID Order</th>
            <th>Information</th>
            <th>Note</th>
            <th>Date Order</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>
                    <table>
                        <tr>
                            <td>Full name: {{ $payment->fullname }}</td>
                        </tr>
                        <tr>
                            <td>Email: {{ $payment->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone: {{ $payment->Phone }}</td>
                        </tr>
                        <tr>
                            <td>Address: {{ $payment->address }}</td>
                        </tr>
                    </table>
{{--                    <a href="{{ route('admin.view_don_hang',['id' => $array->id]) }}">Xem</a>--}}
{{--                    <a href="{{ route('admin.delete_don_hang',['id' => $array->id]) }}">Xóa</a>--}}
                </td>
                <td>
                    {{ $payment->note }}
                </td>

                <td>
                    {{ date('H:i:s d-m-Y ', strtotime($payment->created_at)) }}
                </td>
                <td>
                    <select onchange="changeStatus({{$payment->id}})" id="orderStatus{{$payment->id}}" style="border: none">
                        <option value="1" style="color: green"  @if($payment->status == 1) selected @endif>
                            Completed
                        </option>
                        <option value="2" style="color: blue" @if($payment->status == 2) selected @endif>
                            Processing
                        </option>
                        <option value="3" style="color: orangered" @if($payment->status == 3) selected @endif>
                            Cancel
                        </option>
                    </select>

                </td>
                <td>
                    <a href="{{ route('admin.orders.show',[$payment->id]) }}">
                        <img src="https://img.icons8.com/color/28/000000/visible.png"/>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(function(){
            $("#example").dataTable();
        })
    </script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        function changeStatus(id) {
            status = $("#orderStatus"+id).val();
            $.ajax({
                url: document.location.origin+'/doan/public/admin/order/updateStarusByOrderID/'+id+'/'+status,
                type: 'get',
                dataType: 'html',
                data: {}
            }).done(function(ketqua) {
                $('#noidung').html(ketqua);
            });
        }
    </script>

@endsection
