@extends('layouts.layoutCondiviso')
@section('titolo', "mostra libri per autore")
@section('contenuti')

<h1 class="mb-4 mt-4">
    Titolo dei libri per utente
</h1>

@if (isset($datiPerLaView) )

    @foreach ($datiPerLaView as $libro)
            <div >

                titoolo: {{  $libro->titolo }} <br>
                autore: {{  $libro->autore->nome }} <br>
                id: {{  $libro->id }} <br>

                <div class="mt-2 mb-5">
                    <a href="/libri/{{$libro->id}}/edit" class="btn btn-success"> edita libro </a>
                </div>
            </div>
    @endforeach
    
@endif

@endsection



