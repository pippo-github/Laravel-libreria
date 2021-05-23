<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // sono state utilizzate PK e FK per creare le relazioni fra le tabelle uno a molti
    // in quanto i campi predefiniti davano problemi sul tipo, che sono stati risolti
    // facendo diventare intrambe "string"

    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->text("titolo");
            $table->string("book_id"); // primary key di autore; qui e' foreign key
            $table->timestamps();
        });


        // questa agisce da alter table
        // aggiungendo il constraint

        // nelle tabelle con relazione non viene utilizzato id
        // anche se il campo e' stato lasciato, ma viene utilizzato
        // autore_id e book_id, perche id dava problemi con la 
        // compatibilita' fra un campo e l'altro delle tabelle
        // relazionate, mettendo lo stesso tipo in entrambe
        // la tabelle: "autore" e "libro" il problema e' stato
        // risoloto

            
        Schema::table('book', function (Blueprint $table)
        {
            $table->foreign('book_id')                      // book_id della tabella book locale FK
                ->references('autore_id')->on('autore')     // autore_id della tabella autore PK
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
