@extends('layouts.layoutCondiviso')
@section('titolo', "titolo index applicazione")

@section('contenuti')

    <h1>

        Home page applicazione

    </h1>
<div class="mb-4 mt-4">

    <a href="/autore" class="btn btn-danger"> crea autore </a>
    <a href="/libri/create" class="btn btn-warning"> sezione libri </a>
    <a href="/libri/" class="btn btn-secondary text-white " style="background: blue;"> visualizza libri </a>

</div>

    @if ( count($recordsAllAutore) >0)


        @foreach ($recordsAllAutore as $autore)
        @php
        
            $x = (array)$autore; 
            $countKey = 0;
            $publicazioniAutore = '';

            foreach ($x as $key => $pubblicazioni) {
                if($countKey == 0){

                    $countKey++;
                    $publicazioniAutore = $pubblicazioni;
                }
            }
            
        @endphp
 
                <div class="mb-5 card card-body">

                    nome :    {{$autore->nome}} <br>
                    cognome : {{$autore->cognome}} <br>
                    id :      {{$autore->id}} <br>
                    num# :    {{$loop->index}} <br>
                    Pubblicazioni# :    {{$publicazioniAutore}} <br>
 
                </div>

        @endforeach

    
    @endif

@endsection


