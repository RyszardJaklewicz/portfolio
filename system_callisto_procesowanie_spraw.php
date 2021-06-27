<?php
include 'array_data.php';
//print"<PRE>";
//Możliwość printowania array na ekran w celach diagnostycznych
//print_r($opis_callisto_do_portfolio_procesowanie_spraw);
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
<!-- <a href="index.php">Home</a> -->
<p></p>
<?php
foreach ($opis_callisto_do_portfolio_procesowanie_spraw as $k => $v) {
if($opis_callisto_do_portfolio_procesowanie_spraw[$k]['show']=="1"){
if(!empty($opis_callisto_do_portfolio_procesowanie_spraw[$k]['name_image_big'])){
	
/**
	element array name_image_big w ktorym przechowywana jest nazwa pliku duzego zrzutu danego serwisu www
	moze miec postac np:
	'name_image_big'=>'bazy_danych_wordpress_zrzut_www_duzy_jpg'
	Obecnosc kropki przed jpg powoduje bledy java script.
	Zamieniamy na kropke
*/
$name_image_big = str_replace("_jpg", ".jpg", $opis_callisto_do_portfolio_procesowanie_spraw[$k]['name_image_big']);
?>
	
<!-- 
The Modal 
W tej wersji div modalny nie jest używany
-->
<div id="modal_contener_<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['name_image_big']); ?>" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="close_<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['name_image_big']); ?>" class="close">x</span>
    <p class="title_modal_div"><?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['tytul']); ?></p>
	<img src="pliki_serwisu/zrzuty_wykonanych_serwisow_www_duze/<?php print($name_image_big); ?>" width="700"></img>
	<br>
	Lorem ipsum.....<br>
  </div>
</div>

<?php
}//END if(!empty($opis_callisto_do_portfolio_procesowanie_spraw[$k]['name_image_big'])){
?>
	

<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['nowe_linie_przed_tytulem']); ?>
<div class="div_nadrzedny"  style="display:block;">

<?php
if(1==1){
?>

<span class="tytul_nazwa_wykonanego_serwisu">
	<div class="div_tytul_nazwa_wykonanego_serwisu">
	<?php  echo "<strong>".$opis_callisto_do_portfolio_procesowanie_spraw[$k]['tytul']."</strong><br />"; ?>
	</div>
</span>
<?php
}
?>

<?php
if($opis_callisto_do_portfolio_procesowanie_spraw[$k]['item']==1){
?>
<p></p>

<div class="opis_pod_tytulem">
<a href="system_callisto_procesowanie_spraw.php">
<img class="odstep_lewo" src="<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;margin-left:15px;" width="10" height="10" border="0">
Procesowanie spraw kredytowych
</a>
<p></p>
<a href="system_callisto_zarzadzanie_placowkami.php">
<img class="odstep_lewo" src="<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;margin-left:15px;" width="10" height="10" border="0">
Zarządzanie placówkami
</a>
</div>

<?php	
}//END if($opis_callisto_do_portfolio_procesowanie_spraw[$k]['item']==1){
?>

<p></p>

<!-- Opis rozbudowany nad grafika w div left -->
<div class="opis_pod_tytulem" style="margin-left:15px;border:0px solid blue;">
 
 <?php
		
		$opis_callisto_do_portfolio_procesowanie_spraw[$k]['tytul_opisu'];
		$opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_opisu'];
		$opis_callisto_do_portfolio_procesowanie_spraw[$k]['opis'];
		
		/**  Istnieje tytul opisu oraz link opisu */
		if( !empty($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_opisu']) && !empty($opis_callisto_do_portfolio_procesowanie_spraw[$k]['tytul_opisu'])  ){
			
			
			?><a href="<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_opisu']); ?>">
			
			<img src="<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0">
			
			<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['tytul_opisu']); ?>
			</a>
			<br><br>
			<?php
		}
		
		/** Istnieje tytul opisu bez linku*/
		if( empty($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_opisu']) && !empty($opis_callisto_do_portfolio_procesowanie_spraw[$k]['tytul_opisu'])  ){
			
			?><img src="<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0"><?php
			print("<img src=''>".$opis_callisto_do_portfolio_procesowanie_spraw[$k]['tytul_opisu']."<br><br>");
			
		}
		?>
		<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['opis']); ?>
		
		<p></p>
		<img  src="<?php print($opis_callisto_do_portfolio_procesowanie_spraw[$k]['link_grafiki']); ?>" border="0" class="image_callisto_all_article">
 
</div><!-- END <div class="opis_pod_tytulem" style="margin-left:15px;border:1px solid blue;"> -->

<br>
</div>
<?php
}
	
//END foreach ($opis_callisto_do_portfolio_procesowanie_spraw as $k => $v) {
}

include 'footer.php';
?>
</body>
</html>