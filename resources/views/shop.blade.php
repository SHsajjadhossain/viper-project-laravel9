@extends('layouts.app_frontend')
@section('content')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Shop</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Shop Page Start  -->
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <form action="">
        <div class="row mb-4">
            <div class="col-4">
                <input class="form-control" name="min_value" type="text" placeholder="Min" value="{{ $min }}">
            </div>
            <div class="col-4">
                <input class="form-control" style="margin-left: 15px" name="max_value" type="text" placeholder="Max" value="{{ $max }}">
            </div>
            <div class="col-4">
                <input class="btn btn-primary" style="width: 0px; height: 0; margin-left: 50px; padding-top: 15px; padding-bottom: 30px; padding-left: 115px; padding-right: 115px;" type="submit" value="Price Filter">
            </div>
        </div>
        </form>
        <div class="row">
            @foreach ($products as $product)
                @include('parts.product_thumb')
            @endforeach
        </div>
    </div>
</div>
<!-- Shop Page End  -->

@endsection
