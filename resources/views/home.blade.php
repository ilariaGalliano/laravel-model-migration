@extends('layouts.main')

 @section('content')   

    <main>
        <div>
            <h3>Cars</h3>
            <p>Shop:</p>
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
    </main>

@endsection


