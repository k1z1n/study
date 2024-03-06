@extends('templates.template')

@section('title', $product->title)

@section('content')
    <h1>Страница товара</h1>
    <br>
    <div>id: {{ $product->id }}</div>
    <div>title: {{ $product->title }}</div>
    <div>price: {{ $product->price }}</div>
    <div>category: {{ $product->category->title }}</div>
    <a href="{{ route('product.edit', $product->id) }}">Редактировать</a>
    <form action="{{ route('product.destroy', $product->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить</button>
    </form>
@endsection
