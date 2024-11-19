@extends('layouts.app')
@section('content')
    <section class="h-100">
        <div class="container py-5 h-100 mb-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom shadow border-3" style="border-color: #f37a27 !important;">
                        <div class="card-body p-5">

                            <p class="lead fw-bold mb-5" style="color: #f37a27;">Edit Order</p>

                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p>10 April 2021</p>
                                </div>
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    <p>012j1gvs356c</p>
                                </div>
                            </div>

                            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                <div class="row">
                                    <div class="col-md-2 col-lg-3">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp" class="w-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="col-md-5 col-lg-5">
                                        <p>BEATS Solo 3 Wireless Headphones</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p>£299.99</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-4">
                                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                    <p class="lead fw-bold mb-0" style="color: #f37a27;">₦ 262.99</p>
                                </div>
                            </div>

                            <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="horizontal-timeline">

                                        <ul class="list-inline items d-flex justify-content-between">
                                            <li class="list-inline-item items-list">
                                                <p class="py-1 px-2 rounded active">
                                                    Placed</p class="py-1 px-2 rounded">
                                            </li>
                                            <li class="list-inline-item items-list">
                                                <p class="py-1 px-2 rounded">
                                                    Shipped</p class="py-1 px-2 rounded text-white"
                                                    style="background-color: #f37a27;">
                                            </li>
                                            <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                                <p style="margin-right: -8px;">Canceled</p>
                                            </li>
                                            <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                                <p style="margin-right: -8px;">Delivered</p>
                                            </li>
                                        </ul>

                                    </div>

                                    <hr class="my-5">
                                    <h5 class="fw-bold">
                                        Update Order Status
                                    </h5>
                                    <form action="" onsubmit="return confirm('Are you sure you want to update the status of this order?')" method="POST">
                                        @csrf @method('PATCH')
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" required class="form-select">
                                            <option value=""></option>
                                            <option value="placed">Placed</option>
                                            <option value="shipped">Shipped</option>
                                            <option value="canceled">Canceled</option>
                                            <option value="delivered">Delivered</option>
                                        </select>

                                        <div class="my-4">
                                            <button class="btn btn-warning w-100">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
