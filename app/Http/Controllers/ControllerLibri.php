<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\autore;
use DB;

class ControllerLibri extends Controller
{
    //


    public function index() {

        $libriAllRecords = books::orderBy("titolo", "asc")->with("autore")->get();
        return view("viewControllerLibri.viewIndex")->with("allRecordsLibri", $libriAllRecords);
    }



    public function create() {

        $autori  = autore::all();
        $idsLibri = books::all();

        $vettoreRecordsTabelle = [
            "recordsAutori" => $autori,
            "recordsLibri" => $idsLibri,
        ];

        return view("viewControllerLibri.createFormGenererica")->with("datiPerLaView", $vettoreRecordsTabelle );
    }

    
    public function store(Request $request) {

        $regole = [
                "titolo" => "required|string|min:3|max:22",
                "book_id"     => "required|string|min:1|max:22",
        ];

        $messaggio = [
            "required" => "il :attribute e' richiesto",
            "min" => "il :attribute deve essere minimo di tre caratteri",
            "max" => "il :attribute deve essere massimo di 22 caratteri",
        ];

        $this->validate($request, $regole, $messaggio);

        books::create($request->all());

        return redirect("/")->with("successo","record del libro, salvato con successo");
    }


    public function destroy($id) {
        books::destroy($id);
        return redirect("/")->with("successo","eliminazione del libro, eseguita con successo");
    }

    public function edit($id) {


        $libro = books::find($id)->toArray();
        $autore = autore::find($libro["book_id"])->toArray();

        $libroAndAutore =
        [
            "libro"  => $libro,
            "autore" => $autore,
        ];

        return view("viewControllerLibri.viewEditaLibro")->with("datiPerLaView", $libroAndAutore);
    }



    public function showLibriPerAutore($id) {

        $tuttiLibri         = books::orderBy("titolo", "asc")->with("autore")->get();
        return view("viewControllerLibri.viewMostraLibriPerAutore")->with("datiPerLaView",$tuttiLibri );
    }
    
    
    public function update(Request $request, $id) {

        $record = books::findOrfail($id);
        $record->update($request->all());

        return redirect("/")->with("successo", "record aggiornato con successo");
    }

}
