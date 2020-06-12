<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Category;
use Session;
use Auth;

class ThemeController extends Controller
{
    public function index()
    {
        $categories=Category::with('books')->get();
        $books=Book::with('categories')->get();
        //dd($categories);
        return view('index',compact('books','categories'));
    }
    public function about()
    {
        return view('about');
    }
    public function blog_details()
    {
        return view('blog_details');
    }
    public function blog()
    {
        return view('blog');
    }
    public function cart()
    {
        if(!Session::has('cart'))
        {
            return redirect(route('index'));    
        }
        $cart=Session::get('cart');
        //dd($cart);
        return view('cart',compact('cart'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function error404()
    {
        return view('error404');
    }
    public function faq()
    {
        return view('faq');
    }
    public function accountlogin()
    {
        if(Auth::check()) 
        {
            return redirect(route('index'));
        }
        return view('accountlogin');
    }
    public function accountregister()
    {
        if(Auth::check()) 
        {
            return redirect(route('index'));
        }
        return view('accountregister');
    }
    public function single_product(Book $id)
    {
        $books=Book::all();
        return view('single_product',['book'=>$id,'books'=>$books]);
    }
}