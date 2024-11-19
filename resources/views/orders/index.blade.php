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

                                    @forelse ($orders as $item)
                                    <div class="card mb-3">
                                        <div class="card-body row">
                                            <h6 class="card-title mb-3">Order Id: <b>{{ $item->ref }} </b></h6>
                                            <div class="d-flex justify-content-between col-md-7">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="{{ asset('uploads/' . $item->product->image) }}"
                                                            class="img-fluid rounded-3" alt="Shopping item"
                                                            style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5> {{ $item->product->name }} </h5>
                                                        <div class="colors">
                                                            <ul id="marker">
                                                                <li
                                                                    style="background-color: {{ $item->product->color }};">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p class="mb-1">
                                                            Owner: {{ $item->user->name }}
                                                        </p>
                                                        <p class="mb-1">
                                                            Price: ₦ {{ number_format($item->product->price, 2) }}
                                                        </p>
                                                        <p class="mb-1">
                                                            Quantity: {{ $item->quantity }}
                                                        </p>
                                                        @switch($item->status)
                                                            @case('placed')
                                                                <span class="badge text-bg-primary">Proccessing</span>
                                                            @break

                                                            @case('shipped')
                                                                <span class="badge text-bg-warning">On its way</span>
                                                            @break

                                                            @case('canceled')
                                                                <span class="badge text-bg-danger">Canceled</span>
                                                            @break

                                                            @default
                                                                <span class="badge text-bg-success">Delivered</span>
                                                        @endswitch
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">₦ {{ number_format($item->amount) }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <p class="fw-semibold">Address</p>
                                                <p>
                                                    {{ $item->address }}
                                                </p>

                                                <a href="{{ route('orders.edit', ['order' => $item->id]) }}" class="btn btn-warning">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        No Item
                                    @endforelse

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
