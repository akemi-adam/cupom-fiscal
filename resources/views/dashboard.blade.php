@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <ul class="mt-4">
        <li><a href="{{ route('enterprise.create') }}">Cadastrar empresa</a></li>
        <li><a href="{{ route('enterprise.index') }}">Ver empresas</a></li>
        <li><a href="{{ route('institution.create') }}">Cadastrar instituição</a></li>
        <li><a href="">Cadastrar nota fiscal</a></li>
        <li><a href="">Fazer doação</a></li>
    </ul>
@endsection