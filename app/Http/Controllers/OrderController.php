<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {

        //dd($request->all());
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shiping_phone' => 'required',
            'shipping_zipcode' => 'required',
            //'payment_method' => 'required',
        ]);

        $order = new Order();
        $order->notes="to be delivered";
        //$order->payment_methods="online";
        $order->order_number = uniqid('OrderNumber-');
        $order->shop_id=auth()->id();
        $order->shippping_fullname = $request->input('shipping_fullname');
        $order->shippping_state = $request->input('shipping_state');
        $order->shippping_city = $request->input('shipping_city');
        $order->shippping_address = $request->input('shipping_address');
        $order->shippping_phone = $request->input('shiping_phone');
        $order->shippping_zipcode = $request->input('shipping_zipcode');
        // $order->shippping_email=$request->input('shipping_email');
        // $order->notes=$request->input('notes');

        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shiping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }


        $order->grant_total = \Cart::getTotal();
        $order->item_count = \Cart::getContent()->count();

        $order->user_id = auth()->id();
        $order->shop_id = auth()->id();

        // if (request('payment_method') == 'paypal') {
        //     $order->payment_method = 'paypal';
        // }

        $order->save();

        $cartItems = \Cart::getContent();
        if ($cartItems) {
            foreach($cartItems as $item) {
                $order->items()->attach($item->id, ['price'=> $item->price, 'quantityy'=> $item->quantity]);
            }
            \Cart::clear();
        }


        //$order->generateSubOrders();

        // if (request('payment_method') == 'paypal') {

        //     return redirect()->route('paypal.checkout', $order->id);

        // }



        return redirect()->route('home')->withMessage('Order has been placed');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

}
