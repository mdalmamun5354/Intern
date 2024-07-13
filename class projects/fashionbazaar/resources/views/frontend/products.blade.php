@extends('frontend.layouts.master')
@section('content')
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>
            <div class="row">
                @foreach ($products as $idx => $product)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="{{ route('pro.show', $idx) }}" class="option1">
                                        Details
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="{{asset('frontend/images/p'. ($idx%12+1) .'.png')}}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $product->name }}
                                </h5>
                                <h6>
                                    ${{ $product->price }}
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="btn-box">
                <a href="{{ url('/') }}">
                    Go Back
                </a>
            </div>
        </div>
    </section>
@endsection