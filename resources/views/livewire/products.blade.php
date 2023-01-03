<<<<<<< HEAD
@extends('admin.layouts.app')
=======
@extends('layouts.app')
>>>>>>> 40da7fbf7d9900adbaea14c4772e8a7393be94d9
@forelse ($products as $product)
    <div class="col-md-4">
        <div class="product-item">
            <div class="product-thumb">
                <img class="img-responsive" src="{{ config('app.url') . $product->thumbnail }}" alt="product-img" />
                <div class="preview-meta">
                    <ul>
                        <li>
                            <a href="{{ route('show_searched_item_by_name', $product->name) }}">
                                <i class="tf-ion-ios-search-strong"></i>
                            </a>
                        </li>
                        @livewire('product-menu-like', ['kid' => $product->id])
                        @livewire('product-menu-cart', ['cid' => $product->id])
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <h4><a href="{{ route('shop', $product->id) }}">{{ $product->name }}</a></h4>
                <p class="price">${{ $product->price }}</p>
            </div>
        </div>
    </div>
@empty
    <h1>{{ __('no product found!') }}</h1>
@endforelse
