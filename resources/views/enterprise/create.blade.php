@extends('layouts.pages')

@section('title', 'Cadastrar empresa')

@section('content')
    <h2 class="mt-4">Registe uma empresa</h2>
    <form action="{{ route('enterprise.store') }}" method="post" class="my-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <livewire:address/>
        <div class="my-3">
            <label for="street" class="form-label">logradouro:</label>
            <input type="text" name="street" class="form-control">
        </div>
        <div class="my-3">
            <label for="street_number" class="form-label">Número do logradouro:</label>
            <input type="number" name="street_number" class="form-control">
        </div>
        <div class="my-3">
            <label for="cnpj" class="form-label">CNPj:</label>
            <input type="text" name="cnpj" class="form-control">
        </div>
        <div class="my-3">
            <label for="ie" class="form-label">IE:</label>
            <input type="text" name="ie" class="form-control">
        </div>
        <button class="btn btn-success">
            Cadastrar
        </button>
    </form>
@endsection