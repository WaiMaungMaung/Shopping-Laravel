@extends('layout.master')
@section('title','Cart')
@section('content')

<table class="table table-sm">
    <h3 class="align-content-center">Products In your Cart</h3>
    <thead>

    <tr>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">Images</th>
        <th scope="col">Price</th>
    </tr>
    </thead>
    <tbody>


    @foreach($all_carts as $product)
    <tr>
        <th scope="row">1</th>
        <td>{{$product->title}}</td>
        <td>
            <img src="{{asset('../storage/app/new_uploads/'.unserialize($product->imgs)[0])}}" class="card-img-center" alt="..." style="height: 50px;width:40px">
            <img src="{{asset('../storage/app/new_uploads/'.unserialize($product->imgs)[1])}}" class="card-img-center" alt="..." style="height: 50px;width:40px">
        </td>
        <td><span class="badge badge-pill badge-info">${{$product->price}}</span></td>




    </tr>
    @endforeach



    </tbody>
</table>


@endsection()
