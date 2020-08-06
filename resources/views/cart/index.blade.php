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
                                <div class="col-md-2 hidden-xs"><img
                                        src="{{ asset('storage/' . $product['item']->image) }}"
                                        alt="..."
                                        class="img-responsive" width="100%"/></div>
                                <div class="col-md-10">
                                    <h4 class="nomargin">{{ $product['item']->ProductName }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"">
                            {{ '$' . $product['item']->ProductPrice }}
                        </td>
                         <td data-th="Quantity">
                                <input type="number" data-id="{{ $product['item']->id }}" class="form-control text-center update-product-cart" min="0" name="qty"
                                       value="{{ $product['qty'] }}">
                            </td>
                            <td data-th="Subtotal" id="product-subtotal-{{$product['item']->id}}" class="text-center">{{ '$' . $product['price']  }}</td>
                            <td class="actions" data-th="">
                                <a class="btn btn-danger btn-sm"
                                   href="{{ route('cart.removeProductIntoCart', $product['item']->ProductID) }}"><i
                                        class="fa fa-trash-o"></i></a>
                            </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td id="total-price-cart" class="hidden-xs text-center"><strong>Tổng tiền: ${{ $cart->totalPrice }}</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
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

