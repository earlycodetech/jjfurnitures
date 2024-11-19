@extends('layouts.app')
@section('content')
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">

                            <div class="row">

                                <div class="col-lg-12   ">
                                    <h5 class="mb-3">
                                        <a href="{{ route('shop.page') }}" class="text-body nav-link"><i
                                                class="fa-solid fa-box me-2"></i>My Orders</a>
                                    </h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                            <p class="mb-0">You have 4 items in your cart</p>
                                        </div>

                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body row">
                                            <h6 class="card-title mb-3">Order Id: <b>hbciwncwbwubwnjwbn </b></h6>
                                            <div class="d-flex justify-content-between col-md-10">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                            class="img-fluid rounded-3" alt="Shopping item"
                                                            style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>Iphone 11 pro</h5>
                                                        <p class="small mb-0">256GB, Navy Blue</p>
                                                        <span class="badge text-bg-success rounded-pill"> Delivered </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">₦ 900</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                               <a href="{{ route('orders.edit', "order") }}" class="btn btn-warning">
                                                    <i class="fa-solid fa-eye"></i>
                                               </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
