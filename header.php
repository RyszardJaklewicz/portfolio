<?php 
/**
	Portfolio Ryszard Jaklewicz
	Autor: Ryszard Jaklewicz
	
	Pobieranie danych z array z pliku array_data.php
*/

?>

<div class="title"  style="display:block;">
Ryszard Jaklewicz - portfolio programisty
</div>
<p></p>

<?php

foreach ($menu_portfolio as $k => $v) {
	if($menu_portfolio[$k]['show']=="1"){
		?>
		<div class="cell_menu">
		<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif">
		<a href="<?php print($menu_portfolio[$k]['link_pozycji_menu']); ?>"><?php print($menu_portfolio[$k]['tytul_pozycji_menu']); ?></a>
		</div>
		<?php
	}
}
?>
<p></p>
<?php ?>