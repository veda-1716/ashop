<?php

namespace App\Http\Livewire;
use App\Models\cart;
use Livewire\Component;
use App\Models\product;
class MenuCart extends Component
{
    public $total_price;

    public function delete($id)
    {
        cart::find($id)->delete();
<<<<<<< HEAD

=======
            return $this->product = cart::where('user_id',auth()->id())->get();
>>>>>>> d1abcf37f7fc2828a3e0b7fd619b8a8109a03e2b
    }
        public function render()
        {
            return view('livewire.menu-cart',[
            'products' => cart::where('user_id',auth()->id())->get()
        ]);
    }
}
