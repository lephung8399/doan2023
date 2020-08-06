<?php

namespace App\Http\Controllers\Home;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function PHPSTORM_META\elementType;

class ShoppingCartController extends Controller
{
    public function cart()
    {
        $cart = Session::get('cart');
//        dd($cart);
        return view('cart.index', compact('cart'));
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        //khoi tao gio hang
        $cart = new Cart($oldCart);
        $cart->add($product, $productId);

        //luu du lieu gio hang vao session
        Session::put('cart', $cart);
        Session::flash('success', 'Thêm sản phẩm khỏi giỏ hàng thành công');
        return redirect()->back();
    }

    public function removeProductIntoCart($productId)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->remove($productId);
                Session::put('cart', $cart);
                Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }

    public function updateProductIntoCart(Request $request, $productId)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->update($request, $productId);
                Session::put('cart', $cart);
                $message = 'Cập nhật thành công';

            } else {
                $message = 'Bạn chưa mua sản phẩm nào';
            }
        } else {
            $message = 'Bạn chưa mua sản phẩm nào';
        }
        //thiet ke du lieu tra ve
        $data = [
            'productUpdate' => Session::get('cart')->items[$productId],
            'message' => $message,
            'totalPriceCart' => Session::get('cart')->totalPrice
        ];

        return response()->json($data);
    }

}
