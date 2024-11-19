@extends('layouts.app')
@section('content')
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">

                            <div class="row">

                                <div class="col-lg-7">
                                    <h5 class="mb-3">
                                        <a href="{{ route('shop.page') }}" class="text-body"><i
                                                class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a>
                                    </h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                            <p class="mb-0">You have 4 items in your cart</p>
                                        </div>

                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                            class="img-fluid rounded-3" alt="Shopping item"
                                                            style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>Iphone 11 pro</h5>
                                                        <p class="small mb-0">256GB, Navy Blue</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">₦ 900</h5>
                                                    </div>
                                                    <form action=""
                                                        onsubmit="return confirm('Do you want to remove this item from your cart?')"
                                                        method="POST">
                                                        @csrf @method('DELETE')

                                                        <button class="btn btn-sm text-muted">
                                                            <i class="fa-solid fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                {{-- Checkout Start --}}
                                <div class="col-lg-5">

                                    <div class="card bg-warning text-white rounded-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h5 class="mb-0">Checkout</h5>
                                            </div>
                                            
                                            
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Subtotal</p>
                                                <p class="mb-2">₦ 4798.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Shipping</p>
                                                <p class="mb-2">₦ 20.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total(Incl. taxes)</p>
                                                <p class="mb-2">₦ 4818.00</p>
                                            </div>

                                            <hr class="my-4">
                                            <form class="mt-4">
                                                <label class="form-label" for="typeName">Address</label>
                                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                                    <textarea type="text" id="typeName"
                                                        class="form-control form-control-lg" siez="17"
                                                        placeholder=""></textarea>
                                                </div>

                                               
                                                
                                                <button type="button"
                                                    class="btn btn-dark btn-block btn-lg">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Checkout <i class="fa-solid fa-check-circle small ms-2"></i></span>
                                                    </div>
                                                </button>
                                            </form>
                                            
                                            
                                        </div>
                                    </div>

                                </div>
                                {{-- Checkout Ends --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
