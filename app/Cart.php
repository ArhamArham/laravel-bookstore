<?php

namespace App;

use Illuminate\Support\Arr;
class Cart 
{   private $bookContents;
    private $totalQty;
    private $totalPrice;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->bookContents=$oldCart->bookContents;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;

        }
    }
    public function addbook($book, $qty)
    {
        //dd($book);
        $books = ['qty' => 0, 'price' => $book->price, 'bookContent' => $book];
        if ($this->bookContents) {
            # code...
            if (array_key_exists($book->name, $this->bookContents)) {
                # code...
                $books=$this->bookContents[$book->name];
                $this->totalPrice-=$books['price'];

            }
        }
        $books['qty']+=$qty;
        $books['price']=$book->price * $books['qty'];
        $this->bookContents[$book->name]=$books;
        $this->totalQty+=$qty;
        $this->totalPrice += $books['price'];
    }
    public function updatebook($book , $qty)
    {
        ///dd($book);
        if ($this->bookContents) {
            # code...
            if (array_key_exists($book->name, $this->bookContents)) {
                # code...
                $books=$this->bookContents[$book->name];

            }
        }
        $this->totalQty -= $books['qty'];
        $this->totalPrice -= $books['price'];
        $books['qty'] = $qty;
        $books['price']=$book->price * $books['qty'];
        $this->totalQty+=$qty;
        $this->totalPrice+=$books['price'];
        $this->bookContents[$book->name] = $books;
    }
    public function removebook($book)
    {
        if ($this->bookContents) {
            # code...
            if (array_key_exists($book->name, $this->bookContents)) {
                # code...
                $rbook=$this->bookContents[$book->name];
                $this->totalQty -= $rbook['qty'];
                $this->totalPrice -= $rbook['price'];
                Arr::forget($this->bookContents , $book->name);

            }
        }
    }
    public function getbookContents()
    {
        return $this->bookContents;
    }
    public function getTotalQty()
    {
        return $this->totalQty;
    }
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    public function countbook()
    {
        return count($this->contents);
    }
}
