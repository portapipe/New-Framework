<? /*
NEW-FRAMEWORK e' stato creato da Norman Russo sotto licenza Apache 2.0

Data di rilascio: Novembre 2011

Versione: 1.10

Indice:

- Impostazioni
-- Codifica=utf-8
-- Document Root (permette di cambiare la variabile $_SERVER['DOCUMENT_ROOT'] con una personalizzata)

- Redirect
-- Indirizzo (url o pagina,secondi di attesa,scritta di countdown)

- Url
-- Provenienza (nome pagina di provenienza)
-- Nome Pagina (post htaccess)
-- Nome Pagina Originale (pre htaccess)
-- Titoli delle pagine (tutto tra due apici e separati da doppia virgola (valido anche array), il primo valore è il titolo di default, poi nomepagina,,titolo,,nomepagina2,,titolo2....)
-- Nome dominio

- Cookie
-- Salva (primo parametro nome, secondo il contenuto, terzo, opzionale, la durata in ore: default 24)
-- Cancella
-- Cancella Tutti (cancella tutti i cookie presenti)

- Sessioni
-- Apri
-- Chiudi
-- Salva (nome,contenuto,codifica(opzionale,default:no)
-- Visualizza (nome,codifica(opzionale,default:no))
-- Cancella

- Headersent (risolve il problema "Header already Sent")
-- Inizio (da posizionare all'inizio di qualsiasi riga di codice, implementazione di questo file escluso)
-- Fine (da posizionare alla fine di tutto il codice)

- Array
-- Presente (controlla se un valore è presente dentro un array; se lo trova ritorna TRUE)
-- Arrayotstring (converte array in stringa)
-- Stringtoarray
-- Arraymultitostring
-- Sostituisci (sostituisce il valore di un elemento nell'array)
-- Elimina (elimina un elemento nell'array)
-- Ordina
-- Rimuovidoppi (rimuove i valori duplicati in un array)
-- Chiavi (estrae tutte le chiavi di un array)
-- Valori (estrae tutti i valori di un array)
-- Mescola (random dei valori)
-- Conta (ritorna il numero di elementi nell'array)


- Stringhe
-- Escape
-- Unescape
-- Codifica (stringa,volte(opzionale,default:1),aggiungi(opzionale solo numero,defaul:''))
-- Decodifica (stringa,volte(opzionale,default:1),rimuovi(opzionale solo numero,defaul:''))
-- br2nl
-- Taglia stringa
-- Evidenzia (parola dentro stringa)
-- BBCode (converte bbcode in html)

- Numeri
-- Pari (ritorna TRUE se il numero è pari)
-- Numero (ritorna TRUE se il valore passato è un numero)

- Database
-- Nome tabella
-- Connessione (nome utente, password, ip mysql, nome database)
-- Select (query al database: nome tabella, campi(opzionale), condizioni(opzionale), limit(opzionale))
-- Insert (nome tabella, valori)
-- Update
-- Delete (nome tabella, condizioni, scelta tra and e or tra le condizioni è opzionale: default AND)
-- Conta (numero elementi dentro tabella da query passata)
-- Query array
-- Query costanti
-- Tabella (query,link(opzionale))
-- Riga
-- Crea tabella singola
-- Ricerca (ideale per motori di ricerca interni)

- Date
-- Nomegiorno (ritorna il nome del giorno in italiano, UTF-8 e con iniziale maiuscola)
-- Nomemese (ritorna il nome del mese in italiano e con iniziale maiuscola)
-- Ora (estrae l'ora da data; secondo parametro opzionale, 1 per visualizzare secondi, default 0)
-- Giorno (estrae giorno da data in doppia cifra; senza parametri giorno attuale)
-- Mese (estrae mese da data in doppia cifra; senza parametri mese attuale)
-- Anno (estrae anno da data; senza parametri anno attuale; secondo parametro: 2=doppia cifra, 4=quattro cifre )
-- Datetotime (converte date in timestamp, timestamp incluso)
-- Date ita to time
-- Data oggi
-- Ore in secondi
-- Giorni in secondi
-- Mesi in secondi
-- Anni in secondi


- Cart (carrello della spesa)
-- Carrello
-- Svuotacarrello
-- Inserisci
-- Rimuovi
-- Visualizza
-- Paypal
-- Recupera Paypal


- Email
-- Invia (mittente,destinatario,oggetto,testo, nome mittente(opzionale, default: mittente), html(opzionale, default:no) se  ritorna true e false)
-- Emailsicura (cripta la mail per bot e spycode)

- Accesso
-- Login
-- ID (recupera l'id dell'utente collegato)
-- Logout
-- Controllo (controlla che l'utente sia collegato, utile nelle pagine protette

- Form
-- Apri (si può specificare se si inviano file)
-- Submit
-- Chiudi
-- Ricevi (crea costanti con il nome della variabile inviata tramite GET e POST e il relativo valore)
-- Campo testo
-- Campo password
-- Campo hidden
-- Area testo (possibilità di selezionare editor esteso di testo: new-framework.js richiesto)
-- Campo file
-- Checkbox
-- Radio
-- Immagine
-- Bottone
-- Select
-- Data (al click viene mostrato un calendario vicino al campo, jQuery)

- File
-- Salva
-- Cancella
-- Esiste

- Cartelle (indirizzi cartella senza slash finale o iniziale)
-- Esiste (cartella)
-- Cancella (cartella)
-- Contenuto (cartella)

- Valida
-- Valida (validazione multipla)
-- Email (valida una stringa passata come indirizzo email)
-- Testo
-- Numeri
-- Lunghezza
-- URL
-- IP
-- Codice Fiscale
-- IVA


- Utili
-- Menu (crea un menu orizzontale con effetto fade al passaggio del mouse, richiesta libreria jQuery)
-- Browser (ritorna il nome del browser utilizzato)
-- Sistema operativo (ritorna il nome del sistema operativo in uso)
-- Mobile (ritorna TRUE se il dispositivo utilizzato è Mobile; possibilità di scegliere se iPad è mobile)
-- Log Accessi (crea un file {Nlog.htm} contenente i dati dell'utente collegato; possibilità di passare valori aggiuntivi)
-- Codice QR (crea un codice QR in base al testo passato come parametro)
-- Sposta Ordina (drag&drop lista ordinata; alla modifica invia id e posizioni asincronamente e non)
-- Salva Sposta Ordina (aggiorna nel database le posizioni; richiesta connessione al database preimpostata)
-- Aggiungi Font (lista font su http://www.google.com/webfonts#HomePlace:home )
-- IP (ritorna l'ip dell'utente collegato)

*/

/* Inizio Impostazioni */

class Nimpostazioni{
	
	//codifica sito
	public $codifica='UTF-8';
	
	public function document_root($document_root=''){
		if($document_root!=''){
			$_SERVER['DOCUMENT_ROOT']=$document_root;
		}
		return $_SERVER['DOCUMENT_ROOT'];
	}

}

/* Fine Impostazioni */


