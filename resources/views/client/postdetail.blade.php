@extends('client.layouts.master')

@section('content')
    @include('client.components.breadcrumb', ['pageName' => 'Post'])
    <div class="container">
        <div class="">
            <h1>{{$data->ten_the_loai}}</h1>
            <h3 class="text-dark">{{$data->tieu_de}}</h3>
            <p class="text-dark">{{$data->chi_tiet}}</p>
        </div>
        <hr>
    </div>
@endsection
