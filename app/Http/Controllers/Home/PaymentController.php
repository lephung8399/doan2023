<?php

namespace App\Http\Controllers\Home;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class PaymentController extends Controller
{
    public function success(){
//        dd(1);
        return view('HomePage.success');
    }
    public function store(Request $request)
    {
        $success_fullname = request('fullname');
        $success_email = request('email');
        $success_Phone = request('Phone');
        $success_address = request('address');
        $success_city = request('city');
        $success_PaymentOrderID = request('orderId');
//        dd($success_PaymentOrderID);

        $payment = new Payment();
        $payment->fullname = request('fullname');
        $payment->email = request('email');
        $payment->Phone = request('Phone');
        $payment->address = request('address');
        $payment->city = request('city');
        $payment->note = request('note');
        $payment->status = 2;
        $payment->PaymentOrderID = request('orderId');
        $payment->save();
        Session::flush();
//        dd(1);
//        $cart = Session::get('cart');
//        dd($cart);
        return view('HomePage.success',['success_fullname' =>$success_fullname,
                                            'success_email' => $success_email,
                                            'success_Phone' => $success_Phone,
                                            'success_address' => $success_address,
                                            'success_city' => $success_city,
                                            'success_PaymentOrderID' => $success_PaymentOrderID]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $session = Session::all();
        dd($session);

        return view('HomePage.payment');

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        dd($request->all());
//        $payment = new Payment();
//        $payment->fullname = request('fullname');
//        $payment->email = request('email');
//        $payment->Phone = request('Phone');
//        $payment->address = request('address');
//        $payment->city = request('address');
//        $payment->PaymentOrderID = request('orderId');
//
//        $payment->save();
//
//    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
