@extends('templates.template')

@section('title', 'Страница редактирования')

@section('content')
    <h1>Страница редактирования</h1>
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="" placeholder="Имя" value="{{ $product->title }}">
        @error('title')
        {{ $message }}
        @enderror
        <input type="text" name="price" id="" placeholder="Цена" value="{{ $product->price }}">
        @error('price')
        {{ $message }}
        @enderror
        <select name="category_id" id="">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
        @error('category_id')
        {{ $message }}
        @enderror
        <input type="submit" value="update">
    </form>
@endsection
