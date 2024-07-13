@extends('frontend.layouts.master')
@section('content')
    <section data-bs-version="5.1" class="container pt-5 pb-5 bg-danger features4 stepm5 cid-tw2LyYgLR1 rounded" id="afeatures4-4">
        <div class="container-fluid">
            <div class="row justify-content-start align-items-stretch">
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <div class="image-wrapper">
                        <img src="{{ asset('frontend/images/p1.png') }}" alt="Product Image" class="img-fluid">
                    </div>
                </div>
                <div class="card col-12 col-lg-7 p-3 rounded">
                    <div class="card-wrapper">
                        <h1 class="card-title mbr-fonts-style display-3 mb-0"><strong>{{ $product->name }}</strong></h1>
                        <h4 class="text-muted" style="margin-top: -15px;">{{ $product->category }}</h4>
                        <div>
                            <p>{{ $product->details }}</p>
                        </div>
                        <div class="price mt-3">
                            <h4>Brand: ABC</h4>
                        </div>
                        <div class="price mt-3">
                            <h4 class="text-success"><strong>Price: ${{ $product->price }}</strong></h4>
                        </div>
                        <div class="action-buttons mt-4">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
