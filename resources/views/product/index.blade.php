@extends('templates.template')

@section('title', 'Страница с товарами')

@section('content')
    <h1>товары</h1>
    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif
    @foreach($products as $product)
        <div>{{ $product->id }}</div>
        <div>{{ $product->title }}</div>
        <div>{{ $product->price }}</div>
        <div>{{ $product->category->title }}</div>
        <a href="{{ route('product.show', $product->slug) }}">сюдаа</a>
        <hr>
    @endforeach
@endsection
