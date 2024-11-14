@extends('layouts.app')
@section('content')
    <section class="mt-5">
        <div class="container">
            <header class="mb-5 d-flex justify-content-between align-items-center gap-4">
                <h1>Products</h1>

                <a href="{{ route('products.create') }}" class="btn btn-primary">
                    Add New Product
                </a>
            </header>
            <div class="row">
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
                                    <a href="{{ route('products.edit', $product->sku) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="h1">No Product Added Yet</p>
                @endforelse

                {!! $products->links('pagination::bootstrap-5') !!}
            </div>

        </div>
    </section>
@endsection
