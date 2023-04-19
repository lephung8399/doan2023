<?php

namespace App\Http\Controllers\Admin;


use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $payments = Payment::orderBy('id', 'desc')->get();

        return view('admin.Order.Orders', ['user' => $user, 'payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        dd($id);
//        $orderID = DB::table('payment')->('PaymentOrderID', '=', 1)->get();
//        $orderID = Payment::all('PaymentOrderID');
        $user = Auth::user();
        $paymentID = Payment::findorfail($id);
        $orderIDs = json_decode($paymentID->PaymentOrderID);
//        dd($orderIDs);

        $products = array();
        foreach ($orderIDs as $orderID) {
            $orderProduct = Order::find($orderID);
            $products[] = Product::getProductByOrderId($orderProduct->ProductID, $orderID);
        }
        return view('admin.Order.orderDetail', ['user' => $user, 'products' => $products]);
//        return view()


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
