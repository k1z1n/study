@extends('templates.template')

@section('title', 'Главная страница')

@section('content')
    <a href="{{ route('product.index') }}">Страница с товарами</a>
    <br>
    <hr>
    <a href="{{ route('product.create') }}">Страница добавления товара</a>
@endsection
