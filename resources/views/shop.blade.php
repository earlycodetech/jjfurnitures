@extends('layouts.app')
@section('content')
    <section>
        <div class="page_hero" style="background-image: url({{ asset('assets/images/img-1.jpg') }})">
            <h1>Our Shop</h1>
        </div>
    </section>


    <section class="mt-5">
        <div class="container">
            @if ($searchWord)
                <h3 class="mb-3">Search Result For: "{{ $searchWord }}"</h3>
            @endif
            <div class="row mb-5">
                @forelse ($products as $product)
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="card product_card">
                            <div class="box">
                                <img class="card-img-top" src="{{ asset('uploads/' . $product->image) }}" alt="Title" />
                                <span class="category"> {{ $product->category->name }} </span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"> {{ $product->name }} </h4>
                                <p class="card-text">
                                    ₦ {{ number_format($product->price, 2) }}
                                </p>

                                <div class="mt-3">
                                    <a href="{{ route('product.page', $product->sku) }}" class="btn btn-warning btn-sm">
                                        View
                                    </a>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="h1">No Product Added Yet</p>
                @endforelse
            </div>
            {!! $products->links('pagination::bootstrap-5') !!}
        </div>
    </section>
@endsection