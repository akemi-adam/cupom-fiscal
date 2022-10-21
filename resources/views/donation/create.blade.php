@extends('layouts.pages')

@section('title', 'Faça uma doação!')

@section('content')
    <h2>
        Faça já uma doação para uma instituição de caridade!
    </h2>
    <form action="{{ route('donation.store') }}" method="post">
        @csrf
        <div class="my-3">
            <select name="receipt" id="receipt">
                @foreach ($receipts as $receipt)
                    <option value="{{ $receipt->id }}">{{ $receipt->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select name="institution" id="institution">
                @foreach ($institutions as $institution)
                    <option value="{{ $institution->id }}">{{ $institution->institution }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">
            Doar
        </button>
    </form>
@endsection