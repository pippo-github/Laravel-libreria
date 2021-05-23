@extends('layouts.layoutCondiviso')
@section('titolo', "pagina elenco libri")
@section('contenuti')

        <h1>
            Pagina -- Elelcno libri
        </h1>


        <div class="mt-5 ">

            <a href="/autore" class="btn btn-success"> aggiungi autore</a>
            <a href="/libri/create" class="btn btn-danger"> aggiungi libro</a>

        </div>


        @if (count($errors->all()))
          @foreach ($errors->all() as $errori)
              {{ $errori }}
          @endforeach
        @endif


<div class="mt-5">

    @if(count($datiPerLaView) > 0)

            @foreach ($datiPerLaView as $record)
            
                titolo: {{ $record->titolo }} <br>

                {{Form::open(["action" => ["App\Http\Controllers\ControllerLibri@destroy", $record->book_id] , "mathod" => "POST", "class" => "form-group mt-2 mb-5" ]) }}

                @csrf

                    {{ Form::hidden("_method", "delete") }}
                    {{Form::submit("elimina libro",  ["class" => "btn btn-danger"])}}
                    <a href="/libri/{{$record->book_id}}/edit" class="btn btn-warning"> edita libro </a>

                {{Form::close("") }}

            @endforeach

        @endif


</div>

@endsection