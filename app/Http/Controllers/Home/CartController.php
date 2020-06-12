<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Book;
use App\Cart;
use Auth;
use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
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
        //dd($cart);
        return view('cart',compact('cart'));
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
    public function store(Book $book,Request $request)
    { 
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $qty=$request->qty ? $request->qty : 1;
        $cart= new Cart($oldCart);
        $cart->addBook($book, $qty);
        Session::put('cart',$cart);
        //dd(Session::get('cart'));
        return redirect(route('cart'));
        
    }
    public function cart()
    {
        if(!Session::has('cart'))
            return view('products.cart');
        $cart=Session::get('cart');
        return view('products.cart',compact('cart'));
    }
    public function removeCart(Book $book)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeBook($book);
        Session::put('cart' , $cart);
        return back()->with('message','Product  has been successfully removed from the Cart');
    }
    public function updateCart(Book $book , Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateBook($book, $request->qty);
        Session::put('cart' , $cart);
        return back()->with('message','Product  has been successfully updated in the Cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}