<div class="footer_contener">
	<p></p>
	<div class="center">
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
	</div>
</div>
<div class="footer_contener1">
	<div class="center">
	© 2021 Wszystkie prawa zastrzeżone - Ryszard Jaklewicz
	</div>
</div>