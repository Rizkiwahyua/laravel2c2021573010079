@extends('layout.master')
@section('title', 'data mahasiswa')
@section('menuMahasiswa','active')

@section('content')
@parent
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ol class="list-group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">
                    {{$val}}
                </li>
                @empty
                <div class="alert alert-dark d-inline-block">tidak ada data</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@endsection