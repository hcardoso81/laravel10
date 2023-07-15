@extends('layouts.page')
@section('title', 'Curso ' . $course->name)
@section('content')

    <h3>Curso: {{ $course->name }} </h3>
    <a href="{{ route('courses.index') }}">Volver a cursos</a>
    <br>
    <a href="{{ route('courses.edit', $course) }}/">Editar curso</a>
    <p><strong>Categoria:</strong> {{ $course->category }}</p>
    <p>{{ $course->description }}</p>
    <form action="{{ route('courses.destroy', $course) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
