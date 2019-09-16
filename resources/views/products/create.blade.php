@extends('layout/master')
@section('title','Create Product')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well mt-4">
            <form method="post" enctype="multipart/form-data">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>

                    @endforeach

                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                    @endif
                <legend>Insert a new post</legend>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">

                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Upload photo</label>
                    <input type="file" class="form-control-file" id="photo" name="photo[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>


    @endsection()
