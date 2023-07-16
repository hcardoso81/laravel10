@extends('layouts.page')

@section('title', 'Contactanos')

@section('content')
    <h3>Dejanos un mensaje</h3>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value={{ old('name') }}>
        </label>
        <br>
        @error('name')
            <small><strong>{{ $message }}</strong></small><br>
        @enderror
        <label>
            Email:
            <br>
            <input type="text" name="email" value={{ old('email') }}>
        </label>
        <br>
        @error('email')
            <small><strong>{{ $message }}</strong></small><br>
        @enderror

        <label>
            Mensaje:
            <br>
            <textarea name="message" rows="">{{ old('message') }}</textarea>
        </label>
        <br>
        @error('message')
            <small><strong>{{ $message }}</strong></small><br>
        @enderror
        <br>
        <button type="submit">Enviar</button>
        @if (session('info'))
            <script>
                alert("{{ session('info') }}");
            </script>
        @endif
    </form>
@endsection
