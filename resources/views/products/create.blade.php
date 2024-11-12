@extends('layouts.app')
@section('content')
<section>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">
                           New Product
                        </h3>

                        <form action="{{ route('products.store') }}" method="post" class="mt-5 row">
                            @csrf
                            
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id=""
                                    aria-describedby="helpId" value="" />

                                @error('name')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="number" step="any" class="form-control" name="price" id=""
                                    aria-describedby="helpId" value="" />

                                @error('price')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Stock</label>
                                <input type="number" class="form-control" name="stock" id=""
                                    aria-describedby="helpId" value="" />

                                @error('stock')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Color</label>
                                <input type="color" class="form-control" name="color" id=""
                                    aria-describedby="helpId" value="" />

                                @error('color')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" id="" class="form-select"></select>
                                @error('category')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id=""
                                    aria-describedby="helpId" value="" />

                                @error('image')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>


                            <div class="my-4">
                                <button class="btn  btn-primary"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection