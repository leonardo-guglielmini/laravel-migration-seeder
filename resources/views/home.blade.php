{{-- @dd($trains); --}}

@extends('layouts.default')

@section('title')
    LARAVEL Migration & Seeder    
@endsection

@section('content')
    <form method="GET" action="{{ route('home') }}" class="position-absolute top-5 end-0">
        <select name="sort_by" id="sort_by">
            <option value="departure_time" {{ request('sort_by') == 'departure_time' ? 'selected' : '' }}>Orario di partenza</option>
            <option value="departure_station" {{ request('sort_by') == 'departure_station' ? 'selected' : '' }}>Stazione di partenza</option>
            <option value="train_number" {{ request('sort_by') == 'train_number' ? 'selected' : '' }}>Numero treno</option>
        </select>

        <select name="direction" id="direction">
            <option value="asc" {{ request('direction') == 'asc' ? 'selected' : '' }}>Crescente</option>
            <option value="desc" {{ request('direction') == 'desc' ? 'selected' : '' }}>Decrescente</option>
        </select>
        <button type="submit">Ordina</button>
    </form>
    
    <h2 class="text-center my-4">Elenco dei treni</h2>
    <div class="d-flex flex-wrap gap-2 justify-content-center">
        @foreach ($trains as $train)
            <x-card>
                <x-slot:train_number>{{$train['train_number']}}</x-slot:train_number>
                <x-slot:train_company>{{$train['company']}}</x-slot:train_company>
                <x-slot:train_departure_time>{{$train['departure_time']}}</x-slot:train_departure_time>
                <x-slot:train_departure_station>{{$train['departure_station']}}</x-slot:train_departure_station>
                <x-slot:train_arrival_time>{{$train['arrival_time']}}</x-slot:train_arrival_time>
                <x-slot:train_arrival_station>{{$train['arrival_station']}}</x-slot:train_arrival_station>
            </x-card>
        @endforeach
    </div>
    
@endsection
