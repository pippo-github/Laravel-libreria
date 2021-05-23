<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autore extends Model
{
    use HasFactory;
    protected $table = 'autore';


    // queste due propieta' servono a stabilere
    // i campi valorizzabili o protetti della Model
    // uno esclude l'altro

    // per le singole propieta' da poter riempire 
    // in modo massivo
    
    // protected $fillable = [];
    

    // per le esclusioni del riempimento massivo
    // vuoto permette di inserire qualunque campo

    protected $guarded = [];  


    // senza ona delle  due precedenti
    // Autore::create($request->all());
    // non funziona e in campi vanno inseriti
    // uno per uno alla vecchia maniera


    public function books()
    {
        return $this->hasMany('App\Models\books');
    }
}
