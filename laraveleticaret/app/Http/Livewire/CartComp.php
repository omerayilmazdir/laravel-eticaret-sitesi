<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Cart;

class CartComp extends Component
{
    public function  increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);

        return $this->redirect('cart');
        $this->emitTo('cart-count-comp','refreshComponent');

    }

    public function  decreaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-comp','refreshComponent');

    }
    public function  destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        session()->flash('success_message','Ürün sepetten silindi.');
        return $this->redirect('cart');
        $this->emitTo('cart-count-comp','refreshComponent');
    }
    public function destroyAll(){
        Cart::instance('cart')->destroy();
        session()->flash('success_message','Tüm sepet boşaltıldı.');
        return $this->redirect('cart');
        $this->emitTo('cart-count-comp','refreshComponent');
    }
    public function checkout(){
        if(Auth::check()){
          return redirect()->route('checkout');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout(){
            if(!Cart::instance('cart')->count() > 0){
                session()->forget('checkout');
                return;
            }
            if (session()->has('coupon')){
                session()->put('checkout',[
                    'discount' => $this->discount,
                    'subtotal' => $this->subtotalAfterDiscount,
                    'tax' => $this->taxAfterDiscount,
                    'total' => $this->totalAfterDiscount
                ]);
            }
            else{
                session()->put('checkout',[
                    'discount' => 0,
                    'subtotal' => Cart::instance('cart')->subtotal(),
                    'tax' => Cart::instance('cart')->tax(),
                    'total' => Cart::instance('cart')->total()
                ]);
            }

    }

    public function render()
    {
        if (session()->has('coupon')){
            if (Cart::instacne('cart')->subtotal() < session()->get('coupon')['cart_value']){
                 session()->forget('coupon');
            }
            else{
                $this->calculatedDiscounts();
            }
        }

        if (Auth::check()){
            Cart::instance('cart')->store(Auth::user()->email);
        }

        $this->setAmountForCheckout();
        return view('livewire.cart-comp')->layout('layouts.master');;
    }
}
