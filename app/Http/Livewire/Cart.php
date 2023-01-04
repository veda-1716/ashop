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
        return view('livewire.cart',[
            'products' => cartModel::where('user_id',auth()->id())->get()
        ]);
    }
}
