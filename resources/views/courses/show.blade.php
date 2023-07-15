@extends('layouts.page')
@section('title', 'Curso ' . $course->name)
@section('content')

    <h1>Curso: {{ $course->name }} </h1>
    <a href="{{ route('courses.index') }}">Volver a cursos</a>
    <br>
    <a href="{{ route('courses.edit', $course) }}/">Editar curso</a>
    <p><strong>Categoria:</strong> {{ $course->category }}</p>
    <p>{{ $course->description }}</p>
@endsection
