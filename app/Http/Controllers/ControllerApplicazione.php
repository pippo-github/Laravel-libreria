<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autore;
use App\Models\books;
use DB;

class ControllerApplicazione extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $autoreAllRecords = DB::select("select count(nome),  a.nome, a.cognome, a.id  
        from autore a, book b 
        where a.autore_id = b.book_id 
        GROUP by a.autore_id, a.nome, a.cognome, a.id 
        ORDER by count(a.nome) 
        DESC LIMIT 3");

        return view("viewsApplicazioneFrontEnd.indexApp")->with("recordsAllAutore", $autoreAllRecords);
    }

}
