@extends('layouts.main')

@section('content')
    @php
        $cards = config('product-cards');
    @endphp

    <main class="main container">

        @foreach ($cards['products'] as $dress)
            <div class="cards">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/') . $dress['frontImage'] }}" alt="">
                    <img class="cardb" src="{{ Vite::asset('resources/img/') . $dress['backImage'] }}" alt="">
                    <i id="heart" class="fa-solid fa-heart"></i>

                    <div class="labels">
                        @foreach ($dress['badges'] as $label)
                            <span class="{{ $label['type'] }}">{{ $label['value'] }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="text">
                    <p>{{ $dress['brand'] }}</p>
                    <strong>{{ $dress['name'] }}</strong>
                    <div class="marc">
                        <span class="red">{{ $dress['price'] }} &#8364;</span>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
