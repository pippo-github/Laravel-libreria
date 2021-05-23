@extends('layouts.layoutCondiviso')
@section('contenuti')
    
<h1 class="text-white mt-2 mb-4">
    Index elenco Libri
</h1>

<a href="/" class="btn btn-success m-4"> torna alla home </a>

    @if(count($allRecordsLibri) >0 )

        @foreach ($allRecordsLibri as $record)

            <div class="mt-2 mb-4 card ">

                <div class="card-title p-3">titolo: {{  $record->titolo }} </div>
                <div class='card card-body'>autore: {{  $record->autore->nome }} </div>

            </div>

        
        @endforeach

    @endif


@endsection
