@extends('master')
@section('title' , 'Товар')
@section('content')
    <div class="starter-template">
        <h1>iPhone X 64GB</h1>
        <h2>{{ $product }}</h2>
        <p>Цена: <b>71990 ₽</b></p>
        <img src="http://127.0.0.1:8000/storage/products/iphone_x.jpg">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>
        <form action="http://127.0.0.1:8000/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
            <input type="hidden" name="_token" value="HeFklzM0aFRRyZmRTKl34yuBj6QI7C71mwtq3Glf">        </form>
    </div>
@endsection
