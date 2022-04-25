<?php

namespace App\Http\Livewire;
use Cart;
use Livewire\Component;

class WishlistComp extends Component
{
    public function removeFromWishList($product_id){
        foreach (Cart::instance('wishlist')->content() as $witem){
            if ($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-comp','refreshComponent');
                return;
            }
        }
    }

    public function moveProductFormWishlistToCart($rowId){
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-comp','refreshComponent');
        $this->emitTo('cart-count-comp','refreshComponent');
    }
    public function render()
    {
        return view('livewire.wishlist-comp')->layout('layouts.master');
    }
}
