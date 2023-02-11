@extends('layouts.app')
@section('content')


<style>
hr {
    background-color: grey;
}

</style>

<div class="container my-5">


    <div class="d-flex flex-row">
        <div class="mb-3">
            <a href="{{ route( 'store' ) }}"><i class="bi bi-arrow-left-circle fa-2x text-white"></i></a>
        </div>
        <div class="px-3 p-1">
            <h1 class="text-white">Checkout</h1>
        </div>
    </div>

    <div class="row">


        <div class="col-sm-8">
            <div class="card py-5 px-4">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img src="{{  asset('images/'.$phone_data->image) }}" class="w-100">
                    </div>
                    <div class="col-sm-7">
                        <div class="text-muted fw-lighter fs-6">Product name</div>
                        <div class="fw-normal fs-5">{{$phone_data->name}}</div>
                        <hr />
                        <div class="text-muted fw-lighter fs-6">Quantity</div>
                        <div class="fw-normal fs-5">1</div>
                        <hr />
                        <div class="text-muted fw-lighter fs-6">Price</div>
                        <div class="fw-normal fs-5">{{$phone_data->price-$phone_data->price*0.15}} <small>SAR</small>
                        </div>
                        <hr />
                        <div class="text-muted fw-lighter fs-6">Vat</div>
                        <div class="fw-normal fs-5">{{$phone_data->price*0.15}} <small>SAR</small></div>
                        <hr />
                        <div class="text-muted fw-normal fs-4">Total</div>
                        <div class="fw-bold fs-3">{{$phone_data->price}} <small>SAR</small></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">

            <div class="col-sm">
                <div class="card py-5 px-4">
                    <div class="row">
                        <div class="col-sm">
                            <form method="POST" action="{{ route('invoice') }}">
                                <div class="form">
                                    @csrf
                                    <label for="name" class="fw-normal fs-5">Name</label>
                                    <input type="name" class="form-control mb-3" id="name" name="name" placeholder="Ali Ahmad" required>

                                    <label for="address" class="fw-normal fs-5">address</label>
                                    <input type="address" class="form-control mb-3" id="address" name="address" placeholder="Main Street, Your County, and Anytown" required>

                                    <label for="phone" class="fw-normal fs-5">Phone Number</label>
                                    <input type="tel" class="form-control mb-3" id="phone" name="phone" placeholder="9665XXXXXXXX" required>

                                    <!-- hidden -->
                                    <input type="hidden" id="productName" name="productName"
                                        value="{{$phone_data->name}}">
                                    <input type="hidden" id="productPrice" name="productPrice"
                                        value="{{$phone_data->price}}">

                                </div>

                        </div>
                    </div>
                </div>

                <div class="card"
                    style="background-color: rgba(245, 245, 245, 0); border-color:rgba(245, 245, 245, 0);">

                    <button type="submit"
                        class="btn btn-outline-light btn-lg btn-block fw-bold fs-1 mt-4 py-4">Pay</button>

                </div>
                </form>
            </div>


        </div>
    </div>
</div>

@endsection