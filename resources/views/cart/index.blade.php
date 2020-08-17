@extends('layouts.HomePage')

@section('content')
    <h2 class="text-center m-4">{{ "Chi tiết giỏ hàng" }}</h2>
    @if (Session::has('success'))
        <div class="col-12 alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('success') }}</strong>
        </div>

    @endif
    @if (Session::has('delete_error'))
        <div class="col-12 alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('delete_error') }}</strong>
        </div>
    @endif
    <div class="col-12 col-md-12 mt-2 border">
        <table id="cart" class="table table-hover table-bordered mt-4">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @if(Session::has('cart') && $cart->totalQty > 0)
                @foreach($cart->items as $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-2 hidden-xs">
                                    <img
                                        src="{{ asset('images/' . $product['item']->ProductImage) }}"
                                        alt="..."
                                        class="img-responsive" width="100%"/>
                                </div>
                                <div class="col-md-10">
                                    <h4 class="nomargin">{{ $product['item']->ProductName }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"">
                            {{  number_format($product['item']->ProductPrice) }} VNĐ
                        </td>
                         <td data-th="Quantity">
                                <input type="number" data-id="{{ $product['item']->id }}" class="form-control text-center update-product-cart" min="0" name="qty"
                                       value="{{ $product['qty'] }}">
                            </td>
                            <td data-th="Subtotal" id="product-subtotal-{{$product['item']->id}}" class="text-center">{{  number_format($product['price']) }} VNĐ</td>
                            <td class="actions" data-th="">
                                <a class="btn btn-danger btn-sm"
                                   href="{{ route('cart.removeProductIntoCart', $product['item']->ProductID) }}">
                                    <img src="https://img.icons8.com/plasticine/28/000000/filled-trash.png" style="margin-top: 3px"/>
                                </a>
                            </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td><a href="{{ route('index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td id="total-price-cart" class="hidden-xs text-center"><strong>Total: {{ number_format($cart->totalPrice) }} VNĐ</strong></td>
                <td><a href="{{ route('orders') }}" class="btn btn-success btn-block">Payment <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
            @else
                <tr>
                    <td colspan="5" class="text-center"><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                </tr>
            @endif
        </table>

    </div>
@endsection

