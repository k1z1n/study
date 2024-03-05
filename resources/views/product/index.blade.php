@extends('templates.template')

@section('title', 'Страница с товарами')

@section('content')
    <h1>товары</h1>
    @foreach($products as $product)
        <div>{{ $product->id }}</div>
        <div>{{ $product->title }}</div>
        <div>{{ $product->price }}</div>
        <div>{{ $product->category->title }}</div>
        <hr>
    @endforeach
@endsection
