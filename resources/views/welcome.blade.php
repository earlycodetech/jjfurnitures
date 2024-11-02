@extends('layouts.app')
@section('content')
    <!-- Hero Start -->
    <section class="hero">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators list-unstyled">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/img-1.jpg') }}" class="w-100 d-block" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to JJ's Furniture</h3>
                        <p>
                            Where we only deliver the best of the best
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/img-4.jpg') }}" class="w-100 d-block" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/img-3.jpg') }}" class="w-100 d-block" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- Hero End -->

    <!-- Latest Starts -->
    <section>
        <div class="container mt-5">

            <p class="h1 mb-5">
                Latest Products
            </p>

            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-1.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text my-end">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-2.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-3.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-4.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Ends -->


    <!-- Gallery Starts -->
    <section>
        <div class="container mt-5">
            <p class="h1 mb-5 text-end">
                View Our Gallery
            </p>


            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('assets/images/img-1.jpg') }}" alt="Gal 1" class="w-100">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <img src="{{ asset('assets/images/img-2.jpg') }}" alt="Gal 1" class="w-100">
                        </div>
                        <div class="col-md-6 mb-4">
                            <img src="{{ asset('assets/images/img-3.jpg') }}" alt="Gal 1" class="w-100">
                        </div>
                        <div class="col-md-6 mb-4">
                            <img src="{{ asset('assets/images/img-4.jpg') }}" alt="Gal 1" class="w-100">
                        </div>
                        <div class="col-md-6 mb-4">
                            <img src="{{ asset('assets/images/img-1.jpg') }}" alt="Gal 1" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Ends -->

    <!-- Products Starts -->
    <section>
        <div class="container mt-5">

            <p class="h1 mb-5">
                Our Products
            </p>

            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-1.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text my-end">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-2.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-3.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/img-4.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Living Room Sofa</h4>
                            <p class="card-text">
                                $ 29.9
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Ends -->
@endsection
