@extends('layouts.pages')

@section('title', 'Nota fiscal')

@section('content')
    <h1>
        Nota fiscal
    </h1>
    <hr>
    <form action="{{ route('receipt.store') }}" method="post">
        @csrf
        <h4 class="my-4">
            Selecione uma empresa:
        </h4>
        <select name="enterprise" id="enterprise">
            @foreach ($enterprises as $enterprise)
                <option value="{{ $enterprise->id }}">{{ $enterprise->name }}</option>
            @endforeach
        </select>
        <div class="my-4">
            <label for="tax" class="form-label">Imposto:</label>
            <input type="text" name="tax" id="tax" class="form-control w-25">
        </div>
        <hr>
        <h4 class="my-4">
            Selecione os produto:
        </h4>
        @foreach ($products as $product)
            <div class="form-check mb-3">
                <label for="{{ $product->name }}" class="form-check-label">{{ $product->name }}</label>
                <input type="checkbox" name="products[]" value="{{ $product->id }}" id="{{ $product->name }}" class="form-check-input">
                <div class="my-3">
                    <label for="amount">Quantidade:</label>
                    <input type="number" name="amount[]" class="form-control w-25">
                </div>
            </div>
        @endforeach
        <button class="btn btn-success">
            Cadastrar
        </button>
    </form>
@endsection