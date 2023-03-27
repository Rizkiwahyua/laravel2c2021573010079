@extends('layout.master')
@section('title','gallery')
@section('menuGallery','active')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
        </div>

    </div>
</div>
@endsection