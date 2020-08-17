@extends('layouts.app1')

@section('content')
    <table id="example">
        <thead>
        <tr>
            <th>ID Order</th>
            <th>Order</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
{{--        {{dd($products)}}--}}

        <?php
            $total = 0
        ?>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <table>
                        <tr>
                            <td> <img src="{{ asset('images/' .$product->ProductImage) }}" alt="" style="width=100px; height:100px"></td>
                        </tr>
                        <tr>
                            <td><strong>Product Name: {{ $product->ProductName }} </strong></td>
                        </tr>
                        <tr>
                            <td>Price: {{ number_format($product->DetailPrice) }} VNĐ</td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                        </tr>
                    </table>
                    {{--                    <a href="{{ route('admin.view_don_hang',['id' => $array->id]) }}">Xem</a>--}}
                    {{--                    <a href="{{ route('admin.delete_don_hang',['id' => $array->id]) }}">Xóa</a>--}}
                </td>
                <td>
                    {{ $product->DetailQuantity }}
                </td>
                <td>
                    {{ number_format($product->DetailPrice*$product->DetailQuantity) }} VNĐ
                </td>
{{--                <td>--}}

{{--                </td>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('admin.orders.show',[$payment->id]) }}">--}}
{{--                        <img src="https://img.icons8.com/color/28/000000/visible.png"/>--}}
{{--                    </a>--}}
{{--                    <img src="https://img.icons8.com/plasticine/28/000000/support.png"/>--}}
{{--                    <img src="https://img.icons8.com/color/28/000000/delete-forever.png"/>--}}
{{--                </td>--}}
            </tr>

            <?php
                $total = $total + $product->DetailPrice*$product->DetailQuantity;
            ?>

        @endforeach
        </tbody>
    </table>
    <div style="margin-left: 1179px;">
        <h3>Total: <?php echo number_format($total) ;?> VNĐ </h3>
        <a href="{{ URL::previous() }}"><button class="btn btn-warning btn-fill btn-wd" type="button" style="display: inline-block">Back</button></a>
    </div>
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

@endsection
