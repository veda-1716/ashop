@extends('layouts.app')
@section('content')
    <div>
        <section class="user-dashboard page-wrapper">
            <div class="container">
                <div class="row">
                    @include('user_menu')
                </div>
                @livewire('user-dashboard.orders')
            </div>
        </section>
    </div>
@endsection
