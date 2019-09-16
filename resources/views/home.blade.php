@extends('layout.master')
@section('title','Home')
@section('content')

    <div class="container-fluid p-4">
        <div class="row">
        <div class="col-md-3 mt-4">
{{-- side bar--}}

            @include('layout/sidebar');
        </div>


        <div class="col-md-9 mt-4">

            @foreach($all as $product)
            <div class="card float-left m-1" style="width: 18rem;">

{{--                @foreach(unserialize($product->imgs) as $img)--}}
                <img src="{{asset('../storage/app/new_uploads/'.unserialize($product->imgs)[0])}}" class="card-img-center" alt="..." style="height: 240px;width:280px">

{{--                @endforeach--}}
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    Price :<span class="badge badge-pill badge-info">${{$product->price}}</span>
                    <hr>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="{{url('products/'.$product->id.'/detail')}}" class="btn btn-outline-primary">View detail</a>
                    <a href="{{action('PageController@add',$product->id)}}" class="btn btn-outline-secondary pull-right">

                        <i class="fa fa-cart-plus"></i>
                        Add to Card</a>
                </div>
            </div>
                @endforeach

        </div>
        </div>

    </div>

    @endsection()
