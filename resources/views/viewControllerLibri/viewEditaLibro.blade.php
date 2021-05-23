@extends('layouts.layoutCondiviso')
@section('contenuti')
    

<h1 class="text-white m-3">
    edita libro
</h1>


{!! Form::open(["action" => ["App\Http\Controllers\ControllerLibri@update", $datiPerLaView["libro"]["id"]], "method" => "post", "class" => "form-group"]) !!}
@csrf
{!! Form::hidden("_method", "put") !!}
{!! Form::text("titolo",$datiPerLaView["libro"]["titolo"], ["class" => "form-control"]) !!}
{!! Form::label("book_id", "Nome autore: " . $datiPerLaView["autore"]["nome"],  ["placeholder" => $datiPerLaView["autore"]["nome"] , "class" => "form-control"]) !!}
{!! Form::hidden("book_id", $datiPerLaView["libro"]["book_id"],  ["placeholder" => $datiPerLaView["autore"]["nome"] , "class" => "form-control"]) !!}
{!! Form::submit("edit i valori del libro, route:: libri/{parametro} ; metodo PUT", ["class" => "form-control btn btn-success"]) !!}
{!! Form::close("") !!}

@endsection