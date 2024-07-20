@extends('client.layouts.master')

@section('content')
    @include('client.components.breadcrumb', ['pageName' => 'Post'])
    <div class="container">
        <div class="">
            <p style="color: rgb(121, 113, 234)"> Tìm thấy {{ count($data) }} thể loại</p>
            @foreach ($data as $value)
                <h1>{{ $value->ten_the_loai }}</h1>
                <h3 class="text-dark">{{ $value->tieu_de }}</h3>
                <p class="text-dark">{{ $value->chi_tiet }}</p>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
