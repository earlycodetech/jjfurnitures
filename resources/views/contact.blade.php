@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <img src="{{ asset('assets/images/Contact us (1).gif') }}" alt="Contact" class="w-100 ">
                </div>

                <div class="col-md-6 mb-5">
                    <p class="h3"> Contact Us </p>

                    <div class="d-flex align-items-center gap-1 gap-md-4 flex-wrap">
                        <p>
                            <i class="fa-solid fa-envelope"></i> support@jjfunitures.com
                        </p>
                        <p>
                            <i class="fa-solid fa-phone"></i> +234 (0)91 544-37566
                        </p>
                    </div>

                    <form action="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label"> Full Name </label>
                                <input type="text" class="form-control form-control-lg" required id="name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label"> Email </label>
                                <input type="email" class="form-control form-control-lg" required id="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label"> Phone Number </label>
                                <input type="tel" class="form-control form-control-lg" required id="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label"> Subject </label>
                                <select class="form-select form-select-lg" id="subject">
                                    <option>Buy Large Quantity</option>
                                    <option>Donation</option>
                                    <option>Complaint</option>
                                    <option>Refund</option>
                                    <option>Others</option>
                                    <option hidden selected></option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label"> Message </label>
                                <textarea class="form-control" rows="10" id="message"></textarea>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-warning">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