/* Inizio Redirect */
class Nredirect{
	
	
	// Redirect da indirizzo
	public function indirizzo($dove,$secondi_attesa='',$countdown=''){
		if($countdown==''){
			$countdown='<div id="countdown" style=" display: none"></div>';
		}elseif($countdown=='si'||$countdown==1){
			$countdown='<div id="countdown"></div>';
		}else{
			$i=0;
			$countdown='<div id="countdown"></div>'.$countdown;
		}
			
		if($secondi_attesa==''){
			$redirect='<script language="javascript" type="text/javascript">
			window.location = "'.$dove.'";
				</script>
				';
		}else{
			if(isset($i)){
				$redirect='<script language="javascript" type="text/javascript">
			
				sito = "'.$dove.'";  // sito
				sec = '.$secondi_attesa.';                                         // numero di secondi prima del redirect
				var cdID = window.setInterval(\'contoallarovescia();\', 1000);
				
				function contoallarovescia ( )
				{
					var m = (sec == 1) ? "" : "";
					m += "";
					if (document.all)
					{
						document.all[\'countdown\'].innerHTML = m;
					}
					else
					{
						document.getElementById(\'countdown\').innerHTML = m;
					}
					if (sec == 0)
					{
						window.location = sito;
						window.clearInterval(cdID);
					}
					--sec;
				}
				
				</script>
				'.$countdown;
			}else{
				$redirect='<script language="javascript" type="text/javascript">
			
				sito = "'.$dove.'";  // sito
				sec = '.$secondi_attesa.';                                         // numero di secondi prima del redirect
				var cdID = window.setInterval(\'contoallarovescia();\', 1000);
				
				function contoallarovescia ( )
				{
					var m = (sec == 1) ? "Manca 1 secondo" : "Mancano " + sec + " secondi";
					m += " al redirect";
					if (document.all)
					{
						document.all[\'countdown\'].innerHTML = m;
					}
					else
					{
						document.getElementById(\'countdown\').innerHTML = m;
					}
					if (sec == 0)
					{
						window.location = sito;
						window.clearInterval(cdID);
					}
					--sec;
				}
				
				</script>
				'.$countdown;
			}
		}
		echo $redirect;
	}

}
/* Fine Redirect */


/* Inizio Url */

//Creazione della var server HTTP_REFERER (crossbrowser) tramite sessioni
session_start();
if(!isset($_SERVER['HTTP_REFERER']) && isset($_SESSION['HTTP_REFERER'])){
	$_SERVER["HTTP_REFERER"]=$_SESSION['HTTP_REFERER'];
}
$_SESSION['HTTP_REFERER']=($_SERVER['HTTPS']=="on"?'https://':'http://').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


class Nurl {
	
	// Pagina di provenienza
	public function provenienza(){
		$url=basename($_SERVER["HTTP_REFERER"]);
		return $url;
	}
	
	// Nome del file attuale (non tiene conto di htaccess)
	public function nomepaginaoriginale(){
		$url=basename($_SERVER['PHP_SELF']);
		return $url;
	}
	
	//Nome della pagina attuale (tiene conto di htaccess)
	public function nomepagina(){
		$url=basename($_SERVER['REQUEST_URI']);
		return $url;
	}
	
	// Titoli delle pagine
	public function title($titoli){
		if(!is_array($titoli)) $titoli=explode(",,",$titoli);
		$pagina=$this->nomepaginaoriginale();

		$chiave=array_search($pagina, $titoli);
		if($chiave!=FALSE){
			$titolo=$titoli[($chiave+1)];
		}else{
			$titolo=$titoli[0];
		}
		echo $titolo;		
	}
	
	public function nomedominio(){
		$value=$_SERVER['SERVER_NAME'];
		$no_http = str_replace("http://", "", $value);
		$no_http = str_replace("www.", "", $no_http);
		$no_http = str_replace(".it", "", $no_http);
		$no_http = str_replace(".net", "", $no_http);
		$no_http = str_replace(".org", "", $no_http);
		$no_http = str_replace(".com", "", $no_http);
		$dominio = $no_http;
		return $dominio;
	}

}

/* Fine Url */


/* Inizio Cookie */
class Ncookie{
	
	// Salva nome, contenuto e durata, in ore, in un cookie
	public function salva($nome,$contenuto,$durata_ore=24){
		$Ndate=new Ndate();
		setcookie($nome,$contenuto,time()+$Ndate->oretosecondi($durata));
		return NULL;
	}	
	
	// Cancella cookie da nome
	public function cancella($nome){
		unset($_COOKIE[$nome]);
		return NULL;
	}
	
	// Cancella tutti i cookie
	public function cancella_tutti(){
		// unset cookies
		if (isset($_SERVER['HTTP_COOKIE'])) {
			$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($cookies as $cookie) {
				$parts = explode('=', $cookie);
				$name = trim($parts[0]);
				setcookie($name, '', time()-1000);
				setcookie($name, '', time()-1000, '/');
			}
		}
	}
	
	
	
}

/* Fine Cookie */




/* Inizio Sessioni */

class Nsessioni{
	
	public function apri(){
		session_start();
	}
	
	public function chiudi(){
		session_destroy();
	}
	
	public function salva($nome,$contenuto,$codifica='no'){
		$this->apri();

		$Nstringhe=new Nstringhe();
		if($codifica!='no')$contenuto=$Nstringhe->codifica($contenuto);
		$_SESSION[$nome]=$contenuto;	
		
		return TRUE;
	}
	
	public function visualizza($nome,$codifica='no'){
		$this->apri();
		$contenuto=$_SESSION[$nome];

		$Nstringhe=new Nstringhe();
		if($codifica!='no')$contenuto=$Nstringhe->decodifica($contenuto);
		
		return $contenuto;
	}
	
	public function cancella($nome){
		$this->apri();
		unset($_SESSION[$nome]);
	}
		
}


/* Fine Sessioni */




/* Inizio Problema Header Already Sent */
class Nheadersent{
	
	//Da inserire alla riga 1 del codice (prima di qualsiasi cosa)
	public function inizio(){
		return ob_start();
	}
	
	//Da inserire alla fine di tutto il codice
	public function fine(){
		return ob_end_flush();;
	}
}

/* Fine Problema Header Already Sent */


/* Inizio Array */
class Narray{
	
	
	//Controllare se un valore è presente in un array
	public function presente($valore,$array) {
		if(in_array($valore,$array)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	//Converte un array in stringa
	public function arraytostring($array,$delimitatore=','){
		return implode($delimitatore,$array);
	}
	
	//Converte una stringa in array
	public function stringtoarray($stringa,$delimitatore=','){
		return explode($delimitatore,$stringa);
	}
	
	
	//Converte un array multidimensionale in stringa
	public function arraymultitostring($array,$delimitatore1='=',$delimitatore2=','){
		$stringa='';
		$i=0;
		foreach($array as $a=>$c){
			$stringa.=$a.$delimitatore1.$c;
			$i++;
			if($i!=count($array)){
				$stringa.=$delimitatore2;
			}
		}
		return $stringa;
	}
	
	
	//Modificare elemento dentro array
	function sostituisci($array,$valore,$nuovovalore)
	{
	   // verifico che il valore sia compreso nell'array
		if(in_array($valore,$array)){
			// modifico il valore tramite la chiave recuperata usando array_search
			$array[array_search($valore,$array)]=$nuovovalore; 
		
			// restituisco l'array dopo averlo re-indicizzato
			return array_values($array);
		}else{
			// se non trovo corrispondenze restituisco l'array così com'è
			return $array;
	   }
	}
	
	
	//Cancellare elemento dentro array
	function elimina($array,$valore){
		// verifico che il valore sia compreso nell'array
		if(in_array($valore,$array)){
			$chiave=array_search($valore,$array);
			// rimuovo il valore passando ad unset la chiave recuperata usando array_search
			unset($array[$chiave]); 
			
			// restituisco l'array dopo averlo re-indicizzato
			return array_values($array);
		}else{
			// se non trovo corrispondenze restituisco l'array così com'è
			return $array;
	   }
	}
	
	
	// Ordina un array
	public function ordina($array){
		return sort($array);
	}
	
	//Rimuove valori doppi nell'array
	public function rimuovidoppi($array){
		return array_unique($array);
	}
	
	//Estrae tutte le chiavi di un array
	public function chiavi($array){
		return array_keys($array);
	}
	
	//Estrae tutti i valori di un array
	public function valori($array){
		return array_values($array);
	}
	
	//Mescola i valori di un array
	public function mescola($array){
		return shuffle($array);
	}
	
	//Conta gli elementi in un array
	public function conta($array){
		return count($array);
	}

}
/* Fine Array */


/* Inizio Stringhe */

class Nstringhe{
	
	//Risolve il problema degli apostrofi che creano problemi
	public function escape($stringa){
		return addslashes($stringa);
	}
	
	//Ripristina la stringa eliminando gli slash aggiunti dalla funzione escape
	public function unescape($stringa){
		return stripslashes($stringa);
	}
	
	//codifica di stringhe
	public function codifica($stringa,$volte=1,$aggiungi=''){

		if($aggiungi!='')$stringa=$stringa*$aggiungi;

		for($i=0;$i<=$volte;$i++){
			$stringa=strtr(rtrim(base64_encode($stringa), '='), '+/', '-_');
		}
		return $stringa;
	}
	
	//decodifica di stringhe codificate con 'codifica'
	public function decodifica($stringa,$volte=1,$rimuovi=''){
	
		for($i=0;$i<=$volte;$i++){
			$stringa=base64_decode(strtr($stringa, '-_', '+/'));
		}
		
		if($rimuovi!='')$stringa=$stringa/$rimuovi;

		return $stringa;
	}
	
	
	//converte i br in \n
	public function br2nl($stringa){
		
		$stringa=preg_replace('/<br\\s*?\/??>/i', "\n", $stringa);
		
		return $stringa;
	}
	// // FUNZIONE CHE DIVIDE LA STRINGA A TOT CARATTERI SENZA TAGLIARE LE PAROLE
	// E AGGIUNGENDO IN FONDO (SE CONTINUA) ... //


	function taglia_stringa($stringa, $caratteri=50) {
		
		$stringa2 = strip_tags($stringa); 
		if(strlen($stringa2)>$caratteri){
	
			$stringa2 = substr($stringa2, 0, $caratteri); 
			
			// Usiamo gli ultimi 10 caratteri per analizzare la stringa
			$posizione = strpos($stringa, substr($stringa2, -10));
			
			$stringa = substr($stringa, 0, $posizione).'...'; 
			
		}
		return $stringa;
	}
	
	public function evidenzia($parola,$stringa,$style=""){
		return preg_replace("/\b(".$parola.")\b/i", '<strong style="'.$style.'">\1</strong>', $stringa);
		exit;
	}
	
			
	//trasforma il bbcode in html
	public function bbcode($stringa,$reset=''){

		$bbcode = array("<", ">",
						"[LIST]", "[*]", "[/LIST]", 
						"[IMG]", "[/IMG]", 
						"[H1]", "[/H1]", 
						"[H2]", "[/H2]", 
						"[B]", "[/B]", 
						"[U]", "[/U]", 
						"[I]", "[/I]",
						"|]",
						'[COLOR="', "[/COLOR]",
						"[SIZE=\"", "[/SIZE]",
						'[URL=', "[/URL]",
						"[MAIL=\"", "[/MAIL]",
						"[CODE]", "[/CODE]",
						"[QUOTE]", "[/QUOTE]",
						'"]');
		$htmlcode = array("&lt;", "&gt;",
						"<ul>", "<li>", "</ul>", 
						"<img src=\"", "\">", 
						"<h1>", "</h1>", 
						"<h2>", "</h2>", 
						"<strong>", "</strong>", 
						"<u>", "</u>", 
						"<i>", "</i>",
						'">',
						"<span style=\"color:", "</span>",
						"<span style=\"font-size:", "</span>",
						'<a href="', "</a>",
						"<a href=\"mailto:", "</a>",
						"<code>", "</code>",
						"<table width=100% bgcolor=lightgray><tr><td bgcolor=white>", "</td></tr></table>",
						'">');
		if($reset=='' || $reset!='si'){
			$stringa = str_replace($bbcode, $htmlcode, $stringa);
		}else{
			$stringa = str_replace($bbcode, '', $stringa);
		}
		return nl2br($stringa); 
    } 
	
	
}


/* Fine Stringhe */



/* Inizio Numeri */

class Nnumeri{
	
	public function pari($numero="Un campo vuoto "){
		
		//Controllo se è un numero
		if(!$this->numero($numero)){
			echo '"'.$numero.'" non è un numero!';
			exit();
		}
		
		// Controllo se il numero è pari o dispari 
		if ($numero % 2 == 0){
			return TRUE; 
		}else{
			return FALSE;
		}
	}
	
	public function numero($numero){
		if(is_numeric($numero)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
}


/* Fine Numeri */



/* Inizio DB */

class Ndb{

	public $nome_tabella;

	
	//Connessione al database
	public function connessione($user,$password,$hostip,$nomedb){
		$conn=mysql_connect($hostip,$user,$password) or die("Errore nella connessione a MySql: ".$hostip);
		$conndb=mysql_select_db($nomedb,$conn) or die("Errore nella connessione al Database ".$nomedb);
	}
	
	
	//Estrarre dati dal database
	public function select($nometabella,$campi='*',$condizioni="",$order="",$limit=""){
		if($condizioni!='') $condizioni=" WHERE ".$condizioni;
		if($limit!='') $limit=" LIMIT ".$limit;
		if($order!='') $order=" ORDER BY ".$order;
		
		$query=mysql_query("SELECT ".$campi." FROM ".$nometabella.$condizioni.$order.$limit) or die ("Errore query per la tabella ".$nometabella." con errore: ".mysql_error());
		
		$this->nome_tabella=$nometabella;

		return $query;
	}
	
	
	//Inserire record con dati nel database
	public function insert($nometabella,$valori){
		$Nnumeri=new Nnumeri();
		$i=0;
		$n=0;
		$valori=explode(",,",$valori);
		$query='INSERT INTO '.$nometabella.' (';
		foreach($valori as $v){
			if($Nnumeri->pari($i)){
				if($i!=0) $query.=',';
				$query.= $v;
			}
			$i++;
		}
		$query.= ') VALUES (';
		foreach($valori as $v){
			if($Nnumeri->pari($n)==FALSE){
				if($n!=1) $query.=',';
				if(!is_numeric($v)) $query.="'";
				$query.= $v;
				if(!is_numeric($v)) $query.="'";
			}
			$n++;
		}
		$query.= ')';
		mysql_query($query) or die ("Errore query insert per tabella ".$nometabella." con errore:<br><br>".mysql_error());
	}
	
	
	//Cancellare record in database da condizione (anche multiple)
	public function delete($nometabella,$condizioni,$AND_OR = 'AND'){
		$Nnumeri=new Nnumeri();
		$condizioni=explode(",,",$condizioni);
		$cond="";
		$i=0;
		$n=0;
		foreach($condizioni as $c){
			if($Nnumeri->pari($i)){
				if($i!=0) $cond.=' '.$AND_OR.' ';
				$cond.= $c;
			}else{
				if(!is_numeric($c)) $cond.="'";
				$cond.= $c;
				if(!is_numeric($c)) $cond.="'";
			}
			$i++;
		}
		mysql_query("DELETE FROM ".$nometabella." WHERE ".$cond) or die ("Errore nella cancellazione del record dalla tabella ".$nometabella." con errore <br><br>".mysql_error());
	}

	
	//Aggiorna record in database da valori e condizione
	public function update($nometabella,$valori,$condizioni,$AND_OR='AND'){
		//setto i valori in un array
		$valore=explode(",,",$valori);
		
		//formulo la query
		$query='UPDATE '.$nometabella.' SET ';
		for($i=0;$i<count($valore);$i++){
			$query.=$valore[$i].'=';
			$i++;
			if(!is_int($valore[$i])){
				$query.="'".$valore[$i]."'";
			}else{
				$query.=$valore[$i];
			}
			if($i!=(count($valore)-1))$query.=',';
			
		}
		$query.= ' WHERE ';
		
		$condizioni=explode(",,",$condizioni);
		
		for($i=0;$i<count($condizioni);$i++){
			$query.=$condizioni[$i];
			if($i!=(count($condizioni)-1)){
				$query.=' '.$AND_OR.' ';
			}
		}
		
		//echo $query;

		mysql_query($query) or die ("Errore query update per tabella ".$nometabella." con errore:<br><br>".mysql_error());
	}
	
	
	//Conta elementi nel database da query
	public function conta($query){
		return mysql_num_rows($query);
	}
	
	
	// ritorna un array con i valori estratti dal database (per uso singolo o multiplo di dati)
	public function query_array($query){

		mysql_data_seek($query,0);
		
		$numero_record=$this->conta($query);
		
		for($i=0;$i<$numero_record;$i++){
			$array[]=mysql_fetch_assoc($query);
		}
		
		return $array;

	}

	
	// crea costanti con i valori estratti dal database (solo per uso di estrazione singola da database)
	public function query_costanti($query){

		if ( mysql_num_rows ( $query ) > 0 ){
			mysql_data_seek($query,0);
			$array=mysql_fetch_assoc($query);
			
			foreach($array as $chiave=>$valore){
				define($chiave,$valore);
			}
		}

	}

	
	//Crea automaticamente una tabella per ogni record di una determinata tabella nel database
	public function tabella($query,$testo_visualizza='',$testo_modifica='',$testo_cancella='',$url_visualizza='',$url_modifica='',$url_cancella='',$passa_valori=''){

		//inizializzo classe per taglio testo
		$Nstringhe=new Nstringhe();

		//setto passa_valori come id se vuoto
		if($passa_valori=='')$passa_valori='id';


		$nome_tabella=$this->nome_tabella;

		//creo un array con i valori da passare alle varie pagine link (visualizza, modifica, cancella)
		$passa_valori=explode(',,',$passa_valori);
		$npassa_valori=count($passa_valori);
		$valori='';
		
		//disabilito momentaneo della possibilità di selezione link
		$link='';
		
		//valori di default per le pagine V-M-C
		($testo_visualizza==''?$visualizza=NULL:NULL);
		if($testo_visualizza=='default')(file_exists('img/visualizza.gif')?$testo_visualizza='<img src="img/visualizza.gif" alt="" border="none" />':NULL);
		if($url_visualizza=='')$url_visualizza='visualizza.php';
		($testo_modifica==''?$testo_modifica=NULL:NULL);
		if($testo_modifica=='default')(file_exists('img/modifica.gif')?$testo_modifica='<img src="img/modifica.gif" alt="" border="none" />':NULL);
		if($url_modifica=='')$url_modifica='modifica.php';
		($testo_cancella==''?$testo_cancella=NULL:NULL);
		if($testo_cancella=='default')(file_exists('img/cancella.gif')?$testo_cancella='<img src="img/cancella.gif" alt="" border="none" />':NULL);
		if($url_cancella=='')$url_cancella='cancella.php';
		
		$qtitoli=$query;
				
		//rendo i link un array
		if($link!=''){
			$link=explode(',,',$link);
		}else{
			$link=NULL;
		}

		$tab='';
		
		//creo la tabella
		echo '
		<table width="100%" border="1" cellspacing="3" cellpadding="3">
		  <tr>
		  ';
		
		//se i valori maggiori di zero estrai i dati, altimenti avvisa che non ci sono record nella tabella
		if($this->conta($query)>0){
			
			//scrivo i nomi dei campi
			$atitoli=mysql_fetch_assoc($qtitoli);
	
			foreach($atitoli as $chiave=>$valore){
				$chiave=strtolower(str_replace("_"," ",str_replace("-"," ",$chiave)));
				echo '<th scope="col">'.ucwords($chiave).'</th>
				';
			}
			
			echo '
			</tr>
			';
			
			mysql_data_seek($query,0);
			
			$i=0;	
				
			//scrivo i dati
			while($a=mysql_fetch_assoc($query)){
				echo '
				<tr>
				';
				
				foreach($a as $chiave=>$valore){
					if($link!=NULL && in_array($chiave,$link)){
						echo '<td><a href="'.$valore.'" target="_blank">'.$valore.'</a></td>
						';
					}else{
						echo '<td>'.$Nstringhe->taglia_stringa($valore,150).'</td>
						';
					}
				}	
				
				if($testo_visualizza!=NULL){
					echo '<td width="6%" align="center"><a href="'.$url_visualizza.'?nome_tabella='.$nome_tabella.'&amp;';
					
					for($i=0;$i<$npassa_valori;$i++){
						$uguale=substr_count($passa_valori[$i],'=');
						echo $passa_valori[$i].($uguale==0?'=':'').$a[$passa_valori[$i]];
						if($i!=($npassa_valori-1)) echo '&amp;';
					}
	
					echo '">'.$testo_visualizza.'</a></td>';
				}
				if($testo_modifica!=NULL){
					echo '<td width="6%" align="center"><a href="'.$url_modifica.'?nome_tabella='.$nome_tabella.'&amp;';
					
					for($i=0;$i<$npassa_valori;$i++){
						$uguale=substr_count($passa_valori[$i],'=');
						echo $passa_valori[$i].($uguale==0?'=':'').$a[$passa_valori[$i]];
						if($i!=($npassa_valori-1)) echo '&amp;';
					}
	
					echo '">'.$testo_modifica.'</a></td>';
				}
				if($testo_cancella!=NULL){
					echo '<td width="6%" align="center"><a href="'.$url_cancella.'?nome_tabella='.$nome_tabella.'&amp;';
					
					for($i=0;$i<$npassa_valori;$i++){
						$uguale=substr_count($passa_valori[$i],'=');
						echo $passa_valori[$i].($uguale==0?'=':'').$a[$passa_valori[$i]];
						if($i!=($npassa_valori-1)) echo '&amp;';
					}

					echo '">'.$testo_cancella.'</a></td>';
				}
	
				
				$i++;
				echo '
				</tr>';		
			}
		}else{
			//se non ci sono dati viene scritto 
			echo '<tr><td>Nessun record nella tabella</td></tr>';
		}
		echo '
		</table>';
	
		mysql_data_seek($query,0);

	}
	
	
	//array contenente le righe da creare con la funzione crea_tabella_singola
	public $riga=array();
	
	
	public function crea_tabella_singola($valore_estrazione_univoca='',$campo_per_estrazione_univoca='',$testo_modifica='',$testo_cancella='',$url_modifica='',$url_cancella=''){
		
		//Setto come campo di estrazione univoca l'id se non sono passati valori differenti
		if($campo_per_estrazione_univoca=='')$campo_per_estrazione_univoca='id';

		
			
		$dati_per_estrazione='&amp;'.$campo_per_estrazione_univoca.'='.($valore_estrazione_univoca!=''?$valore_estrazione_univoca:'SETTARE_VALORE_UNIVOCO');

		if($testo_modifica=='')$testo_modifica==NULL;
		if($testo_modifica=='default')$testo_modifica=(file_exists('img/modifica.gif')?'<img src="img/modifica.gif" alt="" border="none" />':'file "modifica.gif" non presente');
			
		if($testo_cancella=='')$testo_cancella==NULL;
		if($testo_cancella=='default')$testo_cancella=(file_exists('img/cancella.gif')?'<img src="img/cancella.gif" alt="" border="none" />':'file "cancella.gif" non presente');
		if($url_modifica=='')$url_modifica='modifica.php';
		if($url_cancella=='')$url_cancella='cancella.php';
			
		if($testo_modifica!=NULL)
		echo '<a href="'.$url_modifica.'?nome_tabella='.$this->nome_tabella.$dati_per_estrazione.'">'.$testo_modifica.'</a>&nbsp;&nbsp';
		if($testo_cancella!=NULL)
		echo '<a href="'.$url_cancella.'?nome_tabella='.$this->nome_tabella.$dati_per_estrazione.'">'.$testo_cancella.'</a>';
			
		
		//Creo la tabella
		$tabella='<table width="100%" border="1" cellspacing="3" cellpadding="3">';		
		
		foreach($this->riga as $chiave=>$valore){
			$tabella.='<tr><th scope="row">'.$chiave.'</th>
			';
			$tabella.='<td>'.$valore.'</td></tr>
			';
		}

		$tabella.='</table>';
		return $tabella;
	}
	
	//query per ricerca, ordinando risultati per attinenza
	public function ricerca($nometabella,$campi,$termini,$parziale='',$where='',$limit=''){
		
		$q="SELECT *, MATCH(".$campi.") AGAINST('".$termini."' IN BOOLEAN MODE) AS attinenza
			FROM ".$nometabella."
			WHERE MATCH(".$campi.") AGAINST('".$termini."' IN BOOLEAN MODE)".($where==''?'':' AND '.$where)." 
			ORDER BY attinenza DESC".($limit==''?'':' LIMIT '.$limit);
		$query=mysql_query($q) or die ("Errore nella query di ricerca. Errore: ".mysql_error());
		
		if($this->conta($query)==0 || $query=='Errore nella query di ricerca. Errore: Nessun risultato'){
			
			if($parziale!==''||$parziale!=='no'){
				$campiar=explode(',',$campi);
				$terminiar=explode(' ',$termini);
				$query="SELECT * FROM $nometabella WHERE ".$where;
				if($where!='') $query.=' AND ';
				foreach($campiar as $cc=>$cv){
					foreach($terminiar as $tc=>$tv){
						$query.="$cv LIKE '%$tv%' OR ";
					}
				}
				$query=substr($query, 0, strlen($query)-4);
				if($limit!='') $query=' LIMIT '.$limit;
				$query=mysql_query($query) or die ("Errore nella query di ricerca. Errore: ".mysql_error());
			}else{
				$query=$this->select($nometabella,'*',$where,'',0);
			}
		}
			
		return $query;
		
	}
		
	
}

/* Fine DB */



/* Inizio Date */

class Ndate{
	
	//Ritorna il nome del giorno in Italiano dalla data passata
	public function	nomegiorno($data=""){
		if($data=="")$data=time();
		$data=$this->date_to_time($data);
		$data = date("w",$data);
		$giorni = array( "Domenica", "Luned&igrave;", "Marted&igrave;", "Mercoled&igrave;", "Gioved&igrave;", "Venerd&igrave;", "Sabato" );
		return $giorni[$data];
	}
	
	//Ritorna il nome del mese in Italiano dalla data passata
	public function	nomemese($data=""){
		if($data=="")$data=time();
		$data=$this->date_to_time($data);
		$data = date("n",$data)-1;
		$mesi = array( "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre" );
		return $mesi[$data];
	}
	
	//Ritorna l'ora da una data passata o attuale. Scelta se vedere i secondi o meno
	public function	ora($data="",$secondi='no'){
		if($data=="")$data=time();
		$data=$this->date_to_time($data);
		$data = date("H:i".($secondi!='no'?':s':""),$data);
		return $data;
	}

	
	public function	giorno($data=""){
		if($data=="")$data=time();
		$data=$this->date_to_time($data);
		$data = date("d",$data);
		return $data;
	}
	
	public function	mese($data=""){
		if($data=="")$data=time();
		$data=$this->date_to_time($data);
		$data = date("m",$data);
		return $data;
	}
	
	public function	anno($data="",$lunghezza=4){
		if($data=="")$data=time();
		$data=$this->date_to_time($data);
		$data = date(($lunghezza=='2'?'y':'Y'),$data);
		return $data;
	}
	
	//Ritorna il timestamp di qualsiasi data, anche timestamp
	public function date_to_time($date){
		if(preg_match('/^[0-9]{1,}$/', $date)){
			$date=$date;
		}else{
			$date=strtotime($date);
		}
		return $date;
	}
	
	
	// Converte data italiana in data us per conversione in datetotime
	public function date_ita_to_time($data,$delimitatore='/'){
		$data=explode($delimitatore,$data);
		$data=mktime(0,0,0, $data[1], $data[0], $data[2]);
		return $data;
	}
	
	
	//Mostra data odierna in formato europeo. Ora e secondi nascosti
	public function data_oggi($delimitatore='',$ora='',$secondi=''){
		$d=($delimitatore==''?'/':$delimitatore);
		$ora=($ora!=''?' H:i'.($secondi!=''?':s':NULL):NULL);
		return date('d'.$d.'m'.$d.'Y'.$ora,time());
	}
	
	// Conversione in secondi
	public function oretosecondi($ore){
		$risultato = 3600 * $ore;
		return $risultato;
	}
	public function giornitosecondi($giorni){
		$risultato = $this->oretosecondi(24) * $giorni;
		return $risultato;
	}
	public function mesitosecondi($mesi){
		$risultato = $this->giornitosecondi(30) * $mesi;
		return $risultato;
	}
	public function annitosecondi($anni){
		$risultato = $this->giornitosecondi(365) * $anni;
		return $risultato;
	}
	//fine conversione in secondi
	
}


/* Fine Date */



/* Inizio Carrello */

class Ncart{
	
	public function carrello(){
		$Ncookie=new Ncookie();
		if(!isset($_COOKIE['cart'])){
			$array=serialize(array());
			$Ncookie->salva('cart',$array,24);	
		}
		
		$cookie=$_COOKIE['cart'];
		return (get_magic_quotes_gpc()?unserialize(stripslashes($cookie)):unserialize($cookie));
	}
	
	//svuota carrello
	public function svuotacarrello(){
		$Ncookie=new Ncookie();
		if(isset($_COOKIE['cart'])){
			$Ncookie->cancella('cart');
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	// Inerisci prodotto nel carrello
	public function inserisci($id,$quantita=1,$opzioni=NULL){
	
		$Ncookie=new Ncookie();

		$cart=$this->carrello();
		
		$opzcript=base64_encode($opzioni);
		
		$opzarr=array();
		
		//creo un array con le opzioni
		if($opzioni!=NULL){
			$opz=explode(",,",$opzioni);
			for($i=0;$i<(count($opz));$i++){
				$opzarr[$opz[$i]]=$opz[($i+1)];
				$i++;
			}
		}
		
		
		//controllo se la chiave id prodotto esiste già	
		if(array_key_exists($id,$cart)){
			for($i=0;$i<count($cart[$id]);$i++){
				if($cart[$id][$i]['uniquecode']==$opzcript){
					$cart[$id][$i]['qty']+=$quantita;
					$code='ok';					
				}			
			}
			if(!isset($code) && $code!='ok'){
				$opzarr['qty']=$quantita;
				$opzarr['uniquecode']=$opzcript;
				$cart[$id][]=$opzarr;
			}
		}else{
			$opzarr['qty']=$quantita;
			$opzarr['uniquecode']=$opzcript;
			$cart[$id][]=$opzarr;
		}

		$cart=serialize($cart);
		$Ncookie->salva('cart',$cart,24);
	}
	
	
	
	public function rimuovi($uniquecode,$quantita='tutti'){

		$Ncookie=new Ncookie();
		
		$cart=$this->carrello();

		foreach($cart as $ch=>$va){
			$id=$ch;
			foreach($va as $ch2=>$va2){
				$id2=$ch2;
				if($va2['uniquecode']==$uniquecode){
					if($quantita=='tutti'){
						unset($cart[$id][$id2]);
					}else{
						$cart[$id][$id2]['qty']-=$quantita;
						if($cart[$id][$id2]['qty']<=0)unset($cart[$id][$id2]);
					}
					continue;
				}
			}
				
		}

		$cart=serialize($cart);
		$Ncookie->salva('cart',$cart,24);
		
		return $this->visualizza();
	}
	
	
		
	public function visualizza(){
		
		$Narray=new Narray();
		
		$carrello=$this->carrello();

		$prezzototale=0;
		
		$cart= '<div style="width:100%;" id="cart">';
		if(isset($_COOKIE['cart']) && count($carrello)>0){
			foreach($carrello as $c){
				foreach($c as $c=>$v){
					unset($v['uniquecode']);
					$nome=$v['nome'];
					unset($v['nome']);
					$prezz=$v['prezzo'];
					$prezzo=$v['prezzo']*$v['qty'];
					$prezzototale+=$prezzo;
					unset($v['prezzo']);
					$qty=$v['qty'];
					unset($v['qty']);
					if(isset($v['codice'])) unset($v['codice']);
	
	
					$cart.='
					<div style="width:100%;"><div style="text-align:left;">'.ucwords($nome).'</div><div style="text-align:right; margin-top:-18px; margin-bottom:10px;">'.$prezz.'&euro;&nbsp;/&nbsp;x '.$qty.'</div></div>
					<div style="width:100%; text-align:right">
					<table width="100%" border="0" cellspacing="2" cellpadding="2">';
					foreach($v as $chiave=>$valore){
						$cart.='<tr><td width="70%" align="right">'.ucwords($chiave).' : </td><td width="30%" align="center">'.ucwords($valore).'</td></tr>';				
					}
									
					$cart.='</table></div>
					<div style="width:100%; text-align:right; margin:5px"><p>Prezzo: '.$prezzo.'&euro;</p></div>
					<hr>';
				}
			
			}
			
			$cart.='<div style="width:100%; text-align:right; font-weight:bold;"><br />Totale: '.$prezzototale.'&euro;</div>';		
			
		}
		
		$cart.= '</div>';
		
		
		return $cart;
	}
	
	public function paypal($email_azienda,$valuta='',$email_conferma='',$url_ritorno='',$url_ritorno_annulla='',$invia_dati=''){
		
		$Nurl=new Nurl();
		
		if($valuta=='')$valuta='EUR';
		if($email_conferma=='')$email_conferma=$email_azienda;
		
		$Narray=new Narray();
		
		$p = new paypal_class; 
		
		if($url_ritorno!='')            $p->add_field('return',$url_ritorno);
		if($url_ritorno_annulla!='')    $p->add_field('cancel_return',$url_ritorno_cancella);
		if($invia_dati!='')             $p->add_field('custom',$invia_dati);
		
		$p->add_field('business', $email_azienda); 
		$p->add_field('currency_code', $valuta); 
		$p->add_field('upload', '1'); 
		$p->add_field('cmd', '_cart');
	
		$carrello=$this->carrello();
		
		$prezzototale=0;
		
		$i=1;
		foreach($carrello as $c){
			foreach($c as $c=>$v){
				$code=($v['uniquecode']);
				unset($v['uniquecode']);
				$nome=$v['nome'];
				unset($v['nome']);
				$prezz=$v['prezzo'];
				$prezzo=$v['prezzo']*$v['qty'];
				$prezzototale+=$prezzo;
				unset($v['prezzo']);
				$qty=$v['qty'];
				unset($v['qty']);
				if(isset($v['codice'])){
					$codice=$v['codice'];
					unset($v['codice']);
				}else{
					$codice=$nome.'-'.$prezz;
				}

				$p->add_field('item_name_'.$i,ucwords($nome));
				$p->add_field('amount_'.$i, $prezz); 
				$p->add_field('quantity_'.$i, $qty); 

				$n=0;
				
				foreach($v as $chiave=>$valore){
					($chiave=='codice' ? $p->add_field('item_number_'.$i, $valore) : $p->add_field('item_number_'.$i, $codice));
					
					$p->add_field('on'.$n.'_'.$i, $chiave); 
					$p->add_field('os'.$n.'_'.$i, $valore); 
					$n++;
				}

				$i++;

			}
			
		} 
		$p->submit_paypal_post();
		exit;
	}
	
	public function recupera_paypal(){
		if(isset($_REQUEST['custom'])){
			return $_REQUEST['custom'];
		}
		if(isset($_REQUEST['cm'])){
			return $_REQUEST['cm'];
		}
	}
		
}

/* CART PAYPAL */

class paypal_class {
    
   var $last_error;                 // holds the last error encountered
   
   var $ipn_log;                    // bool: log IPN results to text file?
   
   var $ipn_log_file;               // filename of the IPN log
   var $ipn_response;               // holds the IPN response from paypal   
   var $ipn_data = array();         // array contains the POST values for IPN
   
   var $fields = array();           // array holds the fields to submit to paypal

   
   function paypal_class() {
       
      // initialization constructor.  Called when class is created.
      
      $this->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
      //$this->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
      
      $this->last_error = '';
      
      $this->ipn_log_file = '.ipn_results.log';
      $this->ipn_log = true; 
      $this->ipn_response = '';
      
      // populate $fields array with a few default values.  See the paypal
      // documentation for a list of fields and their data types. These defaul
      // values can be overwritten by the calling script.

      $this->add_field('rm','2');           // Return method = POST
      $this->add_field('cmd','_xclick'); 
      
   }
   
   function add_field($field, $value) {
      
      // adds a key=>value pair to the fields array, which is what will be 
      // sent to paypal as POST variables.  If the value is already in the 
      // array, it will be overwritten.
            
      $this->fields["$field"] = $value;
   }

   function submit_paypal_post() {
 
      // this function actually generates an entire HTML page consisting of
      // a form with hidden elements which is submitted to paypal via the 
      // BODY element's onLoad attribute.  We do this so that you can validate
      // any POST vars from you custom form before submitting to paypal.  So 
      // basically, you'll have your own form which is submitted to your script
      // to validate the data, which in turn calls this function to create
      // another hidden form and submit to paypal.
 
      // The user will briefly see a message on the screen that reads:
      // "Please wait, your order is being processed..." and then immediately
      // is redirected to paypal.

      echo "<html>\n";
      echo "<head><title>Inoltro Pagamento...</title></head>\n";
      echo "<body onLoad=\"document.forms['paypal_form'].submit();\">\n";
      echo "<center><h2>Attendere, l'ordine &egrave; in fase di inoltro a paypal";
      echo " e sarete reindirizzati a breve.</h2></center>\n";
      echo "<form method=\"post\" name=\"paypal_form\" ";
      echo "action=\"".$this->paypal_url."\">\n";

      foreach ($this->fields as $name => $value) {
         echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
      }
      echo "<center><br/><br/>Se non venite reindirizzati al sito ";
      echo "paypal entro 5 secondi...<br/><br/>\n";
      echo "<input type=\"submit\" value=\"Cliccare qui\"></center>\n";
      
      echo "</form>\n";
      echo "</body></html>\n";
	  exit;

   }
   
   function validate_ipn() {

      // parse the paypal URL
      $url_parsed=parse_url($this->paypal_url);        

      // generate the post string from the _POST vars aswell as load the
      // _POST vars into an arry so we can play with them from the calling
      // script.
      $post_string = '';    
      foreach ($_POST as $field=>$value) { 
         $this->ipn_data["$field"] = $value;
         $post_string .= $field.'='.urlencode(stripslashes($value)).'&'; 
      }
      $post_string.="cmd=_notify-validate"; // append ipn command

      // open the connection to paypal
      $fp = fsockopen($url_parsed[host],"80",$err_num,$err_str,30); 
      if(!$fp) {
          
         // could not open the connection.  If loggin is on, the error message
         // will be in the log.
         $this->last_error = "fsockopen error no. $errnum: $errstr";
         $this->log_ipn_results(false);       
         return false;
         
      } else { 
 
         // Post the data back to paypal
         fputs($fp, "POST $url_parsed[path] HTTP/1.1\r\n"); 
         fputs($fp, "Host: $url_parsed[host]\r\n"); 
         fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n"); 
         fputs($fp, "Content-length: ".strlen($post_string)."\r\n"); 
         fputs($fp, "Connection: close\r\n\r\n"); 
         fputs($fp, $post_string . "\r\n\r\n"); 

         // loop through the response from the server and append to variable
         while(!feof($fp)) { 
            $this->ipn_response .= fgets($fp, 1024); 
         } 

         fclose($fp); // close connection

      }
      
      if (preg_match("VERIFICATO",$this->ipn_response)) {
  
         // Valid IPN transaction.
         $this->log_ipn_results(true);
         return true;       
         
      } else {
  
         // Invalid IPN transaction.  Check the log for details.
         $this->last_error = 'Validazione IPN Fallita.';
         $this->log_ipn_results(false);   
         return false;
         
      }
      
   }
   
   function log_ipn_results($success) {
       
      if (!$this->ipn_log) return;  // is logging turned off?
      
      // Timestamp
      $text = '['.date('m/d/Y g:i A').'] - '; 
      
      // Success or failure being logged?
      if ($success) $text .= "SUCCESSO!\n";
      else $text .= 'FAIL: '.$this->last_error."\n";
      
      // Log the POST variables
      $text .= "IPN POST Variabili da Paypal:\n";
      foreach ($this->ipn_data as $key=>$value) {
         $text .= "$key=$value, ";
      }
 
      // Log the response from the paypal server
      $text .= "\nIPN Risposta dal Server Paypal:\n ".$this->ipn_response;
      
      // Write to log
      $fp=fopen($this->ipn_log_file,'a');
      fwrite($fp, $text . "\n\n"); 

      fclose($fp);  // close file
   }

   function dump_fields() {
 
      // Used for debugging, this function will output all the field/value pairs
      // that are currently defined in the instance of the class using the
      // add_field() function.
      
      echo "<h3>paypal_class->dump_fields() Output:</h3>";
      echo "<table width=\"95%\" border=\"1\" cellpadding=\"2\" cellspacing=\"0\">
            <tr>
               <td bgcolor=\"black\"><b><font color=\"white\">Nome campo</font></b></td>
               <td bgcolor=\"black\"><b><font color=\"white\">Valore</font></b></td>
            </tr>"; 
      
      ksort($this->fields);
      foreach ($this->fields as $key => $value) {
         echo "<tr><td>$key</td><td>".urldecode($value)."&nbsp;</td></tr>";
      }
 
      echo "</table><br>"; 
   }
}         

/* 2 */
 
// Setup class
$p = new paypal_class;             // initiate an instance of the class
$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
//$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
            
// setup a variable for this script (ie: 'http://www.micahcarrick.com/paypal.php')
$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

// if there is not action variable, set the default action of 'process'
if (!empty($_GET['action'])){// $_GET['action'] = 'process';  
	
	switch ($_GET['action']) {
		
	   case 'process':      // Process and order...
	
		  // There should be no output at this point.  To process the POST data,
		  // the submit_paypal_post() function will output all the HTML tags which
		  // contains a FORM which is submited instantaneously using the BODY onload
		  // attribute.  In other words, don't echo or printf anything when you're
		  // going to be calling the submit_paypal_post() function.
	 
		  // This is where you would have your form validation  and all that jazz.
		  // You would take your POST vars and load them into the class like below,
		  // only using the POST values instead of constant string expressions.
	 
		  // For example, after ensureing all the POST variables from your custom
		  // order form are valid, you might have:
		  //
		  // $p->add_field('first_name', $_POST['first_name']);
		  // $p->add_field('last_name', $_POST['last_name']);
		  
		  $p->add_field('business', $email_azienda);
		  $p->add_field('return', $this_script.'?action=success');
		  $p->add_field('cancel_return', $this_script.'?action=cancel');
		  $p->add_field('notify_url', $this_script.'?action=ipn');
		  $p->add_field('amount', '1.99');
	
		  $p->submit_paypal_post(); // submit the fields to paypal
		  //$p->dump_fields();      // for debugging, output a table of all the fields
		  break;
		  
	   case 'success':      // Order was successful...
	   
		  // This is where you would probably want to thank the user for their order
		  // or what have you.  The order information at this point is in POST 
		  // variables.  However, you don't want to "process" the order until you
		  // get validation from the IPN.  That's where you would have the code to
		  // email an admin, update the database with payment status, activate a
		  // membership, etc.  
	 		$Nemail=new Nemail();

		  echo "<html><head><title>Pagamento riuscito</title></head><body><h3>Grazie per aver scelto il nostro servizio.</h3>";
		  foreach ($_POST as $key => $value) { echo "$key: $value<br>"; }
		  echo "</body></html>";
		  
		  // You could also simply re-direct them to another page, or your own 
		  // order status page which presents the user with the status of their
		  // order based on a database (which can be modified with the IPN code 
		  // below).
		  
		  break;
		  
	   case 'cancel':       // Order was canceled...
	
		  // The order was canceled before being completed.
	 
		  echo "<html><head><title>Cancellato</title></head><body><h3>L'ordine è stato cancellato.</h3>";
		  echo "</body></html>";
		  
		  break;
		  
	   case 'ipn':          // Paypal is calling page for IPN validation...
	   
		  // It's important to remember that paypal calling this script.  There
		  // is no output here.  This is where you validate the IPN data and if it's
		  // valid, update your database to signify that the user has payed.  If
		  // you try and use an echo or printf function here it's not going to do you
		  // a bit of good.  This is on the "backend".  That is why, by default, the
		  // class logs all IPN data to a text file.
		  
		  if ($p->validate_ipn()) {
			  
			 // Payment has been recieved and IPN is verified.  This is where you
			 // update your database to activate or process the order, or setup
			 // the database with the user's order details, email an administrator,
			 // etc.  You can access a slew of information via the ipn_data() array.
	  
			 // Check the paypal documentation for specifics on what information
			 // is available in the IPN POST variables.  Basically, all the POST vars
			 // which paypal sends, which we send back for validation, are now stored
			 // in the ipn_data() array.
	  
			 // For this example, we'll just email ourselves ALL the data.
			 $subject = 'Notifica Pagamento istantaneo - Ricevuto Pagamento';
			 $to = $email_conferma;    //  your email
			 $body =  "Un pagamento istantaneo è stato ricevuto con successo\n";
			 $body .= "da ".$p->ipn_data['payer_email']." il ".date('m/d/Y');
			 $body .= " alle ".date('g:i A')."\n\nDetails:\n";
			 
			 foreach ($p->ipn_data as $key => $value) { $body .= "\n$key: $value"; }
			 mail($to, $subject, $body);
		  }
		  break;
	 }
}


/* FINE CART PAYPAL */

/* Fine Carrello */



/* Inizio Email */
class Nemail{
	
	public function invia($mittente,$destinatario,$oggetto,$testo,$nome_mittente=NULL,$html='no',$phpmailer='no'){
		
		if($phpmailer!='si'){
			//Controllo che il nome utente sia inserito e lo aggiungo
			if($nome_mittente==NULL){
				$mittente='FROM: '.$mittente.'<'.$mittente.'>';
			}else{
				$mittente='FROM: '.$nome_mittente.'<'.$mittente.'>';
			}
			
			//controllo che la mail sia html o no
			if($html=='si'||$html==1){
				$mittente.="\r\n".'MIME-Version: 1.0'."\r\n";
				$mittente.='Content-type: text/html; charset=iso-8859-1'."\r\n";
			}
					
			//invia email, ritorna true se l'ha mandata, false se no
			if(@mail($destinatario,$oggetto,$testo,$mittente)){
				return TRUE;
			}else{
				return FALSE;
			}
			
		}else{
			
			require_once 'class.phpmailer.php';
			
			$mail = new PHPMailer();
			$nomedominio=new Nurl();
			// Telling the class to use SMTP
			$mail->IsSMTP();
			// SMTP server
			$mail->Host = "localhost";//"smtp.".$nomedominio->nomedominio().".com";
			// The from email address should be accepted by the smtp server
			$mail->From = $mittente;
			$mail->AddAddress($destinatario);
			
			$mail->CharSet = 'UTF-8';
			$mail->ContentType = 'Content-type: text/plain; charset=iso-8859-1'."\r\n";
			$mail->FromName = $nome_mittente;
			$mail->Subject = $oggetto;
			$mail->Body = $testo;
			$mail->IsHTML(($html=='no'?false:true));

			//$mail->WordWrap = 50;
			
			if(!$mail->Send()){
				return FALSE;
				echo "Mailer Error: " . $mail->ErrorInfo;
			}else{
				return TRUE;
			}
		}		
	}
	
			
	public function emailsicura($email){
		$nemail = "";
		$strlen = strlen($email);
		for ($i = 0; $i < $strlen; $i++)
			$nemail .= "&#".ord($email[$i]).";";
		return $nemail;
	}
	
	
	
}


/* Fine Email */


/* Inizio Accesso */
class Naccesso{
	
	
	//login
	public function login($nome,$password,$nome_tabella,$campo_nome='nome',$campo_password='password'){
		$Ndb=new Ndb();
		$Nstringhe=new Nstringhe();
		$query=$Ndb->select($nome_tabella,'*',$campo_nome.'=\''.$nome.'\' AND '.$campo_password.'=\''.$password.'\' ');

		if($Ndb->conta($query)==0){
			return FALSE;
		}else{
			$id=mysql_fetch_array($query);
			$id=$id['id'];
			$id=$Nstringhe->codifica($id,3,385);
			$Nsessioni=new Nsessioni();
			session_start();
			$Nsessioni->salva('us',$id,'si');
			$Nsessioni->salva('accesso','eseguito','si');
			$Nsessioni->salva('da',$dati_aggiuntivi,'si');

			return TRUE;
		}
		
	}
	
	public function id(){
		$Nsessioni=new Nsessioni();
		session_start();
		$Nstringhe=new Nstringhe();
		$id=$_SESSION['us'];
		$id=$Nstringhe->decodifica($id);
		$id=$Nstringhe->decodifica($id,3,385);
		return $id;
	}
	
	//logout
	public function logout(){
		unset($_SESSION['us']);
		unset($_SESSION['accesso']);
	}
	
	//controllo
	public function controllo(){
		$Nsessioni=new Nsessioni();
		session_start();
		
		if($Nsessioni->visualizza('accesso','si')=='eseguito' && isset($_SESSION['us']) ){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	
	
}


/* Fine Accesso */

/* Inizio Form */

class Nform{
	
	//apri form
	public function apri($id,$destinazione,$file='no'){
		$campo='
		<form action="'.$destinazione.'" method="post" id="'.$id.'" '.($file!='no'?'enctype="multipart/form-data"':NULL).'>
		';
		return $campo;
	}
	
	//submit
	public function submit($testo='',$classe='',$name=''){
		$campo='
		<input type="submit" value="'.($testo==''?'Invia':$testo).'" '.($classe!=''?'class="'.$classe.'" ':NULL).' '.($name!=''?'name="'.$name.'" ':NULL).' />
		';
		return $campo;
	}
	
	//chiudi
	public function chiudi(){
		return '</form>';
	}
	
	//ricevi
	public function ricevi(){
		$valori=$_REQUEST;

		foreach($valori as $chiave=>$valore){
			define($chiave,$valore);
		}
	}
	
	
	//campo testo
	public function campotesto($nome,$valore='',$id='',$classe='',$solo_lettura='',$lunghezza=40,$suggerimenti=''){
		
		if($id=='')$id=$nome;
		
		if($suggerimenti!=''){
			if(!is_array($suggerimenti)){
				$suggerimenti=explode(',,',$suggerimenti);
			}
					
			$lista=NULL;
			for($i=0;$i<count($suggerimenti);$i++){
				$lista.='"'.$suggerimenti[$i].'"';
				if($i!=(count($suggerimenti)-1)) $lista.=',';
			}
			
			$campo='
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
			';
			$campo.= '
			<!-- Libreria JQuery JS e CSS -->
			<script type="text/javascript"
					src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.js"></script>
			<script type="text/javascript"
					src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/i18n/jquery.ui.datepicker-it.js"></script>
			<link rel="stylesheet"
				  href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css"/>
			<link rel="stylesheet"
				  href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/redmond/jquery-ui.css" type="text/css"/>
			<script>
				$(function() {
					var availableTags = [
						'.$lista.'
					];
					$( "#'.$id.'" ).autocomplete({
						source: availableTags
					});
				});
			</script>
						
			<div class="ui-widget">
				<input type="text" '.($id!=''?'id="'.$id.'" ':NULL).'name="'.$nome.'" value="'.$valore.'" size="'.$lunghezza.'" '.($classe!=''?'class="'.$classe.'" ':NULL).'  '.($solo_lettura!=''?'readonly="readonly"':NULL).' />
			</div>
					
		';
		
		}else{
		
		$campo='
		<input type="text" '.($id!=''?'id="'.$id.'" ':NULL).'name="'.$nome.'" value="'.$valore.'" size="'.$lunghezza.'" '.($classe!=''?'class="'.$classe.'" ':NULL).'  '.($solo_lettura!=''?'readonly="readonly"':NULL).' />
		';
		}
		
		
		return $campo;		
		
	}
	
	
	//campo password
	public function campopassword($nome,$valore='',$id='',$classe='',$solo_lettura='',$lunghezza=40){
		if($id=='')$id=$nome;

		$campo='
		<input type="password" '.($id!=''?'id="'.$id.'" ':NULL).'name="'.$nome.'" value="'.$valore.'" size="'.$lunghezza.'" '.($classe!=''?'class="'.$classe.'" ':NULL).'  '.($solo_lettura!=''?'readonly="readonly"':NULL).' />
		';
		return $campo;		
	}
	
	
	//campo hidden
	public function campohidden($nome,$valore='',$id=''){
		if($id=='')$id=$nome;
		
		$campo='
		<input type="hidden" '.($id!=''?'id="'.$id.'" ':NULL).'name="'.$nome.'" value="'.$valore.'" />
		';
		return $campo;		
	}

	
	//campo area testo
	public function areatesto($nome,$valore='',$id='',$classe='',$editor_testo='',$altezza=200,$larghezza=900,$solo_lettura=''){
		
		if($id=='')$id=$nome;
		
		//nascondo l'editor se il browser è Internet Explorer
		$Nutili=new Nutili();
		
		if($editor_testo==''){
			$campo='
			<textarea id="'.$id.'" name="'.$nome.'" style=" width:'.$larghezza.'px; height:'.$altezza.'px" '.($classe!=''?'class="'.$classe.'" ':NULL).' '.($solo_lettura!=''?'readonly="readonly"':NULL).'>'.$valore.'</textarea>
			';
		}else{ 
	?>
    
    
    <script language="Javascript">
			var isMozilla = (navigator.userAgent.toLowerCase().indexOf('gecko')!=-1) ? true : false;
			var regexp = new RegExp("[\r]","gi");
			
			function storeCaret(selec)
			{
				if (isMozilla) 
				{
				// Mozilla
			
					var oField = document.forms['form_<?=$id?>'].elements['<?=$id?>'];
												
					var objectValue = $('#<?=$id?>').val();
			
					deb = oField.selectionStart;
					fin = oField.selectionEnd;

					objectValueDeb = objectValue.substring( 0 , oField.selectionStart );
					objectValueFin = objectValue.substring( oField.selectionEnd , oField.textLength );
					objectSelected = objectValue.substring( oField.selectionStart ,oField.selectionEnd );
			
				//	alert("Debut:'"+objectValueDeb+"' ("+deb+")\nFin:'"+objectValueFin+"' ("+fin+")\n\nSelectionné:'"+objectSelected+"'("+(fin-deb)+")");
						
						
					if(selec=='URL'){
						var selecpre="URL="+prompt('Inserire il link:','http://');
						if(objectSelected=='') var objectSelected=prompt('Inserire il testo che verrà collegato al link:');
					}else{
						var selecpre=selec;
					}
					
					oField.value = objectValueDeb + "[" + selecpre + "]" + objectSelected + "[/" + selec + "]" + objectValueFin;
					oField.selectionStart = objectValueDeb;
					oField.selectionEnd = objectValueDeb + "[" + selecpre + "]" + objectSelected + "[/" + selec + "]";
					oField.focus();
					oField.setSelectionRange(
					objectValueDeb.length + selec.length + 2,
					objectValueDeb.length + selec.length + 2);
				}
				else
				{
				// IE
					
					oField = document.forms['form_<?=$id?>'].elements['<?=$nome?>'];
					var str = document.selection.createRange().text;
			
					if (str.length>0)
					{
						if(selec=='URL'){
							var selecpre="URL="+prompt('Inserire il link:','http://');
							if(str=='') var objectSelected=prompt('Inserire il testo che verrà collegato al link:');
						}else{
							var selecpre=selec;
						}
					// Se è stato selezionato del testo
						var sel = document.selection.createRange();
						sel.text = "[" + selecpre + "]" + str + "[/" + selec + "]";
						sel.collapse();
						sel.select();
					}
					else
					{
						if(selec=='URL'){
							var selecpre="URL="+prompt('Inserire il link:','http://');
							var str=prompt('Inserire il testo che verrà collegato al link:','');
						}else{
							var selecpre=selec;
							var str='';
						}
						//oField.focus(oField.caretPos);
					//	alert(oField.caretPos+"\n"+oField.value.length+"\n")
						oField.focus(oField.value.length);
						oField.caretPos = document.selection.createRange().duplicate();
						
						var bidon = "%~%";
						var orig = oField.value;
						oField.caretPos.text = bidon;
						var i = oField.value.search(bidon);
						oField.value = orig.substr(0,i) + "[" + selecpre + "]" + str + "[/" + selec + "]" + orig.substr(i, oField.value.length);
						var r = 0;
						for(n = 0; n < i; n++)
						{if(regexp.test(oField.value.substr(n,2)) == true){r++;}};
						pos = i + 2 + selec.length - r;
						//placer(document.forms['news'].elements['newst'], pos);
						var r = oField.createTextRange();
						r.moveStart('character', pos);
						r.collapse();
						r.select();
			
					}
				}
			}

			</script>
            
            
            
    		<form name="form_<?=$id?>" id="form_<?=$id?>">

    		<p style="font-size:14px; font-weight:bold; font-family:'Times New Roman', Times, serif;">
            <input class="voci_bbcode" type="button" value="B" onclick="storeCaret('B')">
            <input class="voci_bbcode" type="button" value="I" onclick="storeCaret('I')">
            <input class="voci_bbcode" type="button" value="U" onclick="storeCaret('U')">
            <input class="voci_bbcode" type="button" value="QUOTE" onclick="storeCaret('QUOTE')">
            <input class="voci_bbcode" type="button" value="CODE" onclick="storeCaret('CODE')">
            <input class="voci_bbcode" type="button" value="URL" onclick="storeCaret('URL')">
            <input class="voci_bbcode" type="button" value="IMG" onclick="storeCaret('IMG')"> 
            </p>

            <?
			echo '
			<textarea id="'.$id.'" name="'.$nome.'" wrap="virtual" style=" width:'.$larghezza.'px; height:'.$altezza.'px;" '.($classe!=''?'class="'.$classe.'" ':NULL).' '.($solo_lettura!=''?'readonly="readonly"':NULL).'>'.$valore.'</textarea>
			';
		
			?>
        	</form>
			<style type="text/css">
            .voci_bbcode{
                display:block;
                float:left;
                margin:0 7px 0 0;
                background-color:#f5f5f5;
                border:1px solid #dedede;
                border-top:1px solid #eee;
                border-left:1px solid #eee;
            
                font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
                font-size:12px;
                line-height:130%;
                text-decoration:none;
                font-weight:bold;
                color:#565656;
                cursor:pointer;
                padding:5px 10px 6px 7px; /* Links */
            }
            .voci_bbcode{
                width:auto;
                overflow:visible;
                padding:4px 10px 3px 7px; /* IE6 */
            }
            .voci_bbcode{
                padding:5px 10px 5px 7px; /* Firefox */
            }
            .voci_bbcode{
                cursor:pointer;
                margin-left:4px;
                margin-right:4px;
            }
            </style>
			
			
            <?
            }
				
		return $campo;		
	}
		
	//campo file
	public function campofile($nome,$valore='',$id='',$classe='',$solo_lettura=''){

		if($id=='')$id=$nome;
		
		$campo='
		<input type="file" '.($id!=''?'id="'.$id.'" ':NULL).'name="'.$nome.'" value="'.$valore.'" '.($classe!=''?'class="'.$classe.'" ':NULL).'  '.($solo_lettura!=''?'disabled="disabled"':NULL).'/>
		';
		return $campo;		
	}
	
	
	//campo checkbox
	public function checkbox($nome,$valore='',$selezionata='',$id='',$classe='',$solo_lettura=''){
		if($id=='')$id=$nome;

		$campo='
		<input type="checkbox" '.($id!=''?'id="'.$id.'" ':NULL).'name="'.$nome.'" value="'.$valore.'" '.($selezionata!=''?'checked="checked"':NULL).' '.($classe!=''?'class="'.$classe.'" ':NULL).' '.($solo_lettura!=''?'disabled="disabled"':NULL).' />
		';
		return $campo;		
	}
	

	//campo radio
	public function radio($nome,$valore='',$selezionata='',$id='',$classe='',$solo_lettura=''){
		if($id=='')$id=$nome;

		$campo='
		<input type="radio" '.($id!=''?'id="'.$id.'" ':NULL).'name="'.$nome.'" value="'.$valore.'" '.($selezionata!=''?'checked="checked"':NULL).' '.($classe!=''?'class="'.$classe.'" ':NULL).' '.($solo_lettura!=''?'disabled="disabled"':NULL).' />
		';
		return $campo;		
	}
	
	

	//campo immagine
	public function immagine($url,$title='',$alt='',$altezza='',$larghezza='',$classe=''){
		$immagine='
		<img src="'.$url.'" alt="'.$alt.'" title="'.$title.'" '.($altezza!=''?'height="'.$altezza.'"':NULL).' '.($larghezza!=''?'width="'.$larghezza.'"':NULL).' '.($classe!=''?'class="'.$classe.'"':NULL).' />';
		
		return $immagine;		
	}
	
	
	//campo bottone
	public function bottone($nome,$valore){
		$bottone='
		<input type="button" name="'.$nome.'" value="'.$valore.'" />';
		return $bottone;
	}
	
	
	//campo select
	public function select($nome,$opzioni,$opzioni_selezionate='',$dimensione='',$selezione_multipla='',$solo_lettura=''){
			if(!is_array($opzioni)) $opzioni=explode(',,',$opzioni);
			$opzioni_selezionate=explode(',,',$opzioni_selezionate);
			
			$select='
			<select name="'.$nome.'" '.($dimensione!=''?'size="'.$dimensione.'"':NULL).' '.($selezione_multipla!=''?'multiple':NULL).''.(count($opzioni_selezionate)>1?'multiple':NULL).' '.($solo_lettura!=''?'disabled="disabled"':NULL).'>';
			
			for($i=0;$i<count($opzioni);$i++){
				$select.='
				<option value="'.$opzioni[$i].'" '.(in_array($opzioni[$i],$opzioni_selezionate)?'selected="selected"':NULL).'>';
				$i++;
				$select.=$opzioni[$i].'</option>';
				
			}
			
			$select.='
			</select>';
			
			return $select;		
	}
	
	public function data($nome,$valore='',$id='',$classe=''){
			if($id=='')$id=$nome;
        	$campo='
            <!-- css datepicker -->
			<style type="text/css">
			/* Layout helpers
			----------------------------------*/
			.ui-helper-hidden { display: none; }
			.ui-helper-hidden-accessible { position: absolute !important; clip: rect(1px 1px 1px 1px); clip: rect(1px,1px,1px,1px); }
			.ui-helper-reset { margin: 0; padding: 0; border: 0; outline: 0; line-height: 1.3; text-decoration: none; font-size: 100%; list-style: none; }
			.ui-helper-clearfix:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
			.ui-helper-clearfix { display: inline-block; }
			/* required comment for clearfix to work in Opera \*/
			* html .ui-helper-clearfix { height:1%; }
			.ui-helper-clearfix { display:block; }
			/* end clearfix */
			.ui-helper-zfix { width: 100%; height: 100%; top: 0; left: 0; position: absolute; opacity: 0; filter:Alpha(Opacity=0); }
			.ui-state-disabled { cursor: default !important; }
			/* states and images */
			.ui-icon { display: block; text-indent: -99999px; overflow: hidden; background-repeat: no-repeat; }
			/* Overlays */
			.ui-widget-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
			/* Component containers
			----------------------------------*/
			.ui-widget { font-family: Verdana,Arial,sans-serif; font-size: 1.1em; }
			.ui-widget .ui-widget { font-size: 1em; }
			.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button { font-family: Verdana,Arial,sans-serif; font-size: 1em; }
			.ui-widget-content { border: 1px solid #aaaaaa; background: #ffffff url(images/ui-bg_glass_75_ffffff_1x400.png) 50% 50% repeat-x; color: #222222; }
			.ui-widget-content a { color: #222222; }
			.ui-widget-header { border: 1px solid #aaaaaa; background: #cccccc url(images/ui-bg_highlight-soft_75_cccccc_1x100.png) 50% 50% repeat-x; color: #222222; font-weight: bold; }
			.ui-widget-header a { color: #222222; }
			/*
			 * http://docs.jquery.com/UI/Datepicker#theming
			 */
			.ui-datepicker { width: 17em; padding: .2em .2em 0; display: none; }
			.ui-datepicker .ui-datepicker-header { position:relative; padding:.2em 0; }
			.ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next { position:absolute; top: 2px; width: 1.8em; height: 1.8em; }
			.ui-datepicker .ui-datepicker-prev-hover, .ui-datepicker .ui-datepicker-next-hover { top: 1px; }
			.ui-datepicker .ui-datepicker-prev { 
			left:2px;
			margin-top:6px;
			font-size: 0px; line-height: 0%; width: 0px;
			border-top: 10px solid #cccccc;
			border-right: 15px solid #000000;
			border-bottom: 10px solid #cccccc;
			 }
			.ui-datepicker .ui-datepicker-next { 
			right:2px;
			margin-top:6px;
			font-size: 0px; line-height: 0%; width: 0px;
			border-top: 10px solid #cccccc;
			border-left: 15px solid #000000;
			border-bottom: 10px solid #cccccc;
			 }
			.ui-datepicker .ui-datepicker-prev-hover { left:1px; }
			.ui-datepicker .ui-datepicker-next-hover { right:1px; }
			.ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span { display: block; position: absolute; left: 50%; margin-left: -8px; top: 50%; margin-top: -8px;  }
			.ui-datepicker .ui-datepicker-title { margin: 0 2.3em; line-height: 1.8em; text-align: center; }
			.ui-datepicker .ui-datepicker-title select { font-size:1em; margin:1px 0; }
			.ui-datepicker select.ui-datepicker-month-year {width: 100%;}
			.ui-datepicker select.ui-datepicker-month, 
			.ui-datepicker select.ui-datepicker-year { width: 49%;}
			.ui-datepicker table {width: 100%; font-size: .9em; border-collapse: collapse; margin:0 0 .4em; }
			.ui-datepicker th { padding: .7em .3em; text-align: center; font-weight: bold; border: 0;  }
			.ui-datepicker td { border: 0; padding: 1px; }
			.ui-datepicker td span, .ui-datepicker td a { display: block; padding: .2em; text-align: right; text-decoration: none; }
			.ui-datepicker .ui-datepicker-buttonpane { background-image: none; margin: .7em 0 0 0; padding:0 .2em; border-left: 0; border-right: 0; border-bottom: 0; }
			.ui-datepicker .ui-datepicker-buttonpane button { float: right; margin: .5em .2em .4em; cursor: pointer; padding: .2em .6em .3em .6em; width:auto; overflow:visible; }
			.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current { float:left; }
			
			/* with multiple calendars */
			.ui-datepicker.ui-datepicker-multi { width:auto; }
			.ui-datepicker-multi .ui-datepicker-group { float:left; }
			.ui-datepicker-multi .ui-datepicker-group table { width:95%; margin:0 auto .4em; }
			.ui-datepicker-multi-2 .ui-datepicker-group { width:50%; }
			.ui-datepicker-multi-3 .ui-datepicker-group { width:33.3%; }
			.ui-datepicker-multi-4 .ui-datepicker-group { width:25%; }
			.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header { border-left-width:0; }
			.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header { border-left-width:0; }
			.ui-datepicker-multi .ui-datepicker-buttonpane { clear:left; }
			.ui-datepicker-row-break { clear:both; width:100%; font-size:0em; }
			
			/* RTL support */
			.ui-datepicker-rtl { direction: rtl; }
			.ui-datepicker-rtl .ui-datepicker-prev { right: 2px; left: auto; }
			.ui-datepicker-rtl .ui-datepicker-next { left: 2px; right: auto; }
			.ui-datepicker-rtl .ui-datepicker-prev:hover { right: 1px; left: auto; }
			.ui-datepicker-rtl .ui-datepicker-next:hover { left: 1px; right: auto; }
			.ui-datepicker-rtl .ui-datepicker-buttonpane { clear:right; }
			.ui-datepicker-rtl .ui-datepicker-buttonpane button { float: left; }
			.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current { float:right; }
			.ui-datepicker-rtl .ui-datepicker-group { float:right; }
			.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header { border-right-width:0; border-left-width:1px; }
			.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header { border-right-width:0; border-left-width:1px; }
			
			/* IE6 IFRAME FIX (taken from datepicker 1.5.3 */
			.ui-datepicker-cover {
				display: none; /*sorry for IE5*/
				display/**/: block; /*sorry for IE5*/
				position: absolute; /*must have*/
				z-index: -1; /*must have*/
				filter: mask(); /*must have*/
				top: -4px; /*must have*/
				left: -4px; /*must have*/
				width: 200px; /*must have*/
				height: 200px; /*must have*/
			}
			</style>            

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
			<script>
				$(function() {
					$( "#'.$id.'" ).datepicker();
				});
				</script>
			<input type="text" name="'.$nome.'" value="'.$valore.'" id="'.$id.'" class="'.$classe.'" />';
            
			$campo.="
            <script type=\"text/javascript\">
			/* Italian initialisation for the jQuery UI date picker plugin. */
			/* Written by Antonello Pasella (antonello.pasella@gmail.com). */
			jQuery(function($){
				$.datepicker.regional['it'] = {
					closeText: 'Chiudi',
					prevText: '&#x3c;Prec',
					nextText: 'Succ&#x3e;',
					currentText: 'Oggi',
					monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno',
						'Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
					monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu',
						'Lug','Ago','Set','Ott','Nov','Dic'],
					dayNames: ['Domenica','Luned&#236','Marted&#236','Mercoled&#236','Gioved&#236','Venerd&#236','Sabato'],
					dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'],
					dayNamesMin: ['Do','Lu','Ma','Me','Gi','Ve','Sa'],
					weekHeader: 'Sm',
					dateFormat: 'dd/mm/yy',
					firstDay: 1,
					isRTL: false,
					showMonthAfterYear: false,
					yearSuffix: ''};
				$.datepicker.setDefaults($.datepicker.regional['it']);
			});
			</script>
			
			";
			
			return $campo;
			}
	


}

/* Fine Form */


/* Inizio File */
class Nfile{
	
	
	//salva i file ricevuti da un form multipart
	public function salva($nome,$cartella,$dimensione=16000,$estensioni='',$sovrascrivere=''){
		if(substr($cartella, -1)!='/'){
			$cartella=$cartella.'/';
		}
		
		if($cartella[0]!='/'){
			$cartella='/'.$cartella;
		}

		if($dimensione=='') $dimensione=16000;
		
		//Se il file è stato passato
		if($_FILES[$nome]['name']!==''){
			$estensioniarray=explode(',,',strtolower($estensioni));
			$estensione = pathinfo($_FILES[$nome]['name']);
			$estensione=strtolower($estensione['extension']);
			
			if($estensioni=='' || in_array($estensione,$estensioniarray))
			{
				if(($_FILES[$nome]["size"] < ($dimensione*1000)))
				{
					if($_FILES[$nome]["error"] > 0){
					
						echo "Errore file: ".$_FILES[$nome]["error"]."<br />";
						return false;
						
					}else{
					
						$nomefileOG=str_replace(' ','-',str_replace("'","_",$_FILES[$nome]["name"]));
						$nomefile=$nomefileOG;
						$tipofile=$_FILES[$nome]["type"];
						$dimensionefile=($_FILES[$nome]["size"] / 1024);
						$nometemporaneofile=$_FILES[$nome]["tmp_name"];
						$cartella=$_SERVER['DOCUMENT_ROOT'].$cartella;
						
						if(!is_dir($cartella)){
								mkdir($cartella,0777);
						}

						//Creo un duplicato se il file non è da riscrivere							
						if($sovrascrivere!=='' || $sovrascrivere!=='si' || $sovrascrivere=='no'){
							$n=0;
							for($i=0;$n<1;$i++){
								if(file_exists($cartella.$nomefile)){
									$nomeseparato=explode('.',$nomefileOG);
									$nomefile=$nomeseparato[0].'_'.$i.'.'.$nomeseparato[1];
								}else{
									$n=1;
								}
							}
						}
						//}else{
						
	
							move_uploaded_file($_FILES[$nome]["tmp_name"],$cartella.$nomefile);
							
							return $nomefile;
						//}
					}
					
				}else{
					echo 'File troppo grande! Dimensione massima: '.$dimensione.'kb';
					return false;
				}
			
			}else{
				sort($estensioniarray);
				echo 'Tipo file non valido. Estensioni consentite: '.($estensioni!=''?'.'.implode(' .',$estensioniarray):NULL);
				return false;
			}
			
		}
	}
	
	public function cancella($file,$cartella){
					
		if($cartella[0]!=='/'){
			$cartella='/'.$cartella;
		}
		if(substr($file, -1)!=='/'){
			$cartella=$cartella.'/';
		}
		
		$file=$_SERVER['DOCUMENT_ROOT'].$cartella.$file;
		
		if(!is_file($file)){
			echo '<!-- Cancellazione file non riuscita. Non è un file -->';
		}else{
			if (file_exists($file)) {
				if (!unlink($file)) {
					return false;
				} else {
					return true;
				}
			}
		}

	}
	
	
	//ritorna true se il file esiste, false se non esiste
	public function esiste($file){
		if($file[0]!=='/') $file='/'.$file;
		if(file_exists($_SERVER['DOCUMENT_ROOT'].$file)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	
}

/* Fine File */


/* Inizio Cartelle */

class Ncartelle{
	
	// Controlla se esiste una cartella
	public function esiste($cartella,$crea='si'){
		if(substr($file, -1)!=='/'){
			$cartella=$cartella.'/';
		}
		if($cartella[0]!='/'){
			$cartella='/'.$cartella;
		}
		
		$cartella=$_SERVER['DOCUMENT_ROOT'].$cartella;
		if(!is_dir($cartella)){
			if($crea!=='' || $crea!=='no' || $crea=='si') mkdir($cartella,0777);
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	// Cancellazione cartella anche non vuota
	public function cancella($cartella){
	
		if(substr($cartella, -1)!='/'){
			$cartella=$cartella.'/';
		}
		if($cartella[0]!='/'){
			$cartella='/'.$cartella;
		}

		$cartella2=$_SERVER['DOCUMENT_ROOT'].$cartella;

		if (is_dir($cartella2)) { 
		$objects = scandir($cartella2); 
		foreach ($objects as $object) { 
			if ($object != "." && $object != "..") { 
				if (filetype($cartella2."/".$object) == "dir") $this->cancella($cartella."/".$object); else unlink($cartella2."/".$object); 
				} 
			} 
			reset($objects); 
			rmdir($cartella2);
		} 
	}
	
	
	//Mostra una riga per ogni file/cartella contenuta nella cartella passata
	public function contenuto($cartella){
		
		if(substr($cartella, -1)!='/'){
			$cartella=$cartella.'/';
		}
		
		if($cartella[0]!='/'){
			$cartella='/'.$cartella;
		}

		$cartella=$_SERVER['DOCUMENT_ROOT'].$cartella;
		
		if(is_dir($cartella)){

			// Opendir è la funzione per aprire la cartella
			$handle = opendir($cartella);
			
			// Ciclo la cartella
			while (false !== ($files = readdir($handle)))
			{
				// Stampo i file
				if ($files != '.' && $files != '..')
					echo $files.'<br />';
			}
		}
		
	}
	
	
	
}

/* Fine Cartelle */


/* Inizio Valida */
class Nvalida{
	
	//funzione generica per un controllo personalizzato
	public function do_reg($stringa, $regex){
		if (preg_match($regex, $stringa)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	//Funzione per la validazione multipla con uscita messaggio
	public function valida($tipo,$stringa,$lunghezza=''){
		if(!is_array($tipo)){
			$tipo=explode(',,',$tipo);
		}
		foreach($tipo as $t){
			if($this->$t($stringa)){
				if($lunghezza!=='' && strlen($stringa)<=$lunghezza){
					return TRUE;
				}elseif($lunghezza==''){
					return TRUE;
				}else{
					echo 'Massimo '.$lunghezza.' caratter'.($lunghezza==1?'e':'i').'!';
					return FALSE;
				}
				return TRUE;
			}else{
				echo 'Il campo deve essere di tipo: '.str_replace('_',' ',$t);
				return FALSE; 
			}
		}
		
	}
	
	//Validare un'email
	public function email($email){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			return FALSE;
		}else{
			return TRUE;
		}		
	}
	
	//Valida solo testo
	public function testo($stringa){
		if (preg_match("/^[a-zA-Z]$/", $stringa)){
			return TRUE;
		}else{
			return FALSE;
		}		
	}	
	
	//Validazione di stringa numerica
	public function numeri($stringa){
		if(is_numeric($stringa)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	//Validare lunghezza
	public function lunghezza($stringa,$lunghezza){
		if(strlen($stringa)<=$lunghezza){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	//Validare URL
	public function url($url){
		if (filter_var($url, FILTER_VALIDATE_URL)){
			return TRUE;
		}else{
			return FALSE;
		}		
	}
	
	//Validare indirizzo IP
	public function ip($ip){
		if (filter_var($ip, FILTER_VALIDATE_IP)){
			return TRUE;
		}else{
			return FALSE;
		}		
	}
	
	//Valida Codice Fiscale
	public function codice_fiscale($codice){
		if (preg_match("/^[a-z]{6}[0-9]{2}[a-z]{1}[0-9]{2}[a-z]{1}[0-9]{3}[a-z]{1}$/", $codice)){
			return TRUE;
		}else{
			return FALSE;
		}		
	}
	
	//Valida partita iva	
	public function iva($iva){
		if (preg_match("/^[0-9]{11}$/", $iva)){
			return TRUE;
		}else{
			return FALSE;
		}		
	}
	
	

}


/* Fine Valida */



/* Inizio Utili */

class Nutili{
	
	public function menu($voci){
		$voci=explode(',,',$voci);
		$Nurl=new Nurl();
		$menu='
		<style>
		.menu{
			list-style:none;
			overflow:hidden;
			width:100%;
			padding:1px;
		}
		.menu li{
			display:inline;	
		}
		.menu a{
		/*1. convertiamo i link da elementi inline a elemento di blocco, per potere poi specificare altezza/larghezza*/
		display:block;
		/*2. usiamo la proprietÃ Â  float per allineare gli elementi orizzontalmente*/
		float:left;
		/*3. specifichiamo una larghezza per link di stessa larghezza nel caso di questo esempio*/
		/*per link di larghezza relativa alla larghezza del testo, usare padding-right invece di width*/
		width:60px;
		/*4. e un altezza*/
		height:25px;
		/*5. aggiungiamo un spazio a sinistra tra ogni link*/
		margin-left:1px;
		/*6. e un spazio cuscinetto (padding) a sinistra tra il bordo e il testo dei link*/
		padding-left:15px;
		/*7. specifichiamo un colore di sfondo per i link*/
		background-color:#F0F7F7;
		/*8. e un bordo sinistro di 10px*/
		border-left:10px solid #C7E2E2;
		/*9. specifichiamo il tipo di carattere usato*/
		font-family:arial;
		/*10. e la misura del carattere*/
		font-size:10px;
		/*11. convertiamo i caratteri da minuscolo a maiuscolo*/
		text-transform:uppercase;
		/*12. togliamo la sottolineatura dei link aggiunta per default*/
		text-decoration:none;
		/*13. specifichiamo un colore per i link*/
		color:#437E7E;
		/*14. allineiamo verticalmente il testo*/
		line-height:25px;
		}
		a.attiva{
			background-color:grey;
			color:white;
		}
		</style>
		
		<ul class="menu">';
		
		for($i=0;$i<count($voci);$i++){
        	$menu.=
			'<li class="vocemenu"><a href="'.$voci[$i].'" class="'.($Nurl->nomepaginaoriginale()==$voci[$i]?"attiva":"avocemenu").'">';
			$i++;
			$menu.=$voci[$i].'</a></li>';
		}
				
		$menu.="
		</ul>
		<script>
		$(function(){  
		   $('.avocemenu').hover( function(){
			  $(this).fadeTo(100,0.5,function(){
				  $(this).css('background-color','grey');
				  $(this).css('color','white');
				  }).fadeTo(100,1);
		   },
		   function(){
			  $(this).fadeTo(100,0.5,function(){
				  $(this).css('background-color','');
				  $(this).css('color','');
				  }).fadeTo(100,1);
		   });
		});
		</script>
		";
		return $menu;
	}
	
		
	//ritorna il nome del browser
	public function browser($attiva_versione='',$estrai_solo_versione=''){
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'IE';
		} elseif (preg_match( '|Opera ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'Opera';
		} elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
				$browser_version=$matched[1];
				$browser = 'Firefox';
		} elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
				$browser_version=$matched[1];
				$browser = 'Safari';
		} else {
				// browser non riconosciuto!
			$browser_version = 0;
			$browser= 'Altro';
		}
		
		if($attiva_versione!='')$browser.=' '.$browser_version;
		
		if($estrai_solo_versione!='')$browser=$browser_version;
		
		return $browser;
	} 
	
	//ritorna il nome del sistema operativo
	public function sistema_operativo(){
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		if (strstr($useragent,'Win')) {
			$os='Windows';
		} else if (strstr($useragent,'Mac')) {
			$os='Mac';
		} else if (strstr($useragent,'Linux')) {
			$os='Linux';
		} else if (strstr($useragent,'Unix')) {
			$os='Unix';
		} else {
			$os='Altro';
		}
		
		return $os;
	}
	
	public function mobile($ipad=''){
 
		// ritorna true se almeno uno dei seguenti browser o dispositivi viene rilevato
	 	
		($ipad!=''?$ipad='ipad|':$ipad=NULL);
		
		$regex_match="/(".$ipad."nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
		$regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
		$regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";	
		$regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
		$regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
		$regex_match.=")/i";		
		return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
	}
	
	//crea un file log inserendo informazioni del visitatore.
	public function log_accessi($cartella='',$dati_aggiuntivi=''){

		$Ndata=new Ndate();	
			
		$ip = $_SERVER['REMOTE_ADDR']; //Indirizzo ip
		$agent = $_SERVER['HTTP_USER_AGENT']; //User agent come Firefox etc, e altre informazioni.
		$ref = $_SERVER['HTTP_REFERER']; // Referer, come sono arrivati al sito, con che link, dove lo hanno cliccato
		$date = $Ndata->nomegiorno().' '.$Ndata->giorno().' '.$Ndata->nomemese().' '.$Ndata->anno().' alle '.$Ndata->ora('','si'); //Data e giorno.
		if($cartella!='')$cartella.='/';
		$file = $cartella."Nlog.htm"; //Nome del file log.

		$open = fopen($file, "a+"); //Apri il file
			
		fwrite($open, "<p><b>Indirizzo IP:</b> " .$ip . "<br/>"); //stampa/scrivi indriizzo ip.
		fwrite($open, "<b>Referer:</b>". $ref . "<br/>"); //stampa/scrivi il referer.
		fwrite($open, "<b>UserAgent:</b>". $agent. "<br/>"); //stampa/scrivi lo useragent.
		fwrite($open, "<b>Data & Ora:</b>". $date. "<br/>"); //stampa/scrivi data e ora
		
		if($dati_aggiuntivi!=''){
			$dati=explode(',,',$dati_aggiuntivi);
			for($i=0;$i<count($dati);$i++){
				fwrite($open, "<b>".$dati[$i++].":</b>". $dati[$i]. "<br/>"); //aggiungi valori aggiuntivi al file
			}
		}
		fwrite($open, "</p>");
		
		fclose($open); // chiudi il file
	}
	
	
	//generatore di codici QR
	public function codiceqr($testo,$larghezza=150){
		$testo=urlencode($testo);
		return '<img src="https://chart.googleapis.com/chart?chs='.$larghezza.'x'.$larghezza.'&amp;cht=qr&amp;chl='.$testo.'&amp;choe=UTF-8" alt="codice QR">';
	}
	
	
	//ordinamento tramite drag&drop
	public function sposta_ordina($nome_lista,$pagina_invio_ordinamento,$lista,$asincrono=''){
		$Nform=new Nform();
		
		if(!is_array($lista)){
			$lista=explode(',,',$lista);
		}
		
		$tutti_id=NULL;
		for($i=0;$i<count($lista);$i++){
			$tutti_id[]=$lista[$i++];
		}
		$tutti_id=implode(',',$tutti_id);
		
		
		$lista_completa='
			<!-- Libreria JQuery JS e CSS -->
			<script type="text/javascript"
					src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.js"></script>
			<link rel="stylesheet"
				  href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css"/>
			<link rel="stylesheet"
				  href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/redmond/jquery-ui.css" type="text/css"/>
			<script type="text/javascript">
				$(document).ready(function() {
					$("#'.$nome_lista.'").sortable({
						update : function () {
							serial = $("#'.$nome_lista.'").sortable("toArray");
							';
							if($asincrono==''||$asincrono=='si'){
							$lista_completa.='
								$.ajax({
									url: "'.$pagina_invio_ordinamento.'",
									type: "POST",
									data: "'.$nome_lista.'="+serial,
									error: function(){
										alert("Ci sono errori con lo spostamento/ordinamento AJAX");
									},
									success: function(){
									}
								});
								';
							}else{
								$lista_completa.='$("#'.$nome_lista.'_ordinamento").val(serial);';
							}
							$lista_completa.='
						}
					});
				});
			</script>
			';
		$lista_completa.='
			<ul id="'.$nome_lista.'">';
			for($i=0;$i<count($lista);$i++){
				$lista_completa.='
				<li style="list-style:none; border:solid 1px; padding:3px; margin:5px; margin-left:-36px; cursor:move;" id="'.$lista[$i++].'">'.$lista[$i].'</li>';
			}
		$lista_completa.='
			</ul>
			';
			
			//Aggiungo campo nascosto con tutti gli id ordinati e aggiornati per invio da form
			if($asincrono=='' || $asincrono=='si'){
			}else{
				$lista_completa.=$Nform->campohidden($nome_lista.'_ordinamento',$tutti_id);
			}
			
			return $lista_completa;
			
	}
	
	public function salva_sposta_ordina($nome_lista,$nome_tabella_db,$campo_id='ID',$campo_posizione='posizione'){
		if($campo_id=='')$campo_id='ID';
		if($campo_posizione=='')$campo_posizione='posizione';
		
		if(isset($_POST[$nome_lista.'_ordinamento'])) $_POST[$nome_lista]=$_POST[$nome_lista.'_ordinamento'];
		
		if(!is_array($_POST[$nome_lista])){
			$_POST[$nome_lista]=explode(',',$_POST[$nome_lista]);
		}
			print_r($_POST[$nome_lista]);	
		foreach ($_POST[$nome_lista] as $posizione => $id) {
			$query = "UPDATE ".$nome_tabella_db." SET ".$campo_posizione." = $posizione WHERE ".$campo_id." = $id";
			mysql_query($query) or die ("Problema con query salvataggio ordinamento lista:".$nome_lista.'. '.mysql_error());
		}
	}
	
	
	public function aggiungi_font($nome_font_google,$tags_aggiunta_font='body'){
		echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$nome_font_google.'">';
		
		$tags=explode(',,',$tags_aggiunta_font);
		echo '<style type="text/css">
		';
		foreach($tags as $t){
		echo $t.' {
			font-family: "'.str_replace('+',' ',$nome_font_google).'"
		}
		';
		}
		echo '</style>';
	}
	
	public function ip(){
		return $_SERVER['REMOTE_ADDR']; //Indirizzo ip
	}	
			
			
}



/* Inizializzazione classi
   Togliere il commento seguente per inizializzare tutte le classi o spostare fuori dal commento le singole classi da inizializzare.
   I nomi delle variabili di inizalizzazione a cui sono associate le relative classi sono gli stessi (es. Classe Nredirect sarà $Nredirect)
   */
   

$Nimpostazioni=new Nimpostazioni();
$Nheadersent=new Nheadersent();
$Nredirect=new Nredirect();
$Nurl=new Nurl();
$Ncookie=new Ncookie();
$Nsessioni=new Nsessioni();
$Narray=new Narray();
$Nstringhe=new Nstringhe();
$Nnumeri=new Nnumeri();
$Ndb=new Ndb();
$Ndate=new Ndate();
$Ncart=new Ncart();
$Nemail=new Nemail();
$Naccesso=new Naccesso();
$Nform=new Nform();
$Nfile=new Nfile();
$Ncartelle=new Ncartelle();
$Nvalida=new Nvalida();
$Nutili=new Nutili();


/* Fine Inizializzazione classi */


/*
<!--NEW-FRAMEWORK e' stato creato da Norman Russo sotto licenza Apache 2.0-->


<!--
*-*-*-*-*-*- Libreria jQuery per implementazione chiamate asincrone e altre funzioni ajax-jquery - SPOSTARE TRA I TAG TITLE DELLA PAGINA -*-*-*-*-*-*
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
-->

*/

?>