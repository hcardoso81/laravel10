@extends('layouts.page')
@section('title', 'Edit Course ' . $course->name)
@section('content')
    <h3>P&aacute;gina edici&oacute;n curso </h3>
    <a href="{{ route('courses.index') }}">Volver a cursos</a>
    <br>
    <form action="{{ route('courses.update', $course) }}" method="post">
        @csrf
        @method('put')
        <label for="name">Nombre</label>
        <br>
        <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}">
        @error('name')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <label for="description">Descripci&oacute;n</label>
        <br>
        <textarea id="description" name="description">{{ old('description', $course->description) }}</textarea>
        @error('description')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <label for="category">Categor&iacute;a</label>
        <br>
        <input type="text" id="category" name="category" value="{{ old('category', $course->category) }}">
        @error('category')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
