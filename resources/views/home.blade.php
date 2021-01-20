@extends('layouts.main')

 @section('content')   

    <main>
        <div>
            <h2>Shop</h2>
            <h3>Our Cars:</h3>
        </div>
        <ul>
            @foreach ($cars as $car)
                <li>
                    <h4> Modello: {{ $car->modello }}</h4> 
                    <div>Marca: {{ $car->marca }}</div>       
                    <div>Targa: {{ $car->targa }}</div> 

                    @if (!$loop->last)
                       <hr> 
                    @endif
                    
                </li>
            @endforeach
    
        </ul>


        <section id="app">
            <h3>Our Bikes:</h3>
            <ul>
                <li v-for="bike in bikes">
                    <h4>@{{bike.modello}}</h4>
                    <div>@{{bike.marca}}</div>
                    <div>@{{bike.targa}}</div>
                </li>
            </ul>
        </section>
    </main>

    <!-- Js --> 
    <script src="{{ asset('js/app.js') }}"></script>

@endsection


