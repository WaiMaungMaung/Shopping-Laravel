@extends('layout/master')
@section('title','detail')
@section('content')
<div class="mt-4">


        <div class="m-1" style="width: 18rem;">

                            @foreach(unserialize($single->imgs) as $img)
            <img src="{{asset('../storage/app/new_uploads/'.$img)}}" class="card-img float-left" alt="..." style="float:left">

                            @endforeach

                <h5 class="card-title">{{$single->title}}</h5>
                Price :<span class="badge badge-pill badge-info">${{$single->price}}</span>
                <hr>
                <p class="card-text">{{$single->description}}</p>

                                <a href="{{action('PageController@add',$single->id)}}" class="btn btn-outline-secondary pull-right">

                                    <i class="fa fa-cart-plus"></i>
                                    Add to Card</a>

        </div>


</div>
    @endsection
