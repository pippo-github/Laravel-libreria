@extends('layouts.layoutCondiviso')
@section('contenuti')

<h1 class="mb-4">
    Pagina autore 
</h1>

        <a href="/autore/create" class="btn btn-warning text-white bt-4 mb-4"> aggiungi un autore </a>
    
        <a href="/libri/create" class="btn btn-secondary text-white bt-4 mb-4"> sezione libri </a>

</div>



    @if ( count($recordsPerLaView) > 0 )
    
        @foreach ($recordsPerLaView as $record)
        
        <div class="container p-1 m-1 mb-5">

            nome:    {{$record->nome}} <br>
            cognome: {{$record->cognome}}  <br>
            id: {{$record->id}}  <br>
            autore n#: {{ $loop->index }}  <br>

                <div class="mt-3">
                    <div>
                        <a style='width:140px; margin-bottom:5px' href="/autore/{{$record->id}}/edit" class="btn btn-success "> edita  autore </a>
                    </div>
                    
                    {!! Form::open(["action" => ["App\Http\Controllers\ControllerAutore@destroy", $record->id], "method" => "POST", "class" => "form-group"  ])!!}
                    {!! Form::hidden("_method", "delete")!!}
                    {!! Form::submit("elimina  autore", ["class" => "btn btn-danger", "style" => "width:140px"]) !!} 
                    {!! Form::close("")!!}

                </div>

            
            </div>
        
        @endforeach

    @endif

@endsection