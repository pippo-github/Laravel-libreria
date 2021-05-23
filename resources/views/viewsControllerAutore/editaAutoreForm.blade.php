@extends('layouts.layoutCondiviso')
@section('titolo', "autore -- edit form: " . $recordAutoreToEdit->nome)

    <h1 class="p-2">
        Edit autore
    </h1>

    <p class="p-2 m-2">
        Modifica l'autore del libro nel db.
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

        {!! Form::open(["action" => ["App\Http\Controllers\ControllerAutore@update", $recordAutoreToEdit->id], "method" => "post" ]) !!}
        
        {!! Form::hidden("_method", "put") !!}

        {!! Form::text("nome", $recordAutoreToEdit->nome, ["class" => "form-control  mt-4" ]) !!}
        {!! Form::text("cognome", $recordAutoreToEdit->cognome, ["class" => "form-control mb-2 mt-1" ]) !!}
        {!! Form::text("autore_id", $recordAutoreToEdit->id , ["class" => "form-control mb-2 mt-1 ", "readonly" ]) !!}
        {!! Form::submit("invia i dati a libri/{libri}, metodo PUT", ["class" => "form-control btn btn-success" ]) !!}
        
        {!! Form::close("") !!}

    </div>

@section('contenuti')