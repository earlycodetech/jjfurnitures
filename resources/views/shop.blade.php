@extends('layouts.app')
@section('content')
    <section>
        <div class="page_hero" style="background-image: url({{ asset('assets/images/img-1.jpg') }})">
            <h1>Our Shop</h1>
        </div>
    </section>


    <section class="mt-5">
        <div class="container">
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