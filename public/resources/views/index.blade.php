@extends('master')
@section('title', 'Главная')
@section('content')
    <div class="starter-template">
        <h1>Все товары</h1>
            <div class="filters row">
                @include('card')

            </div>
    </div>
@endsection