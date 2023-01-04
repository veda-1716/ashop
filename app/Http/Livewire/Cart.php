<?php

namespace App\Http\Livewire;

use App\Models\cart as cartModel;
use Livewire\Component;
use App\Models\product;

class Cart extends Component
{
    public $total;

    public function delete($id)
    {
        dd("you are here");
        cartModel::find($id)->delete();

    }
    public function render()
    {
<<<<<<< HEAD
        return view('livewire.cart',[
            'products' => cartModel::where('user_id',auth()->id())->get()
=======
        return view('livewire.cart', [
            'products' => cartModel::where('user_id', auth()->id())->get()
>>>>>>> d1abcf37f7fc2828a3e0b7fd619b8a8109a03e2b
        ]);
    }
}
