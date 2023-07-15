@extends('layouts.page')
@section('title', 'Cursos')
@section('content')
    <h1>Pagina principal de los cursos </h1>
    <a href="{{ route('courses.create') }}">Crear un Curso</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href={{ route('courses.show', $course->id) }}>{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>
    {{-- paginator --}}
    {{ $courses->links() }}
@endsection
