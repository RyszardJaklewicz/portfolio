<?php
include 'array_data.php';

//print"<PRE>";
//print_r($www_i_programy_do_portfolio);
//print"</PRE>";
?>

<!DOCTYPE HTML> 
<html lang='pl'> 
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
	<title>Ryszard Jaklewicz - portfolio</title>
	<link rel='stylesheet' href='css/style.css'>
	<link rel='stylesheet' href='css/style_all.css'>
</head>
<body>

<?php
include 'header.php';
?>


<!-- Button do Diva modalnego -->

<button id="myBtn" style="visibility: hidden;">Open Modal</button>


<!-- Modal test -->
<!-- The Modal -->

<div id="myModal" class="modal" style="visible:none;">
  <div class="modal-content">
    <span class="close">x</span>
    <p>Some text in the Modal..</p>
	<img src="pliki_serwisu/zrzuty_wykonanych_serwisow_www_duze/ronox_serwis_zrzut_www_duzy.jpg" width="400"></img>
  </div>
</div>
		
<?php
foreach ($www_i_programy_do_portfolio as $k => $v) {
if($www_i_programy_do_portfolio[$k]['show']=="1"){
if(!empty($www_i_programy_do_portfolio[$k]['name_image_big'])){
	
/**
	element array name_image_big w ktorym przechowywana jest nazwa pliku duzego zrzutu danego serwisu www
	moze miec postac np:
	'name_image_big'=>'bazy_danych_wordpress_zrzut_www_duzy_jpg'
	Obecnosc kropki przed jpg powoduje bledy java script.
	Zamieniamy na kropke
*/
	
$name_image_big = str_replace("_jpg", ".jpg", $www_i_programy_do_portfolio[$k]['name_image_big']);

?>
	
<!-- Div modalny cała jego zawartość tworzona jest dynamicznie na podstawie zawartosci array patrz array_data.php -->
<div id="modal_contener_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="close_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>" class="close">x</span>
    <p class="title_modal_div"><?php print($www_i_programy_do_portfolio[$k]['tytul']); ?></p>
	<img src="pliki_serwisu/zrzuty_wykonanych_serwisow_www_duze/<?php print($name_image_big); ?>" width="700"></img>
	<br>
  </div>
</div>

<?php
}
?>
	
<?php print($www_i_programy_do_portfolio[$k]['nowe_linie_przed_tytulem']); ?>
<div class="div_nadrzedny"  style="display:block;">
<span class="tytul_nazwa_wykonanego_serwisu">
<div class="div_tytul_nazwa_wykonanego_serwisu">
<?php  echo "<strong>".$www_i_programy_do_portfolio[$k]['tytul']."</strong><br />"; ?>
</div>
</span>
<br>
	<div class="div_lewy" style="<?php print($www_i_programy_do_portfolio[$k]['div_left_style']);  ?>">
		<img id="click_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>" src="<?php print($www_i_programy_do_portfolio[$k]['link_grafiki']); ?>" border="0">
	</div>
	<div class="div_prawy">
		<?php
		$www_i_programy_do_portfolio[$k]['tytul_opisu'];
		$www_i_programy_do_portfolio[$k]['link_opisu'];
		$www_i_programy_do_portfolio[$k]['opis'];
		
		/**  Istnieje tytul opisu oraz link opisu */
		if( !empty($www_i_programy_do_portfolio[$k]['link_opisu']) && !empty($www_i_programy_do_portfolio[$k]['tytul_opisu'])  ){
			?><a href="<?php print($www_i_programy_do_portfolio[$k]['link_opisu']); ?>" target="_blank">
			<img src="<?php print($www_i_programy_do_portfolio[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0">
			<?php print($www_i_programy_do_portfolio[$k]['tytul_opisu']); ?>
			</a>
			<br><br>
			<?php
		}
		/** Istnieje tytul opisu bez linku*/
		if( empty($www_i_programy_do_portfolio[$k]['link_opisu']) && !empty($www_i_programy_do_portfolio[$k]['tytul_opisu'])  ){
			
			?><img src="<?php print($www_i_programy_do_portfolio[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0"><?php
			print("<img src=''>".$www_i_programy_do_portfolio[$k]['tytul_opisu']."<br><br>");
			
		}
		?>
		<?php print($www_i_programy_do_portfolio[$k]['opis']); ?>
	</div>
</div>

<?php
}
//END foreach ($www_i_programy_do_portfolio as $k => $v) {
}

include 'footer.php';
?>
<script type="text/javascript">

<?php
/** Dynamics java script look array php array_data.php */
foreach ($www_i_programy_do_portfolio as $k => $v) {
   
	if($www_i_programy_do_portfolio[$k]['show']=="1"){
		
		if(!empty($www_i_programy_do_portfolio[$k]['name_image_big'])){
			
			?>
			var modal_contener_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?> = document.getElementById('modal_contener_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>');
			
			var modal_click_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?> = document.getElementById('click_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>');
			
			
			modal_click_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>.onclick = function() {
				modal_contener_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>.style.display = "block";
			}
			
			
			close_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>.onclick = function() {
				modal_contener_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>.style.display = "none";
			}
			
			
			window.onclick = function(event) {
				if (event.target == modal_contener_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>) {
					modal_contener_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>.style.display = "none";
				}
			}
			
			<?php
			
		}
	}
}

?>


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</SCRIPT>
</body>
</html>