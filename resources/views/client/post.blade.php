@extends('client.layouts.master')

@section('content')
    @include('client.components.breadcrumb', ['pageName' => 'Post'])
    <div class="container">
        @foreach ($data as $value)
            <a href="{{ route('detail', $value->id) }}">
                <div class="">
                    <h1>{{ $value->ten_the_loai }}</h1>
                    <p class="text-dark">{{ $value->tieu_de }}</p>
                </div>
            </a>
            <hr>
        @endforeach
    </div>
@endsection
