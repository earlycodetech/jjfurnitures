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
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card product_card">
                    <div class="box">
                        <img class="card-img-top" src="{{ asset('assets/images/img-2.jpg') }}" alt="Title" />
                        <span class="category">Category</span>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Living Room Sofa</h4>
                        <p class="card-text">
                            $ 29.9
                        </p>

                        <div class="mt-3">
                            <a href="#" class="btn btn-warning btn-sm">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div> <div class="col-lg-3 col-md-6 mb-5">
                <div class="card product_card">
                    <div class="box">
                        <img class="card-img-top" src="{{ asset('assets/images/img-2.jpg') }}" alt="Title" />
                        <span class="category">Category</span>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Living Room Sofa</h4>
                        <p class="card-text">
                            $ 29.9
                        </p>

                        <div class="mt-3">
                            <a href="#" class="btn btn-warning btn-sm">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div> <div class="col-lg-3 col-md-6 mb-5">
                <div class="card product_card">
                    <div class="box">
                        <img class="card-img-top" src="{{ asset('assets/images/img-2.jpg') }}" alt="Title" />
                        <span class="category">Category</span>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Living Room Sofa</h4>
                        <p class="card-text">
                            $ 29.9
                        </p>

                        <div class="mt-3">
                            <a href="#" class="btn btn-warning btn-sm">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection