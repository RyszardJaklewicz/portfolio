<?php
include 'array_data.php';
//print"<PRE>";
//Możliwość printowania array na ekran w celach diagnostycznych
//print_r($probki_kodu);
//print"</PRE>";
?>
<!DOCTYPE HTML> 
<html lang='pl'> 
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
	<title>Ryszard Jaklewicz - portfolio</title>
	<link rel='stylesheet' href='css/style_callisto.css'>
	<link rel='stylesheet' href='css/style_all.css'>
	<!-- Bootstrap CSS -->
	<!--
    <link href="bootstrap-5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	-->
	
</head>
<body>

<?php
include 'header.php';
?>

<button id="myBtn" style="visibility: hidden;">Open Modal</button>
<p></p>
<?php
foreach ($probki_kodu as $k => $v) {
if($probki_kodu[$k]['show']=="1"){
if(!empty($probki_kodu[$k]['name_image_big'])){
	
/**
	element array name_image_big w ktorym przechowywana jest nazwa pliku duzego zrzutu danego serwisu www
	moze miec postac np:
	'name_image_big'=>'bazy_danych_wordpress_zrzut_www_duzy_jpg'
	Obecnosc kropki przed jpg powoduje bledy java script.
	Zamieniamy na kropke
*/
$name_image_big = str_replace("_jpg", ".jpg", $probki_kodu[$k]['name_image_big']);
?>
	
<!-- 
The Modal 
W tej wersji div modalny nie jest używany
-->
<div id="modal_contener_<?php print($probki_kodu[$k]['name_image_big']); ?>" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="close_<?php print($probki_kodu[$k]['name_image_big']); ?>" class="close">x</span>
    <p class="title_modal_div"><?php print($probki_kodu[$k]['tytul']); ?></p>
	<img src="pliki_serwisu/zrzuty_wykonanych_serwisow_www_duze/<?php print($name_image_big); ?>" width="700"></img>
	<br>
	Lorem ipsum.....<br>
  </div>
</div>

<?php
}//END if(!empty($probki_kodu[$k]['name_image_big'])){
?>
	
<?php print($probki_kodu[$k]['nowe_linie_przed_tytulem']); ?>
<div class="div_nadrzedny"  style="display:block;">

<span class="tytul_nazwa_wykonanego_serwisu">
	<div class="div_tytul_nazwa_wykonanego_serwisu">
	<?php echo "<strong>".$probki_kodu[$k]['tytul']."</strong><br />"; ?>
	</div>
</span>

<?php
if($probki_kodu[$k]['item']==1){
?>
<p></p>

<div class="opis_pod_tytulem">
<a href="system_callisto_procesowanie_spraw.php">
<img class="odstep_lewo" src="<?php print($probki_kodu[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;margin-left:15px;" width="10" height="10" border="0">
Procesowanie spraw kredytowych
</a>
<p></p>
<a href="system_callisto_zarzadzanie_placowkami.php">
<img class="odstep_lewo" src="<?php print($probki_kodu[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;margin-left:15px;" width="10" height="10" border="0">
Zarządzanie placówkami
</a>
</div>

<?php	
}//END if($probki_kodu[$k]['item']==1){
?>
<p></p>

<!-- Opis rozbudowany nad grafika w div left -->
<div class="opis_pod_tytulem" style="margin-left:15px;border:0px solid blue;">
 
 <?php
		$probki_kodu[$k]['tytul_opisu'];
		$probki_kodu[$k]['link_opisu'];
		$probki_kodu[$k]['opis'];
		
		/**  Istnieje tytul opisu oraz link opisu */
		if( !empty($probki_kodu[$k]['link_opisu']) && !empty($probki_kodu[$k]['tytul_opisu'])  ){
			
			?><a href="<?php print($probki_kodu[$k]['link_opisu']); ?>">
			
			<img src="<?php print($probki_kodu[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0">
			
			<?php print($probki_kodu[$k]['tytul_opisu']); ?>
			</a>
			<br><br>
			<?php
		}
		
		/** Istnieje tytul opisu bez linku*/
		if( empty($probki_kodu[$k]['link_opisu']) && !empty($probki_kodu[$k]['tytul_opisu'])  ){
			
			?><img src="<?php print($probki_kodu[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0"><?php
			print("<img src=''>".$probki_kodu[$k]['tytul_opisu']."<br><br>");
			
		}
		?>
	
<?php print($probki_kodu[$k]['opis']); ?>
<div style="font-size:14px;">

<?php
if( $probki_kodu[$k]['code_position']=='leady_fb') {
?>

<pre>
	$SQL = "SELECT
              m.id,
              m.cli_first,
              m.cli_first_2,
              m.cli_last,
              m.cli_pesel,
              m.cli_do,
              m.cli_address,
              m.cli_house_no,
              m.cli_flat_no,
              m.cli_postal_code,
              m.cli_city, 
              m.cli_mobile_home,
              m.cli_email,
              m.kredytok_id,
              m.loanme_id,
              m.proficredit_id,
              m.cr_sales_channel
                        FROM multiwniosek m
                        WHERE (m.kredytok_id IS NULL || m.loanme_id IS NULL || m.proficredit_id IS NULL) AND m.cr_sales_channel='lead' AND m.cr_insert_date > '".$data."'";

$go = @mysql_query($SQL);
if(!$go){
    @mail("jaklewicz.r@gmail.com", "Błąd - automatyczne wysyłanie leadów. Nie powiódł się odczyt danych multiwniosku.", 
	"Błąd - automatyczne wysyłanie leadów. Nie powiódł się odczyt danych multiwniosku.\n\n");
    die('Nie powiódł się odczyt danych multiwniosku. Koniec pracy.');
}else{
    print("\n\n");
    $licznik=0;
    while($ass = mysql_fetch_assoc($go)){
        $licznik++;
        print("\nlicznik: ".$licznik."\n");
        
        $array_zawartosc_leada = array(
            'cli_first' 		=> $ass['cli_first'],
            'cli_last' 			=> $ass['cli_last'],
            'cli_pesel' 		=> $ass['cli_pesel'],
            'cli_postal_code' 	=> $ass['cli_postal_code'],
            'cli_email' 		=> (!empty($ass['cli_email'])?$ass['cli_email']:'brak@maila.com'),
            'cli_mobile_home' 	=> (!empty($ass['cli_mobile_home'])?$ass['cli_mobile_home']:'123456789')
        );
		
</pre>
<?php
}

if( $probki_kodu[$k]['code_position']=='clas_smeskom') {
?>
<pre>
/**
 * Klasa Smeskom
 * do obsługi web-serwisu smeskom.pl
 * Szczegóły i dokumentacja web-serwisu są dostępne tutaj: 
 * @link http://www.smeskom.pl/api
 * 
 * @author Krzysztof Wiśniewski
 * @author Ryszard Jaklewicz
 * @copyright bazy.danych
 * @version 1.01
 */
class Smeskom {
	
	/**
     * Instancja klasy
     */
	protected static $__oInstance;
	
	/**
	 * Login do web-serwisu
	 *
	 * @var string
	 * @access private
	 */
    private $login = '';
    
    /**
     * Hasło do web-serwisu:
     *
     * @var string
     * @access private
     */
    private $password = '';

    /**
     * Adres web-serwisu
     *
     * @var string
     * @access private
     */
    private $address = '';

</pre>
(...)
<pre>
protected function sendRequest($xml_request){
    	
    	$result = true;
    	$arr_response = array();
    	
        if(!$this->isConfigured()){
            $this->addWarning('Nie podano parametrów niezbędnych do komunikacji z web-serwisem.');
            $result = false;    
        }       	
    	
        if($result){
        	/**
        	 * Zapamiętaj wysyłany xml w globalnej zmiennej:
        	 */
        	$this->outgoingXML = $xml_request;
        	
        	/**
        	 * Połącz i wyślij:
        	 */
	        $ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->address.':'.$this->port.'/smesx');
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "xml=".urlencode($xml_request));
			$ret = curl_exec($ch);
</pre>

<?php
}

if( $probki_kodu[$k]['code_position']=='js_yui_1') {
?>
<pre>
komentarze:{
		dane:[],
		dodaj:function(){
			if(EDYCJA!=1){alert('Brak uprawnień.');return false;}
			if(YAHOO.DB.placowka.isEmpty()) {alert("Najpierw zapisz placowkę.");return false;}
			createBut('button_save_agency_comment', 'Zapisz komentarz', 'div_button_save_agency_comment', function(){
				if(YAHOO.DB.placowka.isEmpty()) {alert("Najpierw zapisz placówkę.");return false;}
				YAHOO.DB.dlg.show();
				doRequest('feeder_placowki.php',[{n:'add_comment',v:1},{n:'komentarz',v:$('komentarz_placowka').value},{n:'id',v:$('IDPlacowki').value}],function(result){
					$('komentarz_placowka').value='';
					SetDisplay(false,'div_dodaj_komentarz_placowka');
					YAHOO.DB.placowka.komentarze.pobierz();
				},'POST',function(){});
			});
</pre>
<?php
}



if( $probki_kodu[$k]['code_position']=='python') {
?>
<pre>
#!/usr/bin/env python
# -*- coding: utf-8 -*-
import MySQLdb
import linecache #biblioteka do pobierania danych z plikow
import time
import os
import sys
import RPi.GPIO as GPIO
from decimal import *
import atexit
import signal
import subprocess

#TRYB GPIO BCM
GPIO.setmode(GPIO.BCM)

#Piny GPIO tryb WYJSCIA

GPIO.setup(2, GPIO.OUT)
GPIO.setup(3, GPIO.OUT)
GPIO.setup(4, GPIO.OUT)
GPIO.setup(14, GPIO.OUT)
GPIO.setup(15, GPIO.OUT)
GPIO.setup(17, GPIO.OUT)
GPIO.setup(18, GPIO.OUT)
GPIO.setup(22, GPIO.OUT)
GPIO.setup(23, GPIO.OUT)

#os.system("python /home/pi/start.py")

#Obsluga przerwania wykonywania programu przez klawisze ctrl+C
CONTROL_C = False
def program_exit():
    # You may do some clean-up here, but you don't have to.
    print "\n"
    print "Exiting application... Thnxs"
    GPIO.cleanup()
    subprocess.call('setterm -cursor on', shell=True)
    subprocess.call('spincl -ib', shell=True) 
    print " "
	
	i=0
	while True:
		i=i+1;
		
		db = MySQLdb.connect("127.0.0.1", "root", "era123zx", "pomiary_elektryczne")
		cursor = db.cursor()       
		cursor.execute("SELECT * FROM stan_biezacy_domu WHERE stan_biezacy_id = 1")
		for rec in cursor.fetchall():
</pre>

<?php
}

if( $probki_kodu[$k]['code_position']=='jquery_zend') {
?>
<pre>
var komunikaty_do_tooltip_bledy = {
			wstaw_komunikaty_do_tooltip_alarmy : function() {
				/* Obliczenie ile jest elementow w obiekcie */
				var ilosc_elementow_w_obiekcie = Object.keys(komunikaty_do_tooltip_bledy).length;
				if(ilosc_elementow_w_obiekcie>1){
					/* Istnieja komunikaty błędu należy je wyświetlić */
					$("#div_tooltip_lista_alarmow").show( "fold", 500 );
					/* 
					* W celu utworzenia zmiennej jaka zostanie podstawiona do  $("#tooltip_alarmy_tekst").html
					* wykonać iteracje po obiekcie
					*/
					var string_do_tooltip_bledy = '';
					for (i in komunikaty_do_tooltip_bledy){
						/*  Element obiektu będący funkcja będzie miał długośc length=0 jest on pomijany */
						if(komunikaty_do_tooltip_bledy[i].length != 0){
							string_do_tooltip_bledy += komunikaty_do_tooltip_bledy[i]+'<br>';
						}
					}
					$("#tooltip_alarmy_tekst").html(string_do_tooltip_bledy);
				}else{
					$("#div_tooltip_lista_alarmow").hide( "fold", 500 );
				}
			}//END funkcja w obiekcie
	
}
</pre>
(...)
<pre>
$.ajax({
			type: "POST",
			url: "./application/application/rozpocznijsprawdzaniewszystkichmodeli",
			async: false,
			cache: true,
			dataType: 'json',
			data:  {zmienna_post_przekaz_ajax: zmienna_post_ajax },
			success: function(json_odpowiedz_akcji){
				$("#info").html(json_odpowiedz_akcji.comment);
				if(json_odpowiedz_akcji.czy_powodzenie != true){
					$("#info").css("color", "red");
					$("#kontrolka_probkowanie").css("background-color", "red");
					$("#kontrolka_probkowanie").show();
					var string_do_info = "Błąd !!!<br>";
					string_do_info += json_odpowiedz_akcji.warnings;
					$("#info").html(string_do_info);
					$("#liczby_pomiaru_cyfrowego").html("err");
					$("#liczby_pomiaru_cyfrowego_amperomierz").html("err");
					idz_dalej = false;
				}else{
					
					/* Powodzenie  - następuje pobranie danych z JSON */
					/*
					* Wstawienie wartości z JSON konfiguracja do odpowiednich pól odpowiednich formularzy w module konfiguracja.
					* UWAGA: jquery pozwala na uzycie polecenia wzgledem danego elementu nawet jeśli ten element
					* nie istnieje w DOM (nie jest generowany błąd js)
					*/
					$("input[name='pole_ogolne1']").val(json_odpowiedz_akcji.konfiguracja.pole_ogolne1);
					$("input[name='pole_ogolne2']").val(json_odpowiedz_akcji.konfiguracja.pole_ogolne2);
					$("input[name='pole_ogolne3']").val(json_odpowiedz_akcji.konfiguracja.pole_ogolne3);
</pre>
<?php
}

if( $probki_kodu[$k]['code_position']=='zend_controler'){
?>
<pre>
/**
 * Description of PomiaryElektryczneController
 * @author Ryszard Jaklewicz
 */
//module/Pomiary/src/Pomiary/Controller/PomiaryController.php:

namespace PomiaryElektryczne\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;
use PomiaryElektryczne\Model\PomiaryElektryczne;   

class PomiaryElektryczneController extends AbstractActionController {

	/** Funkcja która zwróci dane do widoku przy sciezce public/pomiaryelektryczne 
	* czyli przy akcji index
	*/
    public function indexAction() {
    }
	
	public function PobierzBiezacePomiary(){
        //if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->pomiaryelektryczneTable = $sm->get('PomiaryElektryczne\Model\PomiaryElektryczneTable');
        //}
        return $this->pomiaryelektryczneTable;
    }
	
	/**
	* Akcja uruchamiana po kliknieciu buttona "Pomiary start"
	*
	* Nalezy uruchomic akcje: konfiguracja/konfiguracja/zapiszkonfiguracje
	*/
	public function odczytPomiaryBiezaceAjaxAction(){
	
		$result = true;
		$warnings = Array();
		$comment = Array();
		
		$request = $this->getRequest();
		/**
		* Testy kontroli z kad przyszło wywołanie akcji 
		* http://localhost/_USLUGI_INFORMATYCZNE/portfolio/_aplikacja_jacht_zend/public/pomiaryelektryczne/odczytpomiarybiezaceajax
		*/
			
		$is_xmlhttprequest = 1;
		/**
		* Jeśli żadanie ($request) nie jest typu Ajax
		*/
        if(!$request->isXmlHttpRequest()){
            //wywołanie akcji nie nastąpiło przez Ajax
            $is_xmlhttprequest = 0;

</pre>
<?php
}

if( $probki_kodu[$k]['code_position']=='mysql_trigger'){
?>
<pre>
CREATE TRIGGER `trigger_ch_credits_before_update` BEFORE UPDATE ON `ch_credits`
 FOR EACH ROW BEGIN
	IF NEW.cr_status != OLD.cr_status 
		AND NEW.cr_status IN ('splacona','splacona_cz','odstapienie','rezygnacja','usunieta')
		AND NEW.cr_direct_debit = 1
	THEN
		SET NEW.cr_direct_debit_state = CASE NEW.cr_direct_debit_state			
			WHEN 2 THEN 6
			WHEN 3 THEN 7
			WHEN 4 THEN 7
			ELSE 1
		END;
	END IF;
	IF NEW.cr_status != OLD.cr_status AND NEW.cr_status = 'uruchomiona' AND NEW.cr_ur = 1 AND IFNULL(NEW.cr_ur_id, 0) = 0 THEN
		SET NEW.cr_ur_id = NEW.cr_id;
	END IF;
END
</pre>
(...)
<pre>
CREATE TRIGGER `trigger_ch_repayments_after_insert` AFTER INSERT ON `ch_repayments`
 FOR EACH ROW BEGIN
	IF NEW.payment_type = 'gotowka' THEN 
		INSERT INTO ch_cash_transactions (
			transaction_repayment_id,
			transaction_type,
			transaction_cr_id,
			transaction_agn_id,
			transaction_amount,
			transaction_date,
			transaction_insert_date,
			transaction_insert_user
		) VALUES (
			NEW.payment_id,
			'in',
			NEW.payment_cr_id,
			(SELECT IDPlacowki FROM ekf_Uzytkownicy WHERE IDUzytkownika = NEW.payment_insert_user),
			NEW.payment_amount,
			NEW.payment_date,
			NEW.payment_insert_date,
			NEW.payment_insert_user
		);
	END IF;
 END
</pre>
<?php
}

if( $probki_kodu[$k]['code_position']=='css'){
?>
<pre>
@media (min-width: 1100px) {
	.div_nadrzedny {width:1050px;}
	.div_lewy {width:30%;}
	.div_prawy {width:68%;float:right;}
}
	
@media (max-width: 1100px) and (min-width: 1000px) {
	.div_nadrzedny {width:950px;}
	.div_lewy {width:35%;}
	.div_prawy {width:62%;float:right;}
}

@media (max-width: 1000px) and (min-width: 800px) {
	.div_nadrzedny {width:750px;}
	.div_lewy {width:40%;}
	.div_prawy {width:58%;float:right;}
}

@media (max-width: 800px) and (min-width: 500px) {
	.div_nadrzedny {width:450px;}
	.div_lewy {width:100%;float:left;}
	.div_prawy {width:100%;display:inline-block;}
	.tytul_nazwa_wykonanego_serwisu{font-size:0.8em;}
	.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 90%; /* Could be more or less, depending on screen size */
	}
}

/* Jesli ekran ma 500px lub mniej */
@media (max-width: 500px) {
	.div_nadrzedny {width:90%;}
	.div_lewy {width:100%;float:left;}
	.div_prawy {width:100%;display:inline-block;}
	.tytul_nazwa_wykonanego_serwisu{font-size:0.8em;}
	/* Modal Content/Box */
	.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
	}
}
</pre>
<?php
}



if( $probki_kodu[$k]['code_position']=='symfony_controler'){
?>
<pre>

/**
 * invoice_vat actions.
 *
 * @package    alr_crm
 * @subpackage invoice_vat
 * @author     Ryszard Jaklewicz
 */
class invoices_vatActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  
  public function executeInvoices_list(sfWebRequest $request)
  {
	  //Zmienna przesylana z odsylaczy w kodzie porcjowania
	  $this->page = $this->getRequestParameter('page');
	  
	  if( $this->getRequestParameter('pwz') != "")
	  {
	   $this->szukana_fraza = $this->getRequestParameter('pwz');
	  }
	  
	  $this->szukana_fraza = $this->getRequestParameter('pwz');
	  
	  //Zmienna przeslana przez form szukaj
	  $this->wyslano_dane_formularza = $this->getRequestParameter('wyslano_dane_formularza');
	  
		if($this->wyslano_dane_formularza == "1")
		{
		$this->szukana_fraza = $this->getRequestParameter('search');
		}
	  
	  //############ Kod zwiazany z porcjowaniem listy wszystkich faktur
		
		//Sprawdzenie ile rekordow istnieje
		$connection = Doctrine_Manager::getInstance()->connection();
		$pytanie_sql = "select COUNT(*) from alr_invoice_vat";
		$statement = $connection->prepare($pytanie_sql);
		$statement->execute();
		$this->tablica_faktury_wszystkie_ilosc = $statement->fetchAll(PDO :: FETCH_NUM);
		$this->ilosc_faktur_wszystkich = $this->tablica_faktury_wszystkie_ilosc[0][0];
		
		$this->ile = "200";
		//Ilosc rekordow dzielona na liczbe pozycji jakie maja byc wyswietlone na stronie (zaokraglenie)
		$this->podstron_widok_faktury=ceil($this->ilosc_faktur_wszystkich / $this->ile); 
		$this->limit = $this->page*$this->ile;
		
		//############ Koniec kodu zwiazanego z porcjowaniem listy wszystkich faktur
		
		//Pobranie wszystkich faktur zapytanie wykonywane tylko gdy nie wyslano form szukaj
		if($this->wyslano_dane_formularza == "")
		{
		$connection = Doctrine_Manager::getInstance()->connection();
		$pytanie_sql = "select * from alr_invoice_vat LIMIT $this->limit,$this->ile";
		$statement = $connection->prepare($pytanie_sql);
		$statement->execute();
		$this->tablica_faktury_wszystkie = $statement->fetchAll(PDO :: FETCH_ASSOC);
		}
		
		//Zapytanie wykonywane gdy wyslano form szukaj
		if( ($this->wyslano_dane_formularza == "1") AND ($this->szukana_fraza != "") OR ($this->getRequestParameter('pwz') != "") )
		{
				//Zapytanie wykonywane gdy wyslano formularz search
				$connection = Doctrine_Manager::getInstance()->connection();
				$pytanie_sql = "select * from alr_invoice_vat WHERE 
				id_uzytkownika like '%$this->szukana_fraza%' 
				OR faktura_pwz like '%$this->szukana_fraza%' 
				OR odbiorca like '%$this->szukana_fraza%' 
				OR odbiorca_nip like '%$this->szukana_fraza%' 
				OR data_wystawienia like '%$this->szukana_fraza%' 
				OR do_zaplaty like '%$this->szukana_fraza%'
				ORDER BY id_faktura";
				$statement = $connection->prepare($pytanie_sql);
				$statement->execute();
				$this->tablica_faktury_wszystkie = $statement->fetchAll(PDO :: FETCH_ASSOC);
			
		//End if($this->wyslano_dane_formularza == "1")	
		}
</pre>
<?php
}
?>



</div>
<p></p>
<img  src="<?php print($probki_kodu[$k]['link_grafiki']); ?>" border="0" class="image_callisto_all_article">
 
</div><!-- END <div class="opis_pod_tytulem" style="margin-left:15px;border:1px solid blue;"> -->

<br>
</div>

<?php

}
	
//END foreach ($probki_kodu as $k => $v) {
}

include 'footer.php';
?>
</body>
</html>