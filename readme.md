# Laravel library project

Project description
--------------------------------
<br />
<br />


**Purpose of the application:** The application shows at a basic level the use of the main features of the MySQL db implemented in Laravel with particular focus on relationships between tables.

**description:** The application that allows the control of the publications of books related to specific authors, the project is based on type one relationships,  Many (author) to Many(books), the three most prolific authors are shown on the home page.

*The dummy type records, relating to Authors and Books contained in a MySQL db are created through Seeder and Factory.
When an Author is removed, all the books connected to him are also removed in cascade thanks to the constraints.*

**Other features of the project:**

 * Application based on Many to Many relationships
 * Use of functions for BULK insertion of data in the db
 * Use Bootstrap for styling CSS classes
 * Using DB::select(), facades to make a custom query
 * It allowed to use shared layout through Blade Layout template engine
 * Shows how to use Form:: OOP, from package: laravelcollective/html
 * Show how to use url routes/actions parameterized, for Form:: OOP
 * Shows how to call the application Controller for Laravel versions> 7 via Fully-Qualified Class Names
 * Custom setting: Rules/Messages to validate the FORM through Validate Request, in the reference Controller


<br>
<br>


***Image perview of the project***

<br>

*Index page*

![home page img not present](.screenShot\homePage.png)

*Author page*

![Author page img not present](.\screenShot\autorePage.png)

*Books list page*

![list books page img not present](screenShot\elencoLibri.png)

*Book insert page*

![Books insert page img not present](screenShot\libriInserimento.png)

*Insert page*

![Insert page img not present](screenShot\inserimentoPage.png)


<br>
<br>
<br>


*What you need to create to make the application work:* 

 * Create a db called: "books"
 * create Three tables: "author", "books" and "autore_books"

<br />
<br />

You can automate the process using the db dump, containing structure and data: **"DB-dump-libri-and-data.sql"**

<br />
<br />

**Commands that could be used to run the application:**
<br />
<br />

Laravel dependencies:

$ composer dump-autoload <br />
$ composer install

<br />
<br />

NPM dependencies:

$ npm install

<br />
<br />

Sets the APP_KEY value in your .env:

$ php artisan key:generate

<br />
<br />

Install laravel collective for FORM :: OOP

$ composer require laravelcollective/html




<br />
<br />
<br />
<br />
<br />

# Laravel progetto biblioteca

Descrizione Progetto
-----------------------------------
<br />
<br />


**Sopo dell'applicazione:** L'applicazione mostra a livello base l'uso delle caratteristiche principali del db MySQL implementato in Laravel con particolare focus sulle relazioni fra tabelle.

**descrizione:** Permette il controllo delle pubblicazioni dei lirbri realtivi a specifici autori, il progetto e' basato sulle relazioni di tipo Molti(autore) a Molti(libri), nella home page vengono mostrati i tre autori piu' prolifici.

*I records di tipo dummy, relativi ad Autori e Libri contenuti in un db MySQL sono creati tramite Seeder e Factory.
Quando un Autore viene rimosso, in cascata grazie ai constraint vengono rimossi anche tutti i libri a lui collegati.*


**Altre caratteristiche del progetto:**

    * Applicazione basato su relazioni Molti a Molti
    * Utilizzo delle funzioni per l'inserimento BULK dei dati nel db
    * Utilizza Bootstrap per la stilizzazione delle classi CSS
    * Utilizzo facades DB::select per la personalizzazione delle query
    * Premette di utilizzare layout condiviso tramite Blade
    * Mostra come utilizzare Form:: OOP, del package: laravelcollective/html
    * Mostra come utilizzare url le rotte/actions parametrizzate, per i Form:: OOP
    * Mostra come chiamare il controller dell'applicazione per versioni di Laravel > 7 tramite le Fully-Qualified Class Name
    * Impostazione personalizzata: Regole/Messaggi per validare le FORM tramite Validate Request, nel Controller di riferimento



*Cosa occorre craeare per far funzionare l'applicazione:*

* Creare un db chiamato: "libri"
* creare tre tabelle: "autore", "libri" e "autore_books"

<br />
<br />

Puoi automatizzare il processo utilizzando il dump del db, contenente struttura e dati: **"DB-dump-libri-and-data.sql"**

<br />
<br />

**Comandi che poterbbero servire per eseguire l'applicazione:**
<br />
<br />

Laravel dipendenze:

$ composer dump-autoload <br />
$ composer install

<br />
<br />

NPM dipendenze:

$ npm install

<br />
<br />

Sets the APP_KEY per il file .env:

$ php artisan key:generate 

<br />
<br />

Installazione di laravel collective for FORM:: OOP

$ composer require laravelcollective/html



<br />
<br />


Developer by giuseppe tarallo, london 2021

<br />
<br />


***Author links:***

<br />
<br />

web: https://www.dev-ita.it<br />

git: https://github.com/pippo-github
