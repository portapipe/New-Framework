Le classi

Ogni classe ha un nome intuitivo con l'aggiunta di una N (per New) davanti per evitare di sovrascrivere classi utilizzate da altri script.
LISTA CLASSI
Qui di seguito troverete le classi presenti nel framework (senza N anteposta)

    Impostazioni
        Codifica
        Document Root 

    Redirect
        Indirizzo (url o pagina,attesa in secondi,countdown o testo) 

    Url
        Provenienza (nome pagina di provenienza)
        Nome Pagina (post htaccess)
        Nome Pagina Originale (pre htaccess)
        Titoli delle pagine (tutto tra due apici, il primo valore è il titolo di default, poi nomepagina,titolo,nomepagina2,titolo2....)
        Nome del dominio (es. 'google' - funziona con .it.org.net.com) 

    Cookie
        Salva
        Cancella
        Cancella tutti 

    Sessioni
        Apri
        Chiudi
        Salva
        Visualizza
        Cancella 

    Headersent (risolve il problema "Header already Sent")
        Inizio (da posizionare all'inizio di qualsiasi riga di codice, implementazione di questo file escluso)
        Fine (da posizionare alla fine di tutto il codice) 

    Array
        Presente (valore presente in un array)
        Arrayotstring (converte array in stringa)
        Stringtoarray
        Arraymultitostring
        Sostituisci (sostituisce il valore di un elemento nell'array)
        Elimina (elimina un elemento nell'array)
        Ordina
        Rimuovidoppi (rimuove i valori duplicati in un array)
        Chiavi (estrae tutte le chiavi di un array)
        Valori (estrae tutti i valori di un array)
        Mescola (random dei valori)
        Conta (ritorna il numero degli elementi in un array) 

    Stringhe
        Escape (aggiunge degli slash prima delle virgolette)
        Unescape (toglie gli slash aggiunti dalla funzione escape)
        Codifica
        Decodifica
        br2nl
        Taglia stringa
        Evidenzia
        BBCode 

    Numeri
        Pari (se un numero è pari ritorna TRUE, altrimenti FALSE)
        Numero (controlla che il valore passato sia un numero. Ritorna TRUE se è un numero) 

    Database (db)
        Nome tabella
        Connessione (database MySQL)
        Select (query di estrazione dati)
        Insert (query di inserimento dati)
        Delete (query di eliminazione dati)
        Update (query di aggiornameto dati)
        Conta (ritorna il numero di record della query)
        Query Array (trasforma il risultato della query in array associativo)
        Query Costanti (associa i risultati della query a costanti, da usare con estrazioni singole)
        Tabella (crea una tabella con tutti i dati estratti dalla query; il nome delle colonne è quello dei campi nel database
        Riga (variabile per aggiungere righe alla funzione 'Crea tabella singola')
        Crea Tabella Singola
        Ricerca 

    Date
        Nome giorno (nome del giorno in italiano dalla data attuale o passata tramite parametro)
        Nome mese
        Ora (ora attuale o di data passata come parametro, come secondo scegliere se visualizzare i secondi)
        Giorno( giorno attuale o di data passata come parametro)
        Mese (mese attuale o di data passata come parametro)
        Anno (come secondo parametro scegliere se averlo in doppia o quadrupla cifra)
        Date to time (converte qualsiasi data, anche timestamp, in timestamp)
        Date ita to time
        Data oggi
        Ore in secondi
        Giorni in secondi
        Mesi in secondi
        Anni in secondi 

    Carrello della spesa
        Carrello (inizializza il carrello e/o ritorna i dati nel carrello)
        Svuota Carrello
        Inserisci
        Rimuovi
        Visualizza (crea un div contenente i prodotti nel carrello)
        Paypal (invia il carrello a paypal)
        Recupera paypal (recupera il valore inviato dalla funzione paypal dopo il pagamento) 

    Email
        Invia (invia tramite sito web o phpmailer scaricabile a parte)
        Email sicura (codifica l'email, tramite codice, per i bot e gli spy, rimanendo comunque inalterata all'utente) 

    Accesso
        Login
        ID (recupera l'id dell'utente collegato)
        Logout
        Controllo (controlla che l'utente sia collegato, utile nelle pagine protette 

    Form
        Apri (si può specificare se si inviano file)
        Submit
        Chiudi
        Ricevi (crea costanti con il nome della variabile inviata tramite REQUEST e il relativo valore)
        Salva File (indicando la posizione, salva files inviati tramite form multipart)
        Campo testo (con lista suggerimenti/autocomplete)
        Campo password
        Campo hidden
        Area testo (possibilità di selezionare editor esteso di testo: new-framework.js richiesto)
        Campo file
        Checkbox
        Radio
        Immagine
        Bottone
        Select
        Data (al click viene mostrato un calendario vicino al campo, jQuery) 

    File
        Salva
        Cancella
        Esiste (ritorna TRUE se il file esiste) 

    Cartelle
        Esiste (ritorna TRUE se la cartella esiste)
        Cancella (sia cartelle vuote che piene!)
        Contenuto (stampa a video il contenuto della cartella selezionata) 

    Valida
        Valida (validazione multipla)
        Email
        Testo
        Numeri
        Lunghezza
        URL
        IP
        Codice Fiscale
        IVA 

    Utili
        Menu (crea un menu orizzontale con effetto fade al passaggio del mouse, richiesta libreria jQuery)
        Browser (ritorna il nome del browser utilizzato)
        Sistema operativo (ritorna il nome del sistema operativo in uso)
        Mobile (ritorna TRUE se il dispositivo utilizzato è Mobile; possibilità di scegliere se iPad è mobile)
        Log Accessi (crea un file {Nlog.htm} contenente i dati dell'utente collegato; possibilità di passare valori aggiuntivi)
        Codice QR (crea un codice QR in base al testo passato come parametro)
        Sposta Ordina (drag & drop)
        Salva Sposta Ordina
        Aggiungi Font (font di google)
        IP 

Utilizzo

Per poter usare questo framework, dopo averlo scaricato, bisogna includerlo:

<?php include "new-framework.php" ?>

Basterà inizializzare le classi che si vogliono utilizzare per avere accesso agli strumenti relativi.

Esempio:

<?php
//Inizializziamo la classe Nurl per accedere agli strumenti relativi, assegnandola alla variabile omonima Nurl
$Nurl=new Nurl();

//Questo codice stamperà a video il nome della pagina corrente
echo "Il nome della pagina corrente è: ".$Nurl->paginacorrente();
?>

Tutto qui. Se invece siete interessati a tutti gli strumenti, aprite il file new-framework.php, andate alla fine del file e troverete tutte le classi già inizializzate. Basterà toglierle dal commento per avere già tutto pronto all'uso (istruzioni dettagliate direttamente nel file).

Per chi non conosce la programmazione ad oggetti

La programmazione ad oggetti è molto simile a quella procedurale. L'unica differenza sostanziale è che invece di usare delle funzioni, vengono usate delle classi. Le funzioni, come sappiamo, si richiamano così:

... nomefunzione() ...

Nella programmazione ad oggetti le funzioni sono contenute dentro delle classi, che possono essere paragonate a "mega-contenitori" che tengono ordinato il tutto. Nel nostro caso, se volessimo sapere il nome della pagina di provenienza, dovremmo creare una variabile e assegnargli, tramite la variabile $SESSION... eccetera. Con questa libreria basterà dire alla pagina php che vuoi usare un "mega-contenitore" che sa da che pagina provengo (il contenitore si chiama Nurl, come da lista iniziale), assegnarlo ad una variabile

$Nurl=new Nurl();

e richiedere la pagina di provenienza. Come? Usando una freccina:

$Nurl->provenienza();

dove provenienza è il nome della nostra funzione, solo che richiamata attraverso il suo conenitore. Quest'ultimo codice può essere stampato a video, messo in una variabile e utilizzato nella pagina... questo codice verrà sostituito dal nome della pagina di provenienza.

C'è una variante. Nel caso si volesse usare una funzione che analizzi dei dati inviati dall'utente, essi andranno messi tra le parentesi della funzione nell'ordine prestabilito (che troverete in questa documentazione, una per ogni voce), come d'altronde facciamo già per le funzioni base. Prendiamo in esempio un array di nomi. Vogliamo sapere se il nome che ho in mente è contenuto dentro questo array. Come fare? Semplice. Creiamo un array con una lista di nomi, inizializziamo la classe Narray e controlliamo, tramite la funzione "presente()" se il nome che mi martella da mesi c'è in quella lista.

Un pò di codice:

//Creiamo la lista di nomi
$array=array('Luca','Lucia','Mario','Giovanni','Carmelo','Laura','Pamela');

//Nome che ho in mente
$nome='Laura';

//Inizializziamo la classe Narray
$Narray=new Narray();

//Controlliamo se il nome è nella lista mandando alla funzione 'presente' il nome e l'array
$verifica=$Narray->presente($nome,$array);

//Se il nome è presente allora verrà ritornato TRUE, vero, e ci comportiamo di conseguenza
if($verifica==TRUE){
     echo "Il nome è presente";
}else{
     echo "Il nome non è presente";
}



Dettagli Classi
Impostazioni

$Nimpostazioni=new Nimpostazioni();

    Codifica

    $Nimpostazioni->codifica='utf-8';

    Default UTF-8. Non influisce, per ora, sulla codifica delle classi.

    // Esempio
    $Nimpostazioni->codifica=iso-8859-1;

    Document Root

    $Nimpostazioni->document_root();

    Utile per settare la variabile server: DOCUMENT ROOT (utilizzata dall'intero framework per sapere il percorso fisico del vostro sito nel server) con una differente. Ritorna la document root.

    // Esempio 1
    echo $Nimpostazioni->document_root(); //ritorna la document root attuale

    // Esempio 2
    $Nimpostazioni->document_root("C:\Program Files\Apache Group\Apache2\");

    echo $Nimpostazioni->document_root(); //ritorna C:\Program Files\Apache Group\Apache2\
    echo $_SERVER['DOCUMENT_ROOT']; //ritorna anche lui C:\Program Files\Apache Group\Apache2\


Indice Classi <> Top dettagli Classi


Redirect

$Nredirect=new Nredirect();

    Indirizzo (url o pagina)

    $Nredirect->indirizzo($url_o_pagina,$secondi_attesa(opzionale, default:''),$countdown(opzionale, default:''))

    Crea un redirect ad una pagina o un url. Primo parametro obbligatorio dove specificare indirizzo o nome pagina. Il secondo parametro, secondi attesa, va usato se si vuole un attesa prima del redirect. Inserire il numero di secondi. Countdown, il terzo parametro, può essere utilizzato solo nel caso in cui il secondo parametro sia stato settato. Inserire 'si' come parametro per visualizzare un countdown in tempo reale oppure un testo a scelta (può essere anche un'immagine, un link... qualsiasi cosa). Non va utilizzato con "echo" ma solo richiamato. Al resto pensa lui.

    // Esempio 1
    $Nredirect->indirizzo('nome_pagina.php');

    //Esempio 2
    $Nredirect->indirizzo('http://www.google.com',2,'Attendere prego, la stiamo reindirizzando a Google');
    //Verrà creato un redirect che visualizza la scritta 'Attendere prego, la stiamo...' e dopo 2 secondi inoltra il redirect

    Se doveste riscontrare il problema di Header Already Sent:

    Warning: Cannot modify header information - headers already sent by (output started at...

    allora usare la funzione Nheadersent, visualizzabile qui o selezionabile dall'indice delle classi. 


Indice Classi <> Top dettagli Classi


Url

$Nurl=new Nurl();

Nessuna classe seguente è stata testata per il passaggio di variabili tramite GET.

Per passare dati tramite POST in modo asincrono, potete usare la semplice funzione Npost() con le sue varianti proposta nel file javascript. Troverete la documentazione nel wiki.

    Provenienza (nome pagina di provenienza)

    $Nurl->provenienza();

    //Esempio:
    echo $Nurl->provenienza(); //Stamperà la pagina dalla quale si proviene

    Nome Pagina (post htaccess)

    $Nurl->nomepagina();

    //Esempio:
    echo $Nurl->nomepagina(); //Stamperà la pagina attuale

    In caso di regole htaccess attive, verrà preso in considerazione il nome della pagina modificato. 

    Nome Pagina Originale (pre htaccess)

    $Nurl->nomepaginaoriginale();

    //Esempio:
    echo $Nurl->nomepaginaoriginale(); //Stamperà la pagina attuale

    Nonostante le regole htaccess risultino attive, verrà preso in considerazione il nome della pagina originale, compreso di estensione. Consigliato in caso di controlli e redirect in base al nome delle pagine. 

    Titoli delle pagine (tag title dinamico in base al nome della pagina)

    $Nurl->title('pagina/valore');

    Questa classe analizza il nome originale della pagina (pre htaccess) e in base ad essa ritorna una stringa. Viene utilizzato per rendere dinamici i titoli delle pagine in base alla pagina stessa. Gli unici apici, singoli o doppi, andranno messi uno all'inizio e l'altro alla fine, così da formare una lunga stringa di valori. Per separare i valori andrà usata la virgola. 

    Il primo valore dovrà essere la frase di default, nel caso il nome del file non sia nella lista. Il secondo valore sarà il nome della pagina e il terzo sarà la frase relativa alla pagina appena inserita. Per inserire più pagine basterà seguire lo schema: nomepagina2.phpfrase pagina 2nomepagina3.php.. E' accettato come parametro anche un array, ma la struttura dovrà essere la stessa: frase_default,pag1,val1,pag2,val2... 

//Esempio generico
$Nurl->title("Frase di default,,pag1.php,,Frase pag1,,pag2.php,,Frase pag2,,pag3.php,,Frase pag3,,pag4...");

//Esempio:
echo $Nurl->title("Benvenuti,,index.php,,Homepage,,contatti.php,,Contatti");

    Se utilizzata per i titoli, andrà inserita tra i tag <title></title>:

    <title><?php echo $Nurl->title("Benvenuti,,index.php,,Homepage,,contatti.php,,Contatti"); ?></title>

    Nome del dominio

    $Nurl->nomedominio();

    Estrae il nome del dominio

    // Esempio
    $Nurl->nomedominio();
    //Se siete su www.google.it o .com ecc.. ritornerà: "google"


Indice Classi <> Top dettagli Classi


Cookie

$Ncookie=new Ncookie();

    Salva

    $Ncookie->salva($nome,$contenuto,$durata_in_ore(opzionale; default:24));

    //Esempio

    $Ncookie->salva('lingua','Italiano',6);
    //salverà un cookie di nome "lingua" con valore "Italiano" con la durata di 6 ore

    Cancella

    $Ncookie->cancella($nome);

    //Esempio

    $Ncookie->cancella('lingua');

    Cancella tutti

    $Ncookie->cancella_tutti();

    Come da nome, cancella tutti i cookie. 


Indice Classi <> Top dettagli Classi


Sessioni

$Nsessioni=new Nsessioni();

Necessario aprire le sessioni e chiuderle in ogni pagina in cui si vuole utilizzarle.

    Apri

    $Nsessioni->apri();

    Se il framework non è nella root principale questa funziona non viene creata correttamente (viene aperta una sessione nella cartella contenente il framework ma non nella root del sito). In questo caso consiglio di utilizzare il classico 'session_start();' nelle pagine principali del sito. 

    Chiudi

    $Nsessioni->chiudi();

    Salva

    $Nsessioni->salva(nome,contenuto,codifica(opzionale, default:'no'));

    //Esempio:
    $Nsessioni->salva('lingua','italiano');
    //Salverà la sessione "lingua" con valore "italiano"

    //Esempio 2:
    $Nsessioni->salva('nome_utente','andrea','si');
    //Salverà la sessione "nome_utente" con valore CRIPTATO andrea

    Visualizza

    $Nsessioni->visualizza(nome,codifica(opzionale, default:'no'));

    //Esempio:
    $Nsessioni->visualizza('nome_utente','si');
    //Ritorna la sessione "nome_utente" DECRIPTATA

    Cancella

    $Nsessioni->cancella(nome);

    //Esempio:
    $Nsessioni->cancella('nome_utente');


Indice Classi <> Top dettagli Classi


Headersent

$Nheadersent=new Nheadersent();

Risolve il problema "Warning: Cannot modify header information - headers already sent by (output started at..."

Non stampare a video ma richiamare solo la funzione, quindi niente 'echo' o 'print'.

    Inizio (da posizionare all'inizio di qualsiasi riga di codice, dopo aver implementato questo file)

    $Nheadersent->inizio()

    //Esempio
    <? include "new-framework.php" ?>
    <? $Nheadersent=new Nheadersent();?>
    <? $Nheadersent->inizio() ?>
    <html>...

    Fine (da posizionare alla fine di tutto il codice)

    $Nheadersent->fine()

    //Esempio
    ...</html>
    <? $Nheadersent->fine() ?>


Indice Classi <> Top dettagli Classi


Array

$Narray=new Narray();

    Presente (valore presente in un array)

    Verifica che un valore sia presente in un array. Ritorna TRUE se il valore è presente, FALSE se non è presente.

    $Narray->presente($valore,$array);

    //Esempio

    $array=array('Gatto','Cane','Petauro','Formica','Riccio');
    $Narray->presente('Petauro',$array); //Restituirà TRUE
    $Narray->presente('Cavallo',$array); //Restituirà FALSE

    Arrayotstring (converte array in stringa)

    $Narray->arraytostring($array,$delimitatore(opzionale; default:',');

    //Esempio

    $array=array('Gatto','Cane','Petauro','Formica','Riccio');
    $Narray->arraytostring($array,'-');
    //Ritornerà la stringa: 'Gatto-Cane-Petauro-Formica-Riccio'

    Stringtoarray (converte stringa in array)

    $Narray->stringtoarray($stringa,$delimitatore(opzionale; default:',');

    //Esempio

    $array='Gatto','Cane','Petauro','Formica','Riccio';
    $Narray->stringtoarray($array);
    //Ritornerà un array formato dalle voci: Gatto,Cane,Petauro,Formica,Riccio'

    Array multi to string (converte stringa in array)

    $Narray->arraymultitostring($stringa,$delimitatore1(opzionale; default:'='),$delimitatore2(opzionale; default:','));

    //Esempio

    $array=array('Animale 1'=>'Gatto','Animale 2'=>'Cane','Animale 3'=>'Petauro','Animale 4'=>'Formica','Animale 5'=>'Riccio';
    $Narray->arraymultitostring($array);
    //Ritornerà la stringa: 'Animale 1=Gatto,Animale 2=Cane,Animale 3=Petauro,Animale 4=Formica,Animale 5=Riccio'

    Sostituisci (sostituisce il valore di un elemento nell'array)

    $Narray->sostituisci($array,$valore,$nuovo_valore);

    //Esempio
    $array=array('Pane','Pasta');
    $Narray->sostituisci($array,'Pasta','Vino'); //L'array diventerà: 'Pane','Vino'

    Elimina (elimina un elemento nell'array)

    $Narray->elimina($array,$valore);

    Va associato allo stesso array, poiché ritorna l'array modificato.

    //Esempio

    $array('Pane','Pasta','Vino');
    $array=$Narray->elimina($array,'Pane');//L'array diventerà: 'Pasta','Vino'

    Ordina

    $Narray->ordina($array);

    Rimuovidoppi (rimuove i valori duplicati in un array)

    $Narray->rimuovidoppi($array);

    Chiavi (estrae tutte le chiavi di un array)

    $Narray->chiavi($array);

    Valori (estrae tutti i valori di un array)

    $Narray->valori($array);

    Mescola (random dei valori)

    $Narray->mescola($array);

    Conta (ritorna il numero degli elementi in un array)

    $Narray->conta($array);


Indice Classi <> Top dettagli Classi


Stringhe

$Nstringhe=new Nstringhe();

    Escape (aggiunge degli slash prima delle virgolette)

    $Nstringhe->escape($stringa);

    Unescape (toglie gli slash aggiunti dalla funzione escape)

    $Nstringhe->unescape($stringa);

    Codifica

    $Nstringhe->codifica(stringa,volte(opzionale, default:1),aggiungi(opzionale, default:' '));

    Per codificare una stringa, passarla come primo parametro; come secondo, opzionale, specificare il numero di volte che verrà codificato. Più volte vorrà dire maggior profondità di codifica ma anche maggior utilizzo di risorse, le quali rallenteranno il sistema. Il terzo parametro è utilizzabile solo se la stringa contiene ESCLUSIVAMENTE NUMERI.

    //Esempio
    $Nstringhe->codifica('85','3','10');
    //ritornerà il numero codificato.

    Decodifica

    $Nstringhe->decodifica(stringa,volte(opzionale, default:1),rimuovi(opzionale, default:' '));

    Va utilizzato per decodificare le stringhe codificate con la funzione 'Codifica'. 

    Br2nl

    $Nstringhe->br2nl(stringa);

    Va utilizzato per convertire l'accapo html (
    e

    ) con \n, usato nelle aree di testo input.

    //Esempio
    $var=$Nstringhe->br2nl('Ciao Valeria.<br />Oggi ho scoperto un nuovo framework');

    Taglia Stringa

    $Nstringhe->taglia_stringa(stringa,caratteri(opzionale, default: 50));

    Utile per tagliare le stringhe ad un certo numero di caratteri. Usato solitamente per mostrare una parte di testo prima di un articolo di un blog o giornale. Vengono aggiunti tre puntini alla fine della stringa tagliata.

    //Esempio
    $var=$Nstringhe->taglia_stringa('Nel mezzo del cammin di nostra vita' , 9);

    echo $var; //stamperà "Nel mezzo..."

    Evidenzia

    $Nstringhe->evidenzia(stringa,volte(opzionale, default:1),rimuovi(opzionale, default:' '));

    Va utilizzato per decodificare le stringhe codificate con la funzione 'Codifica'. 

    BBCode

    $Nstringhe->bbcode(stringa,reset(opzionale, default:''));

    Necessario per decodificare un testo con codice BBCode in HTML, soprattutto quello creato dall'editor dell'area testo della classe Nform. Ritorna la stringa modificata. Il secondo parametro, se settato come 'si' cancellerà tutto il codice bbcode all'interno della stringa passata, ritornando la stringa pulita.

    //Esempio 1
    $stringa='[B]Ciao Mondo[/B]';
    $stringa=$Nstringhe->bbcode($stringa);
    echo $stringa;
    //scriverà a video '<strong>Ciao Mondo</strong>'

    //Esempio 2
    $stringa='[B]Ciao Mondo[/B]';
    $stringa=$Nstringhe->bbcode($stringa,'si');
    echo $stringa;
    //scriverà a video 'Ciao Mondo'


Indice Classi <> Top dettagli Classi


Numeri

$Nnumeri=new Nnumeri();

    Pari (se un numero è pari ritorna TRUE, altrimenti FALSE)

    $Nnumeri->pari($numero);

    Numero (controlla che il valore passato sia un numero. Ritorna TRUE se è un numero)

    $Nnumeri->numero($numero);

    //Esempio

    $Nnumeri->numero('ciao'); //Ritornerà FALSE


Indice Classi <> Top dettagli Classi


Database (db)

$Ndb=new Ndb();

N.B. Nei parametri di CONDIZIONI, il valore di controllo, se stringa, va inserito tra apici, diversi da quelli di apertura stringa. Esempio:

...'nome="portapipe" '...
// oppure
...'paese="italia",scuderia="ferrari" '...

    Nome tabella (variabile)

    nometabella=...;

    Setta il nome della tabella da cui estrarre i dati (utilizzabile SOLO se i risultati in alcune delle funzioni della classe Ndb non corrispondono alle aspettative). Da modificare solo in caso di necessità, altrimenti viene settata in automatico. 

    Connessione (database MySQL)

    $Ndb->connessione('user','password','ip_mysql','nome_database');

    // Esempio
    $Ndb->connessione('root','root','localhost','e_shop');

    Select (query di estrazione dati)

    $Ndb->select('nome_tabella','campi','condizioni'(opzionale),'order_by'(opzionale),'limit'(opzionale));

    // Esempio
    $query=$Ndb->select('utenti','*');
    //Estrae tutti i campi di tutti gli utenti

    // Esempio 2
    $query=$Ndb->select('utenti','id,nome','nome="portapipe" ','',1);
    //Estrae id e nome dalla tabella utenti dove il nome è portapipe, 1 record

    // Esempio 3
    $query=$Ndb->select('utenti','*','','nome DESC');
    //Estrae tutti gli utenti ordinati per nome decrescente 

    // Esempio 4
    $query=$Ndb->select('utenti','*','','RAND()',2);
    //Estrae due record casuali

    Per evitare di avere troppi parametri, le condizioni, nel caso fossero multiple, andranno concatenate con AND e/o OR: 

    ...'id=1 AND nome="portapipe" OR cognome!="rossi" '... 

    Insert (query di inserimento dati)

    $Ndb->insert('nome_tabella','valori');

    I valori si inseriscono come: campovalorecampo2valore2... e andranno inseriti tutti tra due singoli o doppi apici: 'campovalorecampo2valore2', NON 'campo','valore','campo2','valore2'. NOTARE BENE LA DOPPIA VIRGOLA PER SEPARARE I SINGOLI VALORI DAI CAMPI! 

    In caso di testi fare l'escape della stringa con $Nstringhe->escape()

    // Esempio
    $Ndb->insert('utenti','id,,1,,nome,,portapipe,,password,,new-framework');

    //Esempio 2
    $nome=portapipe;
    $password=new-framework;
    $Ndb->insert('utenti','id,,1,,nome,,'.$nome.',,password,,'.$password);

    Delete (query di eliminazione dati)

    $Ndb->delete('nome_tabella','condizioni','AND_OR'(opzionale, default AND));

    A differenza del select, le condizioni multiple potranno essere divise da doppia virgola e settare come terzo parametro se utilizzare AND oppure OR tra loro. In caso di problemi o di abitudine, è possibile usare direttamente AND/OR nel parametro condizioni.

    // Esempio
    $Ndb->delete('utenti','nome="portapipe" ');

    // Esempio 2
    $Ndb->delete('utenti','nome="portapipe",,id!=12','OR');
    // In questo caso verra cancellato il record dove nome è portapipe OPPURE l'id è 12

    // Esempio 3
    $Ndb->delete('utenti','nome="portapipe" OR id!=12');
    // Come esempio 2 con utilizzo di OR dentro al parametro 'condizioni'

    Update

    $Ndb->update('nome_tabella','valori','condizioni','AND_OR'(opzionale, default: 'AND') );

    Valori e condizioni andranno divisi da DOPPIA virgola. In caso di problemi o di abitudine, è possibile usare direttamente AND/OR nel parametro condizioni.

    //Esempio:
    $Ndb->update('articoli','titolo,,Ciao,Mondo','id=2');

    //Esempio 2:
    $Ndb->update('utenti','password,,newfr,,livello,,2','nome_utente="Andrea",,cognome="Rossi" ','OR');

    //Esempio 3:
    $Ndb->update('utenti','password,,newfr,,livello,,2','nome_utente="Andrea" AND cognome="Rossi" ');

    Conta (ritorna il numero di record di una query passata come parametro)

    $Ndb->conta($query);

    Query Array

    $Ndb->query_array('query');

    Trasforma i risultati della query passata in un array.

    //Esempio:
    $query=$Ndb->select('articoli');
    $array=query_array($query);
    print_r($array);

    Query Costanti

    $Ndb->query_costanti('query');

    Trasforma il risultato di una query passata come parametro in costanti. Il nome di ogni costante sarà il nome del campo nel database. Utilizzabile per estrazioni di singoli record. Nessun limite di campi.

    //Esempio:
    $query=$Ndb->select('articoli','id=2');
    $Ndb->query_costanti($query);
    echo titolo_articolo;
    //stamperò il campo 'titolo_articolo' dell'articolo con id=2 presente nella tabella 'articoli' del database

    Tabella

    Questa nuova funzione permette di creare una tabella da una query, il tutto in automatico, e stamparla direttamente a video. Si può passare anche solo un parametro, la query, per veder comparire una tabella con i titoli delle colonne prese dal nome di ogni campo e riempite di ogni dato estratto dalla query.

    //Forma base:
    $Ndb->tabella('query');

    //La forma completa (ogni parametro oltre la query è opzionale, default:' ') :
    $Ndb->tabella('query','testo_visualizza','testo_modifica','testo_cancella','url_visualizza','url_modifica','url_cancella','passa_valori');

    Con la forma base viene creata una semplice tabella. Con la forma completa, invece, si potrà ottenere una tabella con colonne supplementari, per ogni record, che permetteranno la visualizzazione, la modifica e la cancellazione del singolo record. Se tenuti vuoti i parametri: 'testo_..', la funzione relativa rimarrà nascosta, altrimenti verrà mostrato ciò che contiene il parametro (esempio un testo, un'immagine, un link...).

    //Esempio con tasto modifica
    $query=$Ndb->select('nomi_bambino');
    $Ndb->tabella($query,'','Modifica Nome bambino');
    //in questo modo verrà creata una tabella con, a destra, la scritta 'Modifica Nome bambino e il link di default alla pagina modifica.php (che andrà creata)

    E mi chiederete: che dati passa per l'estrazione univoca? Quelli sono valori che vanno specificati nell'ultimo parametro (sempre da DOPPIA virgola). Di default viene preso il campo 'id'. IMPORTANTE! Il nome del dato da passare deve essere IDENTICO a quello del database. Esempio: voglio passare l'email come campo valore per l'estrazione. Se il campo dove è salvata nel database si chiama 'email_utente', bisognerà inserire come ultimo parametro: ...','email_utente'); . Viene passato SEMPRE il NOME DELLA TABELLA tramite GET, così come i dati, quindi ATTENZIONE a non passare dati importanti come la password o dati sensibili (a meno che non sia un pannello di controllo privato per la modifica personale di un sito web) 

    Le pagine di default sono:

        url_visualizza = visualizza.php
        url_modifica = modifica.php
        url_cancella = cancella.php 

    Un'ultima chicca niente male: se avete già delle immagini per le tre opzioni (visualizza, modifica e cancella) da usare al posto del testo semplice, basterà scrivere 'default' dentro ogni parametro che volete utilizzare, e il sistema andrà a cercare nella cartella img/ il file immagine (in formato .gif) relativo: 

    Le immagini di default dovranno essere nella cartella 'img/', in formato .gif e con i seguenti nomi:

        visualizza = visualizza.gif
        modifica = modifica.gif
        cancella = cancella.gif 

STRUMENTO PERFETTO PER UN PANNELLO DI CONTROLLO PRIVATO !!

//Query usata per esempi
$query=$Ndb->select('annunci');

//Esempio 1:
$Ndb->tabella($query,'default','default','','vis_an.php','mod_an.php','','id_annuncio');
//Tabella annunci con link a visualizza e modifica, immagini di default, link a vis_an e mod_an.php e passaggio valore campo id_annuncio

//Esempio 2:
$livello_utente=0; //0=amministratore
$Ndb->tabella($query,'default',($livello==0?'default':NULL),'','vis_an.php','mod_an.php');
//Tabella annunci con tasto visualizza. Tasto modifica visualizzato solo se il livello utente è 0. Viene passato il campo 'id'. Link alle stesse pagine di esempio 1

    Riga

    $Ndb->riga['nome_campo']='valore_campo';

    Requisito fondamentale per creare una tabella singola. Ogni riga viene aggiunta alla funzione 'crea_tabella_singola()'. Esempi nella prossima funzione. 

    Crea Tabella Singola

    Ideata per creare tabelle da estrazione di singoli record dal database (fondamentale per creare le pagine 'visualizza' della funzione 'tabella' di Ndb), da riempire con $Ndb->riga.

    //Formato base:
    $Ndb->crea_tabella_singola();

    //Formato esteso:
    $Ndb->crea_tabella_singola('valore_estrazione_unicova','campo_per_estrazione_univoca','testo_modifica','testo_cancella','url_modifica','url_cancella');

    Questa funzione crea una tabella verticale. Come nella funzione 'tabella', anche qui si potranno avere, in cima alla tabella, i pulsanti di modifica e cancellazione del record in questione. i campi valore e campo estrazione univoca serviranno per indicare quale campo utilizzare per l'identificazione del record; di default è l'id. Per popolare la tabella andranno aggiunte delle righe contenenti i vari dati.

    //Esempio:
    $Nform=new Nform();
    $Ndb->query_costanti($query);
    $Ndb->riga['ID']=id;
    $Ndb->riga['Titolo Annuncio']=titolo_annuncio
    $Ndb->riga['Testo Annuncio']=$Nform->campotesto('testo',testo_annuncio);
    $Ndb->crea_tabella_singola();

    In questo esempio aggiungiamo tre righe. La prima conterrà l'id dell'annuncio, il secondo il titolo dell'annuncio mentre nel terzo verrà creato con un campo testo con attributo 'name' = 'testo' e popolato con il testo dell'annuncio. Dopodiché verrà creata la tabella. Come vedete si può creare tranquillamente un pannello di controllo con una pagina per la visualizzazione ed una pagina per la modifica, inserendo per ogni riga i vari campi di upload file, area testo (con possibilità di rich text editor in jQuery inclusa nel file new-framework.js) e via discorrendo. 

    Ricerca

    $Ndb->ricerca(nome_tabella,campi,termini,parziale(opzionale, default:''),where(opzionale,default:''), limit(opzionale,default:'');

    Utile strumento per la ricerca di parole all'interno di un database. Il primo parametro dovrà contenere il nome della tabella nel database nel quale cercare i termini. Il secondo parametro i campi dentro cui cercare i termini. I CAMPI ADIBITI A RICERCA DOVRANNO ESSERE NECESSARIAMENTE IN FULLTEXT, salvo l'utilizzo dell'opzione parziale (quarto parametro). Termini, il terzo parametro, dovrà contenere una stringa con la frase/parola da cercare. Parziale, quarto parametro, è opzionale e serve per effettuare la ricerca dentro le singole parole ( con "tom" sarà valida la parola "auTOMobile"). Per attivarlo inserire "si" come parametro. Where, quinto parametro, aggiunge dei controlli all'estrazione dei risultati. Limit, ultimo parametro, indica un limite di dati estratti. 

//Esempio

$query=$Ndb->ricerca('articoli','descrizione,titolo','damigella','si','id=1',5);
// la query cercherà nei campi descrizione e titolo nella tabella articoli la parola damigella
// anche parzialmente inclusa in una parola, dove l'id sia 1 per un massimo di 5 risultati


Indice Classi <> Top dettagli Classi


Date

$Ndate=new Ndate();

Quando una data è opzionale significa che se non riceverà la data come parametro, utilizzerà la data attuale.

    Nome giorno

    Nome del giorno in Italiano, UTF-8 e con iniziale maiuscola.

    $Ndate->nomegiorno($data(opzionale));

    //Esempio
    echo $Ndate->nomegiorno(); //nome del giorno attuale: Lunedì

    //Esempio 2
    echo $Ndate->nomegiorno('2003-12-31 01:02:03'); //ritorna Mercoledì

    Nome mese

    Nome del mese in Italiano, UTF-8 e con iniziale maiuscola.

    $Ndate->nomemese($data(opzionale));

    //Esempio
    echo $Ndate->nomemese(); //nome del mese attuale: Novembre

    //Esempio 2
    echo $Ndate->nomemese('2003-12-31 01:02:03'); //ritorna Dicembre

    Ora

    $Ndate->ora($data(opzionale));

    Giorno

    Giorno in doppia cifra.

    $Ndate->giorno($data(opzionale));

    Mese

    Mese in doppia cifra.

    $Ndate->mese($data(opzionale));

    Anno

    Anno in doppia o quadrupla cifra, in base al secondo parametro scelto che di default è a 4 cifre.

    $Ndate->anno($data(opzionale),$lunghezza(opzionale, default 4));

    Date to time

    Converte qualsiasi data, anche timestamp, in timestamp.

    $Ndate->date_to_time($date);

    Date ita to time

    $Ndate->date_ita_to_time('data','delimitatore' (opzionale, default:' ') );

    Converte una data italiana in timestamp. Il delimitatore serve ad indicare quale carattere divide i giorni dai mesi e i mesi dagli anni. Di default è '/'. Converte solo la data senza l'orario. Ottimo per convertire la data creata dalla funzione Nform->data, quindi un campo di testo con un popup contenente il calendario. 

    Data oggi

    $Ndate->data_oggi('delimitatore' (opzionale, default:' '),'ora' (opzionale, default:' '),'secondi' (opzionale, default:' ') );

    Ritorna la data del giorno corrente con delimitatore di default: / . L'ora è nascosta. Si può mostrare cambiando il secondo parametro in 'si'. Se mostrata l'ora, i secondi rimarranno nascosti a meno che non si modifichi il terzo parametro. 

    Ore in secondi

    $Ndate->oretosecondi(ora da convertire in secondi);

    // Esempio
    echo $Ndate->oretosecondi(1); // stamperà 3600

    Giorni in secondi

    $Ndate->giornitosecondi(giorni da convertire in secondi);

    // Esempio
    echo $Ndate->giornitosecondi(1); // stamperà 86400

    Mesi in secondi

    $Ndate->mesitosecondi(mesi da convertire in secondi);

    // Esempio
    echo $Ndate->mesitosecondi(1); // stamperà 2592000

    Anni in secondi

    $Ndate->annitosecondi(anni da convertire in secondi);

    // Esempio
    echo $Ndate->annitosecondi(1); // stamperà 31536000


Indice Classi <> Top dettagli Classi


Carrello della spesa

$Ncart=new Ncart();

    Il Carrello della spesa Ncart permette di gestire totalmente un carrello della spesa. Aggiungere prodotti, rimuoverli e visualizzarli sarà semplicissimo. Inoltre ogni prodotto può avere infinite opzioni e, alla semplice modifica di una di esse come ad esempio la taglia di una maglietta o il colore, verrà creato un nuovo prodotto con le nuove opzioni. E' inclusa una classe che permette di inviare l'intero carrello a paypal per il pagamento e una per il recupero dei valori inviati a paypal (ad esempio si può inviare l'id dell'utente e recuperarlo a pagamento effettuato con la funzione apposita. 

N.B. Non mi assumo nessuna responsabilità per eventuali problemi legati allo script. Prima di utilizzare questo sistema con il pagamento ufficiale, testarlo più volte con sandbox (settato di base nello script e da modificare a lavoro ultimato eliminando la parola 'sandbox.' dalla url della classe paypal).

    Carrello

    $Ncart->carrello();

    Crea il carrello e ne ritorna l'array dell'intero carrello. Se il carrello esiste già, ritorna solo l'array dell'intero carrello. 

    Svuota Carrello

    $Ncart->svuotacarrello();

    Svuota di ogni prodotto il carrello. 

    Inserisci

    $Ncart->inserisci('id','quantità' (default:1),'opzioni';

    Serve per inserire un prodotto nel carrello. Bisogna passare l'id del prodotto nel database, così da avere un codice univoco e riconoscibile per ogni prodotto, la quantità dei pezzi da aggiungere, di default 1, e le opzioni. Per le opzioni bisognerà inserire il nome dell'opzione e dopo il valore dell'opzione, separati da DOPPIA VIRGOLA. Il numero delle opzioni è infinito. Il prezzo è considerato un'opzione, così come il nome, e sono ambedue obbligatorie:

    //Esempio:
    $Ncart->inserisci(23,1,'prezzo,,10,,nome,,Juliette,,tipo,,scarpe,,codice,,366789k7,,colore,,giallo');
    //verrà inserita un'unità di nome Juliette del prodotto 23, scarpe gialle con codice 366789k7 e prezzo 10€

    Verrà inoltre creato un codice univoco denominato 'UNIQUECODE' che identificherà ogni prodotto nel carrello in base alle opzioni inserite. Due prodotti uguali ma con differente colore, ad esempio, avranno uno uniquecode differente. Sarà utile per poter cancellare il singolo prodotto senza errori e necessario per contraddistinguere correttamente i vari prodotti. 

    Rimuovi

    $Ncart->rimuovi('uniquecode','quantità' (opzionale, default: tutti) );

    Come si diceva nella funzione 'inserisci', è necessario passare il valore uniquecode del prodotto per cancellare lo stesso dal carrello. La quantità e opzionale e di default è: 'tutti', quindi se lasciata vuota cancellerà tutti i pezzi di quel prodotto dal carrello. 

    Visualizza

    $Ncart->visualizza();

    Per venire incontro a chi non ha voglia di creare da solo l'intero carrello compreso di grafica, è stata creata la funzione 'visualizza' che crea un div contenente tutti i prodotti, le opzioni, il numero di pezzi per prodotto e il totale. Potrà essere modificato tramite il vostro CSS poiché gli è stato assegnato l'id 'cart' . 

    Paypal

    //Formato base:
    $Ncart->paypal('email_azienda');

    //Formato completo:
    $Ncart->paypal('email_azienda','valuta' (opzionale, default:' '),'email_conferma' (opzionale, default:' '), 'url_ritorno' (opzionale, default:' '),'url_ritorno_annulla' (opzionale, default:' '),'invia_dati' (opzionale, default:' ') );

    Questa funzione permette di inviare il carrello direttamente a paypal. Con il formato base funzionerà tutto correttamente, specificando solo l'email dell'account dell'azienda. Per il formato completo si possono utilizzare molti strumenti, come ad esempio specificare la valuta, che di default è EUR (nel codice in alto è vuoto poiché se si vuole utilizzare un parametro successivo, lasciando la valuta vuota, questa sarà considerata EUR). L'email di conferma, se non specificata, sarà uguale a quella dell'azienda. L'url di ritorno invece servirà a paypal per aggiungere un pulsante alla fine del pagamento per poter tornare al sito e ricevere così i dati passati come ultimo parametro (l'url andrà scritta con 'http://' !). Attenzione perché se il cliente non cliccherà sul pulsante, i dati non verranno inviati. Per questo consiglio di utilizzare il redirect automatico messo a disposizione da paypal direttamente dal loro sito. L'opzione url_ritorno_annulla funziona come l'opzione url_ritorno, solo che va indicato l'url completo della pagina in caso il pagamento andasse male. Invia dati invece permette di inviare una stringa contenente i dati che volete passare a paypal e che poi vorrete recuperare alla fine del pagamento, come ad esempio l'id utente o di transazione, piuttosto che il nome utente o il numero del prodotto da poter scalare dal magazzino. Per inviare dati multipli consiglio di creare una serie di stringhe suddivise da doppia virgola, così da poterle recuperare con la funzione recupera_paypal che vedremo tra un attimo, trasformandole in array con la funzione 'stringtoarray()' della classe Narray.

    //Esempio:
    $Ncart->paypal('azienda@email.com','','','http://www.sitoazienda.com/pagamento_effettuato.php','http://www.sitoazienda.com/pagamento_annullato.php','id,,4,,nome_utente,,P.Beltramo');

    /*
    Spiegazione:
    Si invierà a paypal il carrello. Il beneficiario sarà l'account azienda@email.com (account paypal) e 
    verranno passati i dati id,4,nome_utente,P.Beltramo. Si potrà usare stringtoarray per convertire il tutto in array
    A pagamento effettuato, l'utente verrà rimandato (non in automatico se non attivo) alla pagina pagamento_effettuato.php
    se invece è stato annullato, verrà rimandato a pagamento_annullato.php
    */

    Recupera Paypal

    $Ncart->recupera_paypal();

    Recupera i valori inviati dalla funzione paypal() come parametro 'invia_dati' dopo il pagamento. Nel caso il redirect automatico dal sito paypal sia disattivato, l'utente dovrà cliccare sul pulsante apposito nel sito paypal a pagamento effettuato per poter ricevere tali dati. Ogni account può settare un url di ritorno automatico. Bisogna però creare una pagina che avvisa l'utente dell'avvenuto pagamento. Tutti i dettagli sul sito paypal (e solo sul sito paypal; qui non troverete informazioni al riguardo). 


Indice Classi <> Top dettagli Classi


Email

$Nemail=new Nemail();

    Invia

    $Nemail->invia('mittente','destinatario','oggetto','testo','nome_mittente' (opzionale, default:NULL),'html' (opzionale, default:'no'),'phpmailer' (opzionale, default:'no') );

    Questa funzione permette di inviare email tramite il server del sito. Parametri richiesti: mittente, destinatario, oggetto e testo. L'opzione nome_mittente permette di inserire il nome del mittente invece di vedere solo l'indirizzo email. Il parametro html serve per definire se la mail andrà inviata come email HTML. Con phpmailer invece si potrà utilizzare il potente script phpmailer senza dover conoscere la struttura dello script stesso. E' necessario nel caso le email inviate vengano ricevute come spam. Con questo script si evita ogni problema. Inserire il file class.phpmailer.php nella stessa cartella in cui si trova il framework new-framework.php (esempio nella root principale o nella cartella _include). 

    Email Sicura

    $Nemail->emailsicura('email');

    Converte i caratteri dell'email nel codice, evitando che spie di codice e bot 'rubino' gli indirizzi email per 'loschi' utilizzi, mentre l'utente non si accorgerà di nulla. 


Indice Classi <> Top dettagli Classi


Accesso

$Naccesso=new Naccesso();

    Grazie a questa classe potrete gestire l'accesso ad un'area riservata con facilità, effettuando login e logout, controllando che l'utente sia collegato ed estrarne l'id. Ogni dato verrà criptato. 

    Login

    $Naccesso->login('nome','password','nome_tabella','campo_nome' (opzionale, default:'nome'),'campo_password' (opzionale, default: 'password');

    Questa funzione permette di accedere ad un'area riservata. La particolarità sta nel fatto che la funzione stessa andrà a ricercare nel database la corrispondenza tra nome e password con i dati contenuti nel db stesso (mysql). I parametri necessari sono il nome, password e il nome della tabella del database nel quale verificare la corrispondenza dei dati. Se voleste usare ad esempio l'email al posto del nome, inseritela come parametro 'nome' e modificate il parametro 'campo_nome' con il nome del campo del database che contiene l'email. Lo stesso con la password. Richiesto il campo ID nominato ESATTAMENTE 'id' per poter salvare l'id nella sessione di accesso. Se non ci sarà l'intero accesso non funzionerà correttamente. Ritorna TRUE se l'utente si è collegato con successo, FALSE se i dati non sono corretti o ci sono stati altri errori). N.B. Sarà necessario aprire la connessione al database prima di potervi accedere tramite la funzione login. Usare la funzione $Ndb->connessione() prima della funzione login, per maggior facilità. 

    ID

    $Naccesso->id();

    E' l'unico modo per poter recuperare l'id dell'utente dalla sessione di accesso, poiché criptata. Ritorna l'id salvato in fase di login. 

    Logout

    $Naccesso->logout();

    Effettua il logout dell'utente collegato. 

    Controllo

    $Naccesso->controllo();

    Controlla che l'utente sia collegato nella pagina stessa. Ritorna TRUE se è collegato, FALSE se non lo è. 


Indice Classi <> Top dettagli Classi


Form

$Nform=new Nform();

    Contiene tutti i campi necessari per un form e anche di più. Ci sono infatti i campi immagine per la visualizzazione di immagini, creazione automatica di costanti da ricezione GET e POST (REQUEST), salvataggio di file con creazione e controllo cartelle, campo data con calendario popup in jquery... 

N.B. Tutti i campi seguenti andranno stampati a video per essere visualizzati. Scelta optata dal fatto che ogni campo può essere utilizzato per la creazione di tabella singola, e quindi assegnato alla variabile 'riga'.

    Apri

    $Nform->apri('id','destinazione','file' (opzionale, default:'no') );

    Ritorna l'apertura del form con id, destinazione del form (invia dati in POST) e se verranno inviati file, che di default è settato 'no'. 

    Submit

    $Nform->submit('testo' (opzionale, default:' '), 'classe' (opzionale, default:' ') );

    Crea il tasto Submit per inviare il form. Con il parametro 'testo' si scrive il testo all'interno del tasto. Con 'classe' si aggiunge il parametro class al tasto, da poter usare con i css. 

    Chiudi

    $Nform->chiudi();

    Chiude il form. Ricordo, da stampare a video per poterlo scrivere nel codice. 

    Ricevi

    $Nform->ricevi();

    Crea delle costanti con tutti i dati ricevuti in una pagina. Utilizzando $_REQUEST, ogni dato, sia GET che POST, verrà preso in considerazione. Non serve stamparlo a video ma basterà richiamarlo.

    //Esempio:
    //Riceviamo i dati di un form di login con nome e password
    $Nform->ricevi();
    $Naccesso->login(nome,password,'utenti');
    //Verrà effettuato il login con i dati ricevuti dal form

    //Esempio 2, password criptata nel database con md5:
    $Nform->ricevi();
    $Naccesso->login(nome,md5(password),'utenti');

    Utile in caso di ricezione da qualsiasi pagina e qualsiasi metodo, non espressamente form. ATTENZIONE!! Il procedimento per la conversione non è rapidissimo quindi potreste avere dei problemi, anche se raramente, ad esempio nel salvataggio di cookie seguiti da un redirect immediato (utile nel salvataggio della lingua o un cambio di colore o tema del sito). In quel caso non farebbe in tempo a settare tutte le costanti e il cookie non verrebbe modificato (nella creazione non ci sono problemi riscontrati ma solo nella modifica). La soluzione è, quando possibile, usare il classico $_GET o $_POST per recuperare i nuovi valori. 

    Campo Testo

    //Base
    $Nform->campotesto('nome');

    //Completo
    $Nform->campotesto('nome','valore' (opzionale, default:' '), 'id' (opzionale, default:' '),'classe' (opzionale, default:' '), 'solo_lettura' (opzionale, default:' '), 'lunghezza' (opzionale, default:40),'suggerimenti' (opzionale, default:' ') );

    Crea un campo input text. Parametro 'nome' per nome campo, valore per un valore preinserito, l'id setta l'id del campo, classe aggiunge class, solo lettura ne vieta la modifica e lunghezza è la lunghezza del campo, settato di default a 40 caratteri. Il parametro suggerimenti, invece, introduce una funzione molto importante: all'inserimento del testo, verrà mostrata una lista di parole sotto il campo testo, che sono quelle passate tramite, appunto, l'ultimo parametro. Si può passare un array o una lista di parole (nel secondo caso ogni parola andrà separata dall'altra con una doppia virgola).

    //Esempio con array:
    $lista=array('abaco','corrimano','estrude','zebra');
    echo $Nform->campotesto('nome','','','','','40',$lista);
    //quando cominciate a scrivere nel campo testo compariranno i suggerimenti

    //Esempio con stringa:
    echo $Nform->campotesto('nome','','','','','40','albero,,bar,,comare,,delta,,elio,,foggia,,galoppo,,hotel,,italico,,lumaca,,maniero,,nordico,,orbo,,pollo,,quadro,,rosso,,somaro,,tuta,,uva,,vino,,zebra');
    //stesso risultato dell'array ma usando singole parole.

    Consiglio l'utilizzo di array poiché possono essere ordinati facilmente in ordine alfabetico ($Narray->ordina() ), a differenza delle singole parole che comprariranno con l'ordine di immissione. 

N.B. Necessaria libreria jQuery per l'utilizzo dei suggerimenti

    Campo Password

    //Base
    $Nform->campopassword('nome');

    //Completo
    $Nform->campopassword('nome','valore' (opzionale, default:' '), 'id' (opzionale, default:' '), 'classe' (opzionale, default:' '), 'solo_lettura' (opzionale, default:' '), 'lunghezza' (opzionale, default: 40) );

    Crea un campo password (punto per ogni carattere). Dettagli uguali a campotesto (riferirsi a descrizione campotesto). 

    Campo Hidden

    $Nform->campohidden('nome','valore' (opzionale, default:' '),'id' (opzionale, default:' ') );

    Crea un campo input hidden. 

    Area Testo

    //Base
    $Nform->areatesto('nome');

    //Completo
    $Nform->areatesto('nome','valore' (opzionale, default:' '),'id' (opzionale, default:' '),'classe' (opzionale, default:' '),'editor_testo' (opzionale, default:' '),'altezza' (opzionale, default: 200),'larghezza' (opzionale, default:900),'solo_lettura' (opzionale, default:' ') );

    Crea una textarea. I parametri valore, id, classe e solo lettura sono spiegati nella funzione 'campotesto'. Invece i parametri 'altezza' e 'larghezza' servono a specificare rispettivamente l'altezza e la larghezza in pixel del campo testo. La particolarità è l'editor di testo che può essere attivato direttamente dal parametro omonimo. Inserendo 'si' come parametro di 'editor_testo', il campo verrà sostituito da un campo testo con strumenti per la modifica del testo in codice BBCODE come bold, italic e underline, piuttosto che l'aggiunta di link o l'aggiunta di un'immagine. Alla selezione di una parte del testo si potrà cliccare su uno dei tasti presenti sopra la textarea. Alla stringa selezionata verrà aggiunto il codice BBCODE prima e dopo la selezione. Così facendo quella parte di testo avrà una caratteristica aggiunta. L'unico limite per ora è quello di una sola area di testo con attivo l'editor per pagina, ma verrà risolto nelle versioni future. L'uso di molteplici editor attivi provocherà un comportamento anomalo. 

    Gli strumenti utilizzabili sono: 

    Grassetto = [B][/B]
    Corsivo = [I][/I]
    Sottolineato = [U][/U]
    Quote = [QUOTE][/QUOTE]
    Codice = [CODE][/CODE]
    URL = [URL=http://www.nomesito.com]testo collegato[/URL]
    Immagine = [IMG]http://www.nomesito.com/immagine.png[/IMG]
    Titolo 1 = [H1][/H1]
    Titolo 2 = [H2][/H2] 

    Un tasto reset toglierà qualsiasi codice BBCODE all'interno dell'intero testo, a prescindere dalla selezione. 

//Esempio del testo modificato con bbcode

[B]Ciao Mondo[/B], [I]io sono in corsivo[/I] mentre io sono testo normale.

//Risultato

Ciao Mondo , io sono corsivo mentre io sono testo normale.

    Campo File

    $Nform->campofile('nome','valore' (opzionale, default:' '),'id' (opzionale, default:' '),'classe' (opzioni, default:' '),'solo_lettura' (opzionale, default:' ') );

    Crea un campo file. Solita prassi come campotesto, con la variante che il parametro 'valore' ha dei problemi, quindi non verrà considerato. 

    Checkbox

    $Nform->checkbox('nome','valore' (opzionale, default:' '),'selezionata' (opzionale, default:' '),'id' (opzionale, default:' '),'classe' (opzionale, default:' '),'solo_lettura' (opzionale, default:' ') );

    Crea un checkbox. Stessi parametri della funzione 'campotesto', con l'aggiunta del parametro 'selezionata', che se cambiata con 1 o 'si', selezionerà il checkbox. Per creare una serie di checkbox per risposte multiple, utilizzare dopo il nome due parentesi quadre.

    //Esempio:
    echo $Nform->checkbox('ingredienti_pizza[]','farina');
    echo $Nform->checkbox('ingredienti_pizza[]','pomodini');
    echo $Nform->checkbox('ingredienti_pizza[]','mozzarella');

    Radio

    $Nform->radio('nome','valore' (opzionale, default:' '),'selezionata' (opzionale, default:' '),'id' (opzionale, default:' '),'classe' (opzionale, default:' '),'solo_lettura' (opzionale, default:' ') );

    Stessa struttura, compresa la serie di radio, come checkbox. 

    Immagine

    $Nform->immagine('url','title' (opzionale, default:' '),'alt' (opzionale, default:' '),'altezza' (opzionale, default:' '),'larghezza' (opzionale, default:' '),'classe' (opzionale, default:' ') );

    Crea un campo immagine (<img .. />). Come primo parametro inserire l'url dell'immagine, come secondo il title, terzo il parametro alt. Poi troviamo altezza e larghezza. Riempiendo uno dei due parametri, si eviterà di schiacciare l'immagine, poiché prenderà in considerazione solo il parametro inserito. Ultimo la classe. 

    Bottone

    $Nform->bottone('nome','valore');

    Crea un campo input button. Il primo sarà il name del campo, il secondo il testo che verrà visualizzato all'interno del bottone. 

    Select (menù a tendina)

    $Nform->select('nome','opzioni','opzioni_selezionate' (opzionale, default:' '),'dimensione' (opzionale, default:' '),'selezione_multipla' (opzionale, default:' '),'solo_lettura' (opzionale, default:' ') );

    Crea un menù a tendina. Il primo parametro, nome, conterrà il nome della select. Il secondo parametro conterrà tutte le opzioni presenti nel menù a tendina, nel seguente ordine: 'nome_opzionevalorenome_opzione_2,,valore2...' . Il terzo parametro conterrà tutti i nomi delle opzione selezionate. Il parametro dimensione conterrà il numero di righe di cui sarà formato il menù. Con un numero superiore a 1 il menù a tendina diventerà un'area testo con all'interno le opzioni. Con il parametro 'selezione_multipla' si potrà decidere se permettere la selezione multipla (quasi necessario inserire più di 2 nel parametro 'dimensione'). L'ultimo permette la sola lettura del campo. 

    Data

    $Nform->data('nome','valore' (opzionale, default:' '),'id' (opzionale, default:' '),'classe' (opzionale, default:' ');

    Crea un campo testo che, una volta cliccato all'interno, apre un popup con il calendario. La data, alla selezione di una data, verrà scritta nel campo testo. 

La data sarà in formato italiano! Quindi per convertirla correttamente per essere usata con i vari strumenti del framework (che usano il timestamp) bisognerà salvarla nel database con la funzione $Ndate->date_ita_to_time(), così da avere il corretto timestamp (altrimenti il risultato sarà impreciso).

NECESSARIA LIBRERIA JQUERY!


Indice Classi <> Top dettagli Classi


File

$Nfile=new Nfile();

Strumenti per il controllo dei file come il salvataggio, la cancellazione di file e il controllo dell'esistenza di un file.

    Tutti i percorsi verranno calcolati dalla ROOT del sito. 

    Salva

    $Nfile->salva('nome','cartella','dimensione' (opzionale, default:16000), 'estensioni' (opzionale, default:' '), 'sovrascrivere' (opzionale, default:' ') );

    Utile per salvare i file alla ricezione di un form con file annessi. Biosogna richiamarne uno per ogni file. Il primo parametro conterrà il nome del campo file del form da cui si invia il file, la cartella dove il file andrà salvato (attenzione che viene calcolato il percordo dalla root principale del sito!). Il parametro 'dimensione' conterrà la dimensione massima del file in kb. 1000 kb equivarrano ad 1MB. Il parametro 'estensioni' invece permette di inserire una lista di estensioni consentite, separate da doppia virgola. L'ultimo parametro permette di decidere se sovrascrivere il file nel caso ne esista già una versione sul server oppure creare un nome alternativo (viene aggiunto un n, dove n sta per un numero crescente).

    //Esempio 1:
    $Nform->ricevi();
    $Nfile->salva(foto,'public');
    //Salva il file del campo 'foto' nella cartella 'public/'

    //Esempio 2:
    $Nfile->salva(foto,'public/foto',1500,'jpg,,jpeg,,png,,gif','si');
    //salva il file del campo 'foto' nella cartella public/foto/, massimo 1.5mb con estensione jpg,jpeg,png e gif
    // e nel caso trovasse un file con lo stesso nome lo sovrascriverebbe

    Cancella

    $Nfile->cancella('file','cartella');

    Cancella il file indicato nel primo parametro, contenuto nella cartella passata come secondo parametro. Il controllo parte dalla root del sito. 

    Esiste

    $Nfile->esiste('file');

    Verifica se il file passato come parametro esiste. Ritorna TRUE se il file esiste ed è un file, FALSE se non esiste o è una cartella.

    //Esempio:
    $Nfile->esiste('upload/utenti/benvenuto.jpg');
    //verificherà se l'immagine www.sito.com/upload/utenti/benvenuto.jpg esiste

Cartelle

$Ncartelle=new Ncartelle();

Utile per sapere se esiste una cartella, mostrarne il contenuto o cancellarle, compreso l'intero contenuto (quindi cartelle non vuote!). Tutti i percorsi verranno calcolati dalla ROOT del sito. Gli slash iniziali e finali

    Esiste

    $Ncartelle->esiste('cartella', crea(opzionale,default:'si');

    Verifica se la cartella esiste. Ritorna TRUE se esiste, FALSE se non esiste. Nel caso non esistesse si può decidere di crearla tramite il secondo parametro. Settando il parametro 'crea' a 'si' verrà creata con permessi 777. Di default questa opzione è attiva. Per disattivarla settarla a 'no'.

    //Esempio:
    $Ncartelle->esiste('upload','si');
    //verificherà se www.sito.com/upload/ esiste e nel caso non esistesse ritorna false e la creerà con permessi 777

    Cancella

    $Ncartelle->cancella('cartella');

    Cancella l'intera cartella, compreso tutto il contenuto. 

    Contenuto

    $Ncartelle->contenuto('cartella');

    Mostra i file e le cartelle dentro la cartella passata come parametro. 


Indice Classi <> Top dettagli Classi


Valida

$Nvalida=new Nvalida();

Studiata per la validazione di stringhe passate.

    Valida

    $Nvalida->valida('tipo','stringa','lunghezza'(opzionale, default:'');

Questa funzione permette di fare una validazione multipla di una stringa.

    Come primo parametro si dovrà passare ogni tipo di validazione che si vuole effettuare ad una stringa, passata come secondo parametro. Ogni tipo andrà separato dall'altro tramite doppia virgola (è accettato anche un array). Per TIPO si intende il nome delle validazioni disponibili in questa classe (esempio email,numeri,ip,url,testo... ma non lunghezza!). L'ultimo parametro, lunghezza, permette di fare una verifica della lunghezza massima della stringa. Verrà mostrato a video, in caso di errore, la dicitura 'Il campo deve essere di tipo: ' e il nome del campo validato che torna errore.

    //Esempio 1

    $Nvalida->valida('numeri,,iva','123456789');
    // Stamperà a video 'Il campo deve essere di tipo: iva' poiché mancano 2 caratteri al numero per essere una partita iva

    //Esempio 2

    $tipi=array('testo');
    $Nvalida->valida($tipi,'Questo è un testo',18);
    // Non stamperà nulla in quando è un testo ed è lungo 17 caratteri, uno in meno del limite massimo

    Email

    $Nvalida->email('email');

Ritorna TRUE se l'email passata come parametro è valida, FALSE se non lo è.

    Testo

    $Nvalida->testo('stringa');

Ritorna TRUE se la stringa passata come parametro è formata solo da caratteri, FALSE se non lo è.

    Numeri

    $Nvalida->numeri('stringa');

Ritorna TRUE se la stringa passata come parametro è formata solo da numeri, FALSE se non lo è.

    Lunghezza

    $Nvalida->lunghezza('stringa','lunghezza');

Ritorna TRUE se la lunghezza in caratteri della stringa passata come parametro è minore o uguale al valore passato come secondo parametro, FALSE se non lo è.

//Esempio
$Nvalida->lunghezza('Perdincibacco',5);
//Ritornerà FALSE perché è più lunga di 5 caratteri

    Url

    $Nvalida->url('url');

Ritorna TRUE se l'url passata come parametro è valida, FALSE se non lo è.

    IP

    $Nvalida->ip('ip');

Ritorna TRUE se l'IP passato come parametro è valido, FALSE se non lo è.

    Codice Fiscale

    $Nvalida->codice_fiscale('codice');

Ritorna TRUE se il codice fiscale passato come parametro è valido, FALSE se non lo è.

    IVA

    $Nvalida->iva('iva');

Ritorna TRUE se la partita IVA passata come parametro è valida, FALSE se non lo è.


Indice Classi <> Top dettagli Classi


Utili

$Nutili=new Nutili();

Classe che contiene una serie di strumenti utili per svariati utilizzi.

    Menù

    $Nutili->menu('voci');

    Crea un menù in jQuery orizzontale utile per i pannelli di controllo. Le voci andranno ordinate alternate:'url,,voce_menu' per tutte le voci di cui avrete bisogno.

    //Esempio:
    echo $Nutili->menu('index.php,,Home,,bio.php,,Bio,,contact.php,,Contact Us');

NECESSARIA LIBRERIA JQUERY

    Browser

    $Nutili->browser('attiva_versione' (opzionale, default:' '),'estrai_solo_versione' (opzionale, default:' ') );

    Ritorna il nome del browser utilizzato dall'utente. I due parametri servono per aggiungere al risultato ritornato la versione. Il primo parametro la aggiunge dopo il nome del browser, il secondo estrae solamente la versione, ignorando il nome del browser. 

    Sistema Operativo

    $Nutili->sistema_operativo();

    Ritorna il tipo di sistema operativo utilizzato dall'utente (Windows,Mac,Linux,Unix,Altro). 

    Mobile

    $Nutili->mobile('ipad' (opzionale, default:' ');

    Ritorna TRUE se il device utilizzato è mobile. Utile per la reindirizzazione a un sito mobile. Il parametro ipad, se modificato con il valore 1 o 'si', riconoscerà l'ipad come dispositivo mobile. 

    Log Accessi

    $Nutili->log_accessi('cartella' (opzionale, default:' '),'dati_aggiuntivi' (opzionale, default:' ') );

    Crea un file ogni volta che viene richiamata la classe. Con il parametro 'cartella' si specificherà il percorso in cui creare il file e aggiornarlo ogni volta che viene richiamato. Il secondo parametro conterrà dei valori aggiuntivi. Andranno aggiunti come segue:'nome,,valore'. Utile nel caso di log accessi, salvando l'id utente o il browser o quello di cui avete bisogno. Il file si chiamerà: Nlog.htm . I dati di default inseriti saranno: 

    Indirizzo IP
    Referer
    UserAgent?
    Data e Ora 

    Codice QR

    $Nutili->codiceqr('testo','larghezza' (opzionale, default:150) );

    Crea un codice QR contenente il testo passato come primo parametro. Il codice QR è un'immagine che, letta da un lettore adatto, mostra il testo per intero. Può contenere anche url. La larghezza di default di tale immagine è 150 pixel. 

    Sposta Ordina

    $Nutili->sposta_ordina('nome_lista','pagina_invio_ordinamento','lista', 'asincrono'(opzionale, default:' ');

    Interessante strumento che permette, data una lista id->valore, di trascinare le singole voci, ordinandole in modo crescente partendo da 0. Non è facile da spiegare senza provarlo ma una volta provato risulta facile la comprensione. In pratica viene creata una lista di valori, ognuno all'interno di un rettangolo. Una lista verticale. Ci sarà la possibilità di ordinare ogni voce semplicemente trascinandola con il mouse. Il primo parametro sarà il nome della lista (c'è la possibilità di avere anche molteplici liste nella stessa pagina). Nel secondo andrà indicata la pagina dove verranno inviate le modifiche. Il terzo parametro conterrà le coppie id/valore della lista, separati da doppia virgola. La struttura sarà: "id1,,valore1,,id2,,valore2...". Se avete necessità potrete inserire come valore anche un'immagine o un video senza problemi, trascinandoli poi come qualsiasi altra voce. N.B. Per ID si intende l'id di ogni valore presente nel database. Il sistema andrà a cambiare la posizione dell'ID 'n' del database (vi sarà un esempio che lo mostrerà). Ad ogni modo se come chiave primaria usate altri tipi di campi non è un problema. Il quarto ed ultimo parametro, opzionale, serve per settare l'invio del nuovo ordinamento in modo asincrono (tramite ajax) alla pagina indicata come secondo parametro. Di default è ATTIVO! quindi ad ogni modifica viene inviato il tutto alla pagina che dovrà occuparsi di aggiornare il database con le nuove posizioni (c'è una funzione che si occupa di tutto e che verrà mostrata dopo questa). 

    I valori inviati a modifica effettuata saranno semplicemente la lista degli id separati da virgola. A seconda del metodo di invio, se asincrono o meno, si potranno recuperare gli id tramite $_REQUEST['nome_lista'] per la chiamata asincrona e $_REQUEST['nome_lista_ordinamento'] per quella sincrona. L'unica differenza è l'aggiunta di '_ordinamento' al nome della variabile.

    // Esempio 1
    $Nutili->sposta_ordina('foto','salva_ordine_foto.php','1,,Utente 1 foto 1,,2,,Utente 1 foto 2,,3,,Utente 1 foto 3','no')
    // Creerà una lista 'foto' che dovrà essere inviata in modo sincrono alla pagina salva_ordine_foto.php

    // Esempio 2
    $Nutili->sposta_ordina('foto','salva_ordine_foto.php','1,,<img src="foto1.jpg" />,,2,,<img src="foto2.jpg" />,,3,,<img src="foto3.jpg" />')
    // Creerà una lista 'foto' che verrà inviata in modo asincrono alla pagina salva_ordine_foto.php

    Salva Sposta Ordine

    $Nutili->salva_sposta_ordine('nome_lista','nome_tabella_db','campo_id'(opzionale, default: 'ID'),'campo_posizione'(opzionale, default: 'posizione');

    Fondamentale per salvare l'ordine inviato dalla funzione 'sposta_ordine()'. Il primo parametro dovrà essere il nome della lista data alla funzione 'sposta_ordine()' come primo parametro. Il secondo parametro è il nome della tabella nel database dove sono contenuti i dati a cui modificare la posizione. Il terzo e il quarto parametro sono opzionali ed indicano rispettivamente il nome del campo id e il nome del campo posizione. Questi sono importanti perché l'id passato dall'ordinamento verrà cercato nel campo id indicato, di default settato a 'ID', modificando la posizione del campo passato come parametro 'campo_posizione', che è settato di default a 'posizione' 

    Aggiungi Font

    $Nutili->aggiungi_font('nome_font_google','tags_aggiunta_font'(opzionale, default:'body');

    Permette di modificare il font dell'intero sito o di una singolo div (o qualunque cosa vorrete) inserendo semplicemente il nome del font, preso dalla pagina ufficiale di google: http://www.google.com/webfonts#ChoosePlace:select . Tutto qui? Si, tutto qui. Come secondo parametro, opzionale, è selezionato di default il 'body' della pagina. Se volete modificare solo un div con id o classe basterà inserire il nome desiderato come secondo parametro.

    //Esempio 1
    $Nutili->aggiungi_font('Convergence');
    //modifica il font all'intera pagina

    //Esempio 2
    $Nutili->aggiungi_font('Lancelot','.descrizione_foto');
    //modifica il font solo a chi avrà come classe 'descrizione_foto'

    //Esempio 3
    $Nutili->aggiungi_font('Supermercado+One','#lista_box');
    //modifica il font solo al campo che avrà come id 'lista_box'. Gli spazi nei nomi del font vanno sostituiti con un +

    IP

    $Nutili->ip();

    Ritorna l'indirizzo IP dell'utente navigante. 


Indice Classi <> Top dettagli Classi
