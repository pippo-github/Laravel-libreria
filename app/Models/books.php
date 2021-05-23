<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'book';

    // permette il riempimento massivo
    // per qualunque campo della tabella
    // itilizzato per valorizzare la tabella
    // tramite il metodo:

    // books::create($request->all());


    protected $guarded = [];

    public function autore(){

        // se le relazioni danno problemi
        // indicarle anche qui, oltre che
        // nel file dei Models, di seguito
        // book_id: foreignKey di book
        // autore_id: primaryKey di autore

                                                      // FK     // PK
        return $this->belongsTo('App\Models\autore', "book_id", "autore_id");
        // return $this->belongsTo('App\Models\autore');

    }

    public function users()
    {
        return $this->hasMany('App\Models\User')->withTimestamps();
    }
}
