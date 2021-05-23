@extends('layouts.layoutCondiviso')
@section('titolo', "form generica -- inserisci ed edita libro: " . (isset($datiPerLaView['idSingoloAutore']) ? "edita" : "inserisci"))
@section('contenuti')

@if (isset($datiPerLaView['idSingoloAutore']))
    <div class="m-4">
        <h1>
            edit libro page
        </h1>
    </div>
@else
<div class="m-4">
    <h1>
        libro, pagina inserimento
    </h1>
</div>
@endif

<a href="/" class="btn btn-success">home page app</a>

 @if (count($errors->all()))
     @foreach ($errors->all() as $errore)
         {{ $errore }}
     @endforeach
 @endif

@php

$autori   = [];
$autoriID = [];

    if(isset($datiPerLaView['idSingoloAutore'])){
        $EditsingoloLibro = $datiPerLaView['idSingoloAutore'];
    }
    

@endphp

            @if (count($datiPerLaView) > 0)

                @php 
                
                if(isset($datiPerLaView["recordsAutori"]))
                 for($i=0; $i<count($datiPerLaView["recordsAutori"]); $i++)
                 {
                     $autoriID[] = $datiPerLaView["recordsAutori"][$i]['autore_id'];
                     $autori[] = $datiPerLaView["recordsAutori"][$i]['nome'];
                 }

                @endphp

            @endif

            {!! Form::open( ["action" =>  ["App\Http\Controllers\ControllerLibri@store"] , "method" => "post"  , "class" => "form-group"]) !!}
            @csrf
            {!! Form::input("titolo", "titolo", "segnaposto titolo", ["class" => "form-control mt-3"] ) !!}
            {!! Form::select("book_id",  $autori, "", ["id" => "mioIdSelect", "class" => "form-control mt-3"] ) !!}
            {!! Form::submit("inserisci valori", ["class" => "form-control mt-2"] ) !!}

            {!! Form::close("") !!}

           
            @if(count($datiPerLaView["recordsLibri"]) > 0 )
            
            <h1 class="m-5">
                Edita Libro
            </h1>


                @foreach ($datiPerLaView["recordsLibri"] as $libro)
                    <div class="m-5 border-bottom p-4">
                        titolo libro: {{ $libro->titolo }} <br>
                        <a href="/libri/{{$libro->id}}/edit" style="width:370px; margin-bottom: 2px" class="btn btn-success mt-1 ">edita libro</a> <br>

                        {!!Form::open(["action" => ["App\Http\Controllers\ControllerLibri@destroy", $libro->id], "method" => "post"])!!}
                        {!!Form::hidden("_method", "delete")!!}
                        {!!Form::submit("elimina libro, metodo :: DELETE; route: /libri/{libroID}", ["style" => "width:370px", "class" => "btn btn-danger form-contol"])!!}
                        {!!Form::close("")!!}

                    </div>
                @endforeach
            @endif
            
@endsection


<script>

    window.onload = () =>{
       
         let arrayAutori = <?php echo json_encode($autoriID); ?>

         for (i = 0 ; i<mioIdSelect.length; i++ ) {
            mioIdSelect.options[i].value = arrayAutori[i]
         }

    }

</script>