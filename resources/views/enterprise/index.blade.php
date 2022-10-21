@extends('layouts.pages')

@section('title', 'Cadastrar empresa')

@section('content')
    @forelse ($enterprises as $enterprise)
        <div class="card my-4">
            <div class="card-header">
                <h3 class="card-title">{{ $enterprise->name }}</h3>
            </div>
            <div class="card-body">
                <h5>Sobre a empresa</h5>
                <span class="card-text">CNPj: {{ $enterprise->cnpj }}</span>
                <span class="card-text">IE: {{ $enterprise->ie }}</span>
            </div>
            <div class="card-footer">
                <h5>Endereço:</h5>
                <p class="card-text">
                    {{ $enterprise->discrict }}, {{ $enterprise->city }}, {{ $enterprise->street }} {{ $enterprise->street_number }}
                </p>
            </div>
        </div>
    @empty
        <h2>
            Nenhuma empresa foi cadastrada ainda
        </h2>
    @endforelse
@endsection