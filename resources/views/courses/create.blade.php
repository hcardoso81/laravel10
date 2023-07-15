@extends('layouts.page')
@section('title', 'Create')
@section('content')
    <h1>P&aacute;gina creaci&oacute;n Curso </h1>
    <form action="{{ route('courses.store') }}" method="post">
        @csrf
        <label for="name">Nombre</label>
        <br>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for="description">Descripci&oacute;n</label>
        <br>
        <textarea id="description" name="description"></textarea>
        <br>
        <br>
        <label for="category">Categor&iacute;a</label>
        <br>
        <input type="text" id="category" name="category">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
