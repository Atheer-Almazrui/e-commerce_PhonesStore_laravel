@extends('layouts.app')
@section('content')



<head>


    <title>My Shop</title>


</head>

<div class="container my-5">

    <div class="row">
        @foreach($phones_array as $items)
        <div class="col-sm-3 my-4">


            <div class="card" style="width: 14rem;">

                <img src="{{  asset('images/'.$items->image) }}" class="card-img-top p-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-7">
                            <h6 class="card-title text-dark">{{$items->price}} SAR</h6>
                        </div>
                        <div class="col-sm-5"><i class="bi bi-star-fill fa-sm text-warning" style="font-size: 17px;">
                                {{$items->rate}}</i>

                        </div>
                    </div>

                    <p class="card-text text-muted" style="font-size: 14px;">{{$items->name}}<br />
                        <small class="mark">{{$items->color}}</small>
                    </p>


                    <a href="{{ route( 'checkout', [$items->id] ) }}"><button type="button" class="btn btn-info btm-sm">Add to cart <i
                            class="bi bi-cart3 fa-sm"></i></button></a>


                </div>

            </div>



        </div>

        @endforeach

    </div>



    @endsection