@extends('layouts.app')
@section('content')


<style>
hr {
    background-color: grey;
}
</style>

<div class="container my-5">

    <h1 class="text-white mb-4">Thank for your purchase !</h1>



    <div class="row">


        <div class="col-sm-8">
            <div class="card p-5">
                <div class="row mx-1">
                    <ul class="list-unstyled">
                        <li class="text-black">{{$invoice_data->cust_name}}</li>
                        <li class="text-muted mt-1"><span class="text-black">Invoice</span> #{{$invoice_data->id}}</li>
                        <li class="text-black mt-1">{{$invoice_data->inv_date}}</li>
                    </ul>
                    <hr>
                    <div class="col-xl-8">
                        <p>Product Name</p>
                    </div>
                    <div class="col-xl-4">
                        <p class="float-end">{{$invoice_data->product_name}}
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="row mx-1">
                    <div class="col-xl-8">
                        <p>Price</p>
                    </div>
                    <div class="col-xl-4">
                        <p class="float-end">{{$invoice_data->total-$invoice_data->total*0.15}} <small>SAR</small>
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="row mx-1">
                    <div class="col-xl-8">
                        <p>Vat</p>
                    </div>
                    <div class="col-xl-4">
                        <p class="float-end">{{$invoice_data->total*0.15}} <small>SAR</small>
                        </p>
                    </div>
                    <hr style="border: 2px solid black;">
                </div>
                <div class="row mx-1 text-black">

                    <div class="col-xl-12">
                        <p class="float-end fw-bolder fs-3">Total: {{$invoice_data->total}} <small>SAR</small>
                        </p>
                    </div>
                    <hr style="border: 2px solid black;">
                </div>
            </div>
        </div>
    </div>
</div>



@endsection