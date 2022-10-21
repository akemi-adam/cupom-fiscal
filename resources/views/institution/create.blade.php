@extends('layouts.pages')

@section('title', 'Registre uma instituição')

@section('content')
    <form action="{{ route('institution.store') }}" method="post" class="mt-5">
        @csrf
        <label for="institution" class="h3">Instituição:</label>
        <input type="text" class="form-control" name="institution">
        <button class="btn btn-success mt-3">Enviar</button>
    </form>
@endsection