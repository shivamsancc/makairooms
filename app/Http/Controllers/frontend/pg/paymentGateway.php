<?php

namespace App\Http\Controllers\frontend\pg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paymentGateway extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }
    public function index($id)
    {
    $this->data['propery_item']=\App\models\property_item::getbyId($id);
     return view('frontend.PG.order',$this->data);
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
    public function order(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile_no' => 'required|numeric|digits:10',
            'address' => 'required',
        ]);


        $input = $request->all();
        $input['order_id'] = $request->mobile_no.rand(1,10000);
        $input['amount'] = $request->amount;


        \App\models\booking::create($input);

        $payment = \PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $input['order_id'],
          'user' => $request->name,
          'mobile_number' => $request->mobile_no,
          "CUST_ID" =>"CUST_".rand(1,10000),
          'email' => $request->email,
          'amount' => $request->amount,
          'callback_url' => url('api/payment/status')
        ]);
        return $payment->receive();
    }

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


    public function paymentCallback()
    {
        $transaction = \PaytmWallet::with('receive');


        $response = $transaction->response();
        $order_id = $transaction->getOrderId();


        if($transaction->isSuccessful()){
          \App\models\booking::where('order_id',$order_id)->update(['status'=>2, 'transaction_id'=>$transaction->getTransactionId()]);


          dd('Payment Successfully Paid.');
        }else if($transaction->isFailed()){
            \App\models\booking::where('order_id',$order_id)->update(['status'=>1, 'transaction_id'=>$transaction->getTransactionId()]);
        }
    }   




}
