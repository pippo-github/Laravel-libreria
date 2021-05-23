@extends('layouts.layoutCondiviso')
@section('titolo', "creazione della from inserimento autore")

    <h1 class="p-2">
        Insermento autore
    </h1>

    <p class="p-2 m-2">
        Inserisci un nuovo autore nel db.
    </p>

    <a href="/" class="btn btn-success m-4"> torna alla home</a>

    @if (count($errors))
 
        @foreach ($errors->all() as $errori)
            <div class="ml-2 text-danger">
                
                {{ $errori }}
            
            </div>
        @endforeach
        
    @endif


    <div class="container">
        
        {!! Form::open(["action" => ["App\Http\Controllers\ControllerAutore@store"], "method" => "post" ]) !!}
        
        {!! Form::text("nome", "", ["class" => "form-control  mt-4" ]) !!}
        {!! Form::text("cognome", "", ["class" => "form-control mb-2 mt-1" ]) !!}
        {!! Form::text("autore_id", $numeroAutori , ["class" => "form-control mb-2 mt-1 ", "readonly" ]) !!}
        {!! Form::submit("invia i dati a /auotre metodo post", ["class" => "form-control btn btn-success" ]) !!}
        
        {!! Form::close("") !!}
       
        
    </div>

@section('contenuti')