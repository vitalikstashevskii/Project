@extends('master')
@section('title', 'Все категории')
@section('content')

    <div class="starter-template">
        @foreach($categories as $category)
            <div class="panel">
                <a href="/{{ $category->code }}">
                    <img src="http://127.0.0.1:8000/storage/categories/mobile.jpg">
                    <h2>{{ $category->name }}</h2>
                </a>
                <p>
                   {{ $category->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
