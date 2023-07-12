@extends('layouts.page')
@section('title', 'Curso')
@section('content')

    <h1>Curso: {{ $course }} </h1>
    @if ($category)
        <h2>Categoria: {{ $category }}</h2>
    @endif


@endsection
