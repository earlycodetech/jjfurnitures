@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card mx-auto bg-white" style="max-width: 900px">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h3>Categories</h3>

                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                        Add Category
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                       New Category
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                        const myModal = new bootstrap.Modal(
                            document.getElementById("modalId"),
                            options,
                        );
                    </script>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Last Updated</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>Lorem.</td>
                                    <td>date</td>
                                    <td>date</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <form action="">
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
