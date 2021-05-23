<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoreBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autore_books', function (Blueprint $table) {
            $table->id();
            $table->string("autore_id");  // primary key di autore
            $table->string("book_id");    // foreign key di libri verso autore
            $table->timestamps();
        });


// altera la tabella: autore_books
// crea i constraint per l'elimianzione in cascata
// dalle tabelle referenziate: autore e book


	Schema::table('autore_books', function (Blueprint $table)
	{
		$table->foreign('book_id')
			->references('book_id')->on('book')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
		$table->foreign('autore_id')
			->references('autore_id')->on('autore')
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
        Schema::dropIfExists('autore_books');
    }
}
