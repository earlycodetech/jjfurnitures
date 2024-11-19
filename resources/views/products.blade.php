@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop.page') }}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </nav>
        
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image"> <img src="{{ asset('uploads/'. $product->image) }}"
                                width="350"> </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{ $product->name }}</h3> 
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                        <h3>  ₦ {{ number_format($product->price, 2) }}</h3>
                        
                        <div class="mt-5"> <span class="fw-bold">Color</span>
                            <div class="colors">
                                <ul id="marker">
                                    <li style="background-color: {{ $product->color }};"></li>
                                </ul>
                            </div>
                        </div>
                        @error('product')
                            <span class="small fw-bold text-danger">{{ $message }}</span>
                        @enderror
                        <div class="my-4">
                            <form action="{{ route('cart.add') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="product">
                                <button class="btn btn-success ">
                                    <i class="fa-solid fa-shopping-cart"></i> Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
