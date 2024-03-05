@extends('templates.template')

@section('title', 'Страница добавления')

@section('content')
    <h1>Страница добавления</h1>
    <form action="{{ route('product.create') }}" method="post">
        @csrf
        <input type="text" name="title" id="" placeholder="Имя">
        @error('title')
        {{ $message }}
        @enderror
        <input type="text" name="price" id="" placeholder="Цена">
        @error('price')
        {{ $message }}
        @enderror
        @foreach($categories as $category)
        <select name="category_id" id="">
            <option value="{{ $category->id }}">{{ $category->title }}</option>
        </select>
        @endforeach
        @error('category_id')
        {{ $message }}
        @enderror
        <input type="submit" value="add">
    </form>
@endsection
