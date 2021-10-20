@extends('layout')

@section('title')
    Edit Categories
@endsection

@section('content')
    <h1> Edit categories</h1>

    @if($errors->any())
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
    @endif
    
    <form action="{{ url("/categories/" . $category->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="name" id="" value="{{ $category->name }}">
        <br>
        <textarea name="desc" id="" cols="30" rows="5">{{ $category->desc }}</textarea>
        <br>
        <input type="submit" value="add">
    </form>
@endsection