@extends('layouts.layoutCondiviso')
@section('titolo', "creazione della from inserimento autore")

    <h1 class="p-2">
        Inserimento Libro
    </h1>

    <p class="p-2 m-2">
        Inserisci un nuovo libro nel db.
    </p>


    @if (count($errors))
 
        @foreach ($errors->all() as $errori)
            <div class="ml-2 text-danger">
                
                {{ $errori }}
            
            </div>
        @endforeach
        
    @endif


    <div class="container">

@php 

    $valoreInObjPHP = $datiPerLaView["contatoreDiRecords"][0];
    
    $vettoreMaxID = (array)$valoreInObjPHP;

    $maxAutoreID = 0;
    
    foreach ($vettoreMaxID as $id) {

        $maxAutoreID = $id;
    }

    $maxAutoreID += 1;

@endphp


@php
 
 $vettoreID_autore = [];
 
@endphp


@foreach ($datiPerLaView["ID_autori"] as $record_autori)
    @php $vettoreID_autore[] = $record_autori->autore_id @endphp 
@endforeach
        
        {!! Form::open(["action" => ["App\Http\Controllers\ControllerLibri@store"], "method" => "post" , "class" => "mt-5" ]) !!}
        {!! Form::label("titolo", "titolo" , ["class" => "text-white" ])!!}
        {!! Form::text("titolo", "", ["class" => "form-control  mt-4 mb-4" ]) !!}

        {!! Form::label("id", "book_id" , ["class" => "text-white" ])!!}
        {!! Form::text("id", $maxAutoreID, ["class" => "form-control mb-4 mt-4" ]) !!}

        {!! Form::label("book_id", "autore_id" , ["class" => "text-white" ])!!}
        {!! Form::select("book_id",  $vettoreID_autore, null, ["class" => "form-control mt-4 mb-2" ]) !!}
        
        {!! Form::submit("invia i dati a /libri metodo post", ["class" => "form-control btn btn-success" ]) !!}
        
        {!! Form::close("") !!}
    </div>

@section('contenuti')