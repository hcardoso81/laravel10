@extends('layouts.page')
@section('title', 'Create')
@section('content')
    <h1>P&aacute;gina creaci&oacute;n Curso </h1>
    <a href="{{ route('courses.index') }}">Volver a cursos</a>
    <form action="{{ route('courses.store') }}" method="post">
        @csrf
        <label for="name">Nombre *</label>
        <br>
        <input type="text" id="name" name="name" value={{ old('name') }}>
        @error('name')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <label for="description">Descripci&oacute;n *</label>
        <br>
        <textarea id="description" name="description"> {{ old('description') }}</textarea>
        @error('description')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <label for="category">Categor&iacute;a *</label>
        <br>
        <input type="text" id="category" name="category" value={{ old('catgory') }}>
        @error('category')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
