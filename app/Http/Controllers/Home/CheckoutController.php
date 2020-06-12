<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Checkout;
use Illuminate\Http\Request;
use Session;
use Auth;

class CheckoutController extends Controller
{
    public function __construct()
    { 
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::has('cart'))
        {
            return redirect(route('index'));    
        }
        $cart=Session::get('cart');
        return view('checkout',compact('cart'));
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
        //
        $cart=Session::get('cart');
        $data=$request->validate([
            'firstname' => ['required','string', 'max:255'],
            'lastname' => ['required','string', 'max:255'],
            'phone' => ['required','numeric'],
            'country' => 'required',
            'state' => 'required',
            'zip' => ['required','numeric'],
            'streetadd1' => ['required','max:255'],
        ]);
        $checkout=Checkout::create([
            'user_id'=>Auth::user()->id,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'username'=>Auth::user()->name,
            'email'=>Auth::user()->email,
            'phone'=>$request->phone,
            'country'=>$request->country,
            'state'=>$request->state,
            'zip'=>$request->zip,
            'price'=>$cart->gettotalPrice(),
            'ship_address1'=>$request->streetadd1,
            'ship_address2'=>$request->streetadd2
        ]);
        if($checkout){
            return 'your order has been placed';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
