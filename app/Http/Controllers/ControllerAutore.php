<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\autore;


class ControllerAutore extends Controller
{
    //

    public function getHomePage() {
        return  view("indexApp");
    }

    public function index() {


        $tabella = new autore();
        $recordsAutori = $tabella::orderBy("nome", "asc")->orderBy("cognome","asc")->get();

        return view("autorePage")->with("recordsPerLaView", $recordsAutori);
    }


    public function create() {


        $tabellaAutore = new Autore();

        $numeroAutori = 0;

        $numeroAutori = Autore::whereRaw('id = (select max(`id`) from autore)')->get();

        if(count($numeroAutori) > 0){
        $numeroAutori = $numeroAutori[0]->id;

        $numeroAutori = $numeroAutori + 1;
        }
        else
        {
            $numeroAutori = 0;
        }

        return view("viewsControllerAutore.createFormAddAutore")->with("numeroAutori", (isset($numeroAutori) ) ? $numeroAutori : 0 );

    }


    public function store(Request $request) {

    
        $regole = [
            "nome" =>    "required|string|min:3|max:22",
            "cognome" => "required|string|min:3|max:22",
        ];
        
        $messaggiPersonalizzati = [
            "required" => " il campo :attribute e' richiesto"
        ];
        
        $this->validate($request, $regole, $messaggiPersonalizzati);
        
        Autore::create($request->all());

        return redirect("/autore")->with("successo", "record inserito correttamente");
    }

    public function show($id){

     return "show function id; $id";

    }


    public function edit($id) {

     $record = Autore::findOrFail($id);
     return view("viewsControllerAutore.editaAutoreForm")->with("recordAutoreToEdit", $record);

    }


    public function update(Request $request, $id) {

        $regole = [
            "nome" =>    "required|string|min:3|max:22",
            "cognome" => "required|string|min:3|max:22",
        ];
        
        $messaggiPersonalizzati = [
            "required" => " il campo :attribute e' richiesto",
            "min" => " il campo :attribute non puo' essere minore di 3 caratteri",
            "max" => " il campo :attribute non puo' essere maggiore di 22 caratteri"
        ];

        $this->validate($request, $regole, $messaggiPersonalizzati);


        $recordDaAggiornare =  Autore::findOrFail($id);
        $recordDaAggiornare->update($request->all());


        $allRecords = Autore::all();

        return view("autorePage")->with("recordsPerLaView", $allRecords);
    }



    public function destroy($id) {

        Autore::destroy($id);
        return redirect("/autore")->with("successo", "autore eliminato con successo");
    }

}
