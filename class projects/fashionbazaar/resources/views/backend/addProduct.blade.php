@extends('backend.layouts.master')

@section('title', 'Add Product')
@section('content')
    <div class="page-header min-vh-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">Add Product</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Name</label>
                                <div class="mb-3">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                                </div>

                                <label for="details">Details</label>
                                <div class="mb-3">
                                    <textarea id="details" name="details" class="form-control" placeholder="Details" aria-label="Details" aria-describedby="details-addon" rows="4" required></textarea>
                                </div>

                                <label for="price">Price</label>
                                <div class="mb-3">
                                    <input type="number" id="price" name="price" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="price-addon" required>
                                </div>

                                <label for="category">Category</label>
                                <div class="mb-3">
                                    <select id="category" name="category" class="form-control" aria-label="Category" aria-describedby="category-addon" required>
                                        <option value="">Select Category</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="fashion">Fashion</option>
                                        <option value="home">Home</option>
                                        <option value="beauty">Beauty</option>
                                        <!-- Add more categories as needed -->
                                    </select>
                                </div>

                                <label for="image">Product Image</label>
                                <div class="mb-3">
                                    <input type="file" id="image" name="image" class="form-control" aria-label="Image" aria-describedby="image-addon" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Post Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{ asset('backend/assets/img/curved-images/curved6.jpg') }}')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
