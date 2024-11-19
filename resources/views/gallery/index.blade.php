@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card mx-auto bg-white" style="max-width: 900px">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h3>Gallery</h3>

                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                        Add Image
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('gallery.store') }}"
                                class="modal-content">
                                @csrf

                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        New Image
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Select Image</label>
                                        <input type="file" class="form-control" name="image" id=""
                                            aria-describedby="helpId" placeholder="" />

                                        @error('name')
                                            <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($galleries as $galery)
                            {{-- @dump($galery->image) --}}
                            <div class="col-lg-3 col-md-4 mb-5">
                                <div class="card">
                                    <img src="{{ asset('uploads/gallery/' . $galery->image) }}" alt=""
                                        class="w-100">
                                        
                                    <div class="card-footer">
                                        <form action="" method="POST">
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="card p-5 text-center">
                                No Image Uploaded Yet
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
