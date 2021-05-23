<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // nelle tabelle con relazione non viene utilizzato id
    // anche se il campo e' stato lasciato, ma viene utilizzato
    // autore_id e book_id, perche id dava problemi con la 
    // compatibilita' fra un campo e l'altro delle tabelle
    // relazionate, mettendo lo stesso tipo in entrambe
    // la tabelle: "autore" e "libro" il problema e' stato
    // risoloto

    public function up()
    {
        Schema::create('autore', function (Blueprint $table) {
            $table->id();
            $table->text("nome");
            $table->text("cognome");
            $table->string("autore_id")->index(); // questa e' primaryKey id l'ho lasciata solo per comodita'!
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autore');
    }
}
