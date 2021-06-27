<?php

/**
	##################### MENU PORTFOLIO ################################
*/
$menu_portfolio = [];
$menu_portfolio = array(
	 'menu_1' => array(
					'show'=>'1',
					'tytul_pozycji_menu'=>'Home',
					'link_pozycji_menu'=>'index.php',
					),
					
	'menu_11' => array(
					'show'=>'1',
					'tytul_pozycji_menu'=>'O mnie',
					'link_pozycji_menu'=>'omnie.php',
					),
					
    'menu_2' => array(
					'show'=>'1',
					'tytul_pozycji_menu'=>'Opis aplikacji webowej Callisto',
					'link_pozycji_menu'=>'system_callisto.php',
					),
	'menu_3' => array(
					'show'=>'1',
					'tytul_pozycji_menu'=>'Program Windows do eksportu danych z Subiekta',
					'link_pozycji_menu'=>'system_eksport_subiekt/opis_systemu_eksport.html',
					),
	'menu_4' => array(
					'show'=>'1',
					'tytul_pozycji_menu'=>'Próbki kodu',
					'link_pozycji_menu'=>'probki_kodu.php',
					),
	'menu_5' => array(
					'show'=>'0',
					'tytul_pozycji_menu'=>'Test',
					'link_pozycji_menu'=>'aaaaaaaa.php',
					),
					
	'menu_99999' => array(
					'show'=>'0',
					'tytul_pozycji_menu'=>'Test',
					'link_pozycji_menu'=>'aaaaaaaa.php',
					),
); 


$omnie = [];
$omnie = array(
	'omnie_1' => array(
					'item'=>'1',
					'show'=>'1',
					'div_left_style'=>'height:700px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'O mnie',
					'opis_w_lewej_kolumnie'=>'
					',
					'tytul_opisu'=>'',
					'opis'=>'
					<br>
					Od ponad 15 lat zajmuję się zawodowo informatyką w tym programowaniem. 
					<p></p>
					W okresie prowadzenia działalności gospodarczej tworzyłem i zarządzałem sklepem internetowym (HTML, PHP, java script)
					Do ww sklepu samodzielnie napisałem aplikacje Windows eksportująca dane o towarach z bazy danych SQL Server programu Subiekt do baz danych MySQL. (Visual Basic - Visual Studio)
					W tym okresie zajmowałem się również instalacjami i utrzymaniem serwisów WWW opartych na CMS Joomla (instalacje Joomla, tworzenie, dostosowanie szablonów, tworzenie wtyczek do Joomla)
					<p></p>
					W okresie 2011r. - 2020r. Pracowałem na stanowisku programisty (HTML, PHP, js, MySQL), zajmowałem się m in. codziennym rozwojem i utrzymaniem webowej aplikacji finansowej "Callisto".
					Wykonywałem również instalacje szablonów CMSa Wordpress, konfiguracje i dostosowanie oraz brałem udział w projekcie tworzenia "wtyczki" do Wordpresa - kalkulator kredytowy.
					<p></p>
					Przygotowywałem i prowadziłem szkolenia informatyczne z obsługi oprogramowania (kilkaset godzin przeprowadzonych szkoleń)
					',
					'link_grafiki'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
); 






/**
	####################### PROBKI KODU #####################################
*/

$probki_kodu = [];
$probki_kodu = array(
	'probki_kodu_1' => array(
					'item'=>'',
					'code_position'=>'leady_fb',
					'show'=>'1',
					'div_left_style'=>'height:600px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'PHP fragment kod wysyłanie leadów do Facebooka',
					'tytul_opisu'=>'',
					'opis'=>'
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki kodu_2' => array(
					'item'=>'',
					'code_position'=>'clas_smeskom',
					'show'=>'1',
					'div_left_style'=>'height:500px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'PHP fragmenty klasy do wysyłania smsów z Callisto.',
					'tytul_opisu'=>'',
					'opis'=>'
					
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki_kodu_3' => array(
					'item'=>'',
					'code_position'=>'js_yui_1',
					'show'=>'1',
					'div_left_style'=>'height:600px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Fragment kodu js frameworka YUI2',
					'tytul_opisu'=>'',
					'opis'=>'
					
					',
					'link_grafiki'=>'',
					'width_image'=>'700',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki_kodu_4' => array(
					'item'=>'',
					'code_position'=>'python',
					'show'=>'1',
					'div_left_style'=>'height:930px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Kod Python',
					'tytul_opisu'=>'',
					'opis'=>'
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki_kodu_5' => array(
					'item'=>'',
					'code_position'=>'jquery_zend',
					'show'=>'1',
					'div_left_style'=>'height:930px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Kod jQuery z aplikacji ZendFramework',
					'tytul_opisu'=>'',
					'opis'=>'
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki_kodu_6' => array(
					'item'=>'',
					'code_position'=>'zend_controler',
					'show'=>'1',
					'div_left_style'=>'height:930px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Kod kontrolera aplikacji ZendFramework',
					'tytul_opisu'=>'',
					'opis'=>'
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki_kodu_7' => array(
					'item'=>'',
					'code_position'=>'mysql_trigger',
					'show'=>'1',
					'div_left_style'=>'height:930px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Kod triggera z bazy danych MySQL aplikacji finansowej Callisto',
					'tytul_opisu'=>'',
					'opis'=>'
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki_kodu_8' => array(
					'item'=>'',
					'code_position'=>'css',
					'show'=>'1',
					'div_left_style'=>'height:930px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Kod css z opcją responsywności strony',
					'tytul_opisu'=>'',
					'opis'=>'
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
	'probki_kodu_9' => array(
					'item'=>'',
					'code_position'=>'symfony_controler',
					'show'=>'1',
					'div_left_style'=>'height:930px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Kod kontrolera aplikacji Symfony',
					'tytul_opisu'=>'',
					'opis'=>'
					',
					'link_grafiki'=>'',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>''
					),
); 


/**
	####################### CALLISTO #####################################
*/

$opis_callisto_do_portfolio = [];
$opis_callisto_do_portfolio = array(
	 'callisto_1' => array(
					'item'=>'1',
					'show'=>'1',
					'div_left_style'=>'height:700px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Opis aplikacji Callisto - szczegółowy opis',
					'tytul_opisu'=>'Aplikacja webowa Callisto do obsługi spraw kredytowych sieci franczyzowych.',
					'opis'=>'
					W latach 2011 - 2020 pracowałem w firmie bazy.danych na stanowisku programisty. Zajmowałem sie biezącym utrzymaniem i rozwojem aplikacji finansowej CALLISTO.<br><br>
					<img src="pliki_serwisu/zrzuty_callisto/callisto_logo.jpg"><br>
					<b>Wybrana funkcjonalność aplikacji Callisto:</b><br><br>
					
					
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					<b>Tworzenie wniosków kredytowych i wysyłanie ich do systemu informatycznego Getin Banku</b> (web service)
					<br><br>
					<a href="system_callisto_procesowanie_spraw.php">Patrz zrzuty procesowanie spraw kredytowych</a><br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					<b>Zarządzanie wnioskami kredytowymi z opcją wypłaty w Banku Pocztowym.</b> Wymiana informacji z systemem informatycznym Banku Pocztowego<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Wykaz produktów finansowych obsługiwanych przez system Callisto<br><br>
					
					<a href="system_callisto_zarzadzanie_placowkami.php">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Zarządzanie siecią placówek oferujących produkty finansowe (kredyty bankowe, pożyczki krótkoterminowe)
					</a>
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Zarządzanie użytkownikami sieci sprzedaży<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Przechowywanie i wyszukiwanie spraw kredytowych bieżących i archiwalnych<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Generowanie prezentacja statystyk<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Generowanie PDFów przez Callisto<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Eksportowanie danych do formatu CSV w Callisto<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Java script w  Callisto
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_ekran_glowny_rozwiniete_menu/callisto_ekran_glowny_menu_getin_700px.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'bazy_danych_wordpress_zrzut_www_duzy_jpg'
					),
    'callisto_2' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:400px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Callisto',
					'tytul_opisu'=>'<b>Obsługa spraw kredytowych wysyłanych przez web service do GetinBanku</b>.',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Zakładanie nowych spraw kredytowych w celu wysłania do GetinBanku<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Wprowadzanie do sprawy kredytowej szczegółowych danych kredytobiorcy (imię, nazwisko, adres, pesel, nip, adresy, źródła dochodów, skany niezbędnych dokumentów etc.)<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Wyświetlanie, wyszukiwanie spraw kredytowych na etapie procesowania i po. Wyszukiwanie wg wybranych kryteriów.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Edytowanie sprawy kredytowej podczas procesu procesowania (reagowanie na komentarze banku, dodawanie niezbędnych skanów dokumentów etc).
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Wykaz kredytów do wypłaty w Banku Pocztowym.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Przeglądanie statystyk (np sprzedaży placówek).
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> i inne.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_ekran_glowny_rozwiniete_menu/callisto_menu_getin.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_3' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:400px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Callisto',
					'tytul_opisu'=>'<b>Obsługa produktów parabankowych "Pożyczka na chwilę"</b>.',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Tworzenie nowych spraw "Pożyczka na chwilę".
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Wprowadzanie danych klientów ubiegających się o pożyczkę.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Przechowywanie, przeglądanie, wyszukiwanie spraw kredytowych w ramach Pożyczki na chwilę
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Administracja smsami jakie system wysyła do klientów.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Tworzenie, przeglądanie zestawień, statystyk.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Inne.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_ekran_glowny_rozwiniete_menu/callisto_menu_chwilowki.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_4' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:260px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Callisto - Obsługa produktów bankowych "Marka"',
					'tytul_opisu'=>'<b>Obsługa produktów bankowych "Marka"</b>.',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Zakładanie w systemie wniosków o pożyczkę "Marka".
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Wprowadzanie danych klientów ubiegających się o pożyczkę.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Przechowywanie, przeglądanie, wyszukiwanie spraw kredytowych w ramach Pożyczki na chwilę
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Administracja smsami jakie system wysyła do klientów.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Tworzenie, przeglądanie zestawień, statystyk.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Inne.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_ekran_glowny_rozwiniete_menu/callisto_menu_marka.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_5' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:260px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Callisto -  administracja',
					'tytul_opisu'=>'<b>Administracja aplikacją Callisto.</b>.',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Zakładanie nowych placówek sprzedaży, ustalanie uprawnień placówek.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Edycja danych placówek.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Dodawanie nowych pojedyńczych użytkowników, nadawanie uprawnień użytkownikom.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Edycja ogłoszeń.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Edycja innych danych występujących w aplikacji.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_ekran_glowny_rozwiniete_menu/callisto_menu_administracja.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
					
	'callisto_99999' => array(
					'show'=>'0',
					'div_left_style'=>'height:px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Callisto',
					'tytul_opisu'=>'<b>dsfdsffd ds dsf dfds fdsfds</b>.',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					aaaaa.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					bbbbb.
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					ccccc
					<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					dddddd
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_ekran_glowny_rozwiniete_menu/callisto_menu_chwilowki.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
); 

/**
	##################################################################################################################################
	################################ CALLISTO - PROCESOWANIE SPRAW
*/

$opis_callisto_do_portfolio_procesowanie_spraw = [];
$opis_callisto_do_portfolio_procesowanie_spraw = array(
	'callisto_procesowanie_spraw_1' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:600px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Callisto - Procesowanie spraw kredytowych',
					'tytul_opisu'=>'',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Oprogramowanie Callisto łączy się poprzez web service z systemem banku i krokowo procesuje (wysyła i odbiera ) dane dotyczące konkretnej składanej w banku sprawy kredytowej.
					<br><br>
					Poniżej przykładowe zrzuty wizarda służącego do procesowania spraw kredytowych do banku
					<br><br>
					Rozpoczęcie procesowania sprawy kredytowej.
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_procesowanie_spraw_getinbank/callisto_procesowanie_k2_start.jpg',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_procesowanie_spraw_2' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:500px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Widok wizarda procesowania sprawy kredytowej',
					'tytul_opisu'=>'<b>Widok wizarda procesowania sprawy kredytowej</b>.',
					'opis'=>'
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_procesowanie_spraw_getinbank/callisto_wizard_procesowanie_1.jpg',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_procesowanie_spraw_3' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:600px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Widok wizarda procesowania sprawy kredytowej.',
					'tytul_opisu'=>'Widok wizarda procesowania sprawy kredytowej. Tu na etapie otrzymania z webservice banku listy ofert kredytowych dla danej sprawy kredytowej.',
					'opis'=>'
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_procesowanie_spraw_getinbank/callisto_procesowanie_opcje_kredytowe.jpg',
					'width_image'=>'700',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_procesowanie_spraw_4' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:930px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Widok listy metod webservice.',
					'tytul_opisu'=>'Widok listy metod webservice wykorzystanych do procesowania danej sprawy kredytowej. Callisto posiada własną autorską bibliotekę webservice.',
					'opis'=>'
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_procesowanie_spraw_getinbank/callisto_procesowanie_metody_webservice.jpg',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_procesowanie_spraw_5' => array(
					'item'=>'',
					'show'=>'1',
					'div_left_style'=>'height:950px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Widok kodu XML w metodzie PobierzOpcje',
					'tytul_opisu'=>'Webservice Systemu Callisto.',
					'opis'=>'
					Webservice Systemu Callisto<br>
					Format danych - XML.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_procesowanie_spraw_getinbank/XML_metody_pobierz_opcje.jpg',
					'width_image'=>'',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
); 



/**
	##################################################################################################################################
	################################ CALLISTO - ZARZADZANIE PLACOWKAMI
*/

$opis_callisto_do_portfolio_zarzadzanie_placowkami = [];
$opis_callisto_do_portfolio_zarzadzanie_placowkami = array(
	'callisto_zarzadzanie_placowkami_1' => array(
					'item'=>'1',
					'show'=>'1',
					'div_left_style'=>'height:700px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'System Callisto - Opis funkcjonalności modułu placówki',
					'opis_w_lewej_kolumnie'=>'
					
					',
					'tytul_opisu'=>'',
					'opis'=>'
				W systemie Callisto istnieją placówki zajmujące się sprzedażą produktów finansowych. System umożliwia utworzenie sieci placówek w strukturze drzewiastej.
					Każda placówka może otrzymać uprawnienia do określonych produktów finansowych.
					<br><br>

					Program umożliwia m in:<br><br>

					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Dodanie i edycje placówki (nazwa, adres, nip, etc)<br><br>

					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Utworzenie dla placówki dokumentów związanych z włączeniem jej do sieci sprzedaży - wygenerowanie w PDF niezbędnych umów<br><br>

					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0"> Wprowadzanie danych niezbędnych do generowania dokumentów dla placówki<br><br>

Tworzenie placówek podrzędnych

Wprowadzanie w obrębie danej placówki użytkowników

Sporządzanie statystyk dla placówki (np szkodowość kredytów jakie sprzedała placówka, obroty placówki w czasie, ilość kredytów sprzedanych w czasie etc)
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_placowki/lista_placowek.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_zarzadzanie_placowkami_2' => array(
					'item'=>'1',
					'show'=>'1',
					'div_left_style'=>'height:700px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Karta dane pojedyńczej placówki',
					'tytul_opisu'=>'<b>Widok ekranu do edycji pojedyńczej placówki</b>.',
					'opis_w_lewej_kolumnie'=>'',
					'opis'=>'
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_placowki/Callisto_placowki_dane_placowki.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	'callisto_zarzadzanie_placowkami_3' => array(
					'item'=>'1',
					'show'=>'1',
					'div_left_style'=>'height:700px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Widok ekranu generowanie umów dla placówki.',
					'tytul_opisu'=>'',
					'opis_w_lewej_kolumnie'=>'',
					'opis'=>'
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_callisto/callisto_placowki/Callisto_placowki_generowanie_umow.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
	
); 


/**
	######################################## END CALLISTO ##########################################################
*/


$www_i_programy_do_portfolio = [];
$www_i_programy_do_portfolio = array(
	 'serwis_new_1' => array(
					'show'=>'1',
					'div_left_style'=>'height:500px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW firmy bazy.danych - CMS Wordpress',
					'tytul_opisu'=>'Serwis WWW firmy bazy.danych - CMS Wordpress',
					'opis'=>'
					Wykonane prace:<br>
					Instalacja szablonu Advolix, dostosowanie szablonu, wprowadzenie danych.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/bazy_danych_wordpress_1_small.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'http://www.bazy.danych.com',
					'name_image_big'=>'bazy_danych_wordpress_zrzut_www_duzy_jpg'
					),
	'serwis_new_1_1' => array(
					'show'=>'1',
					'div_left_style'=>'height:250px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Kalkulator Leasingowy firmy CLS - CMS Wordpress',
					'tytul_opisu'=>'Kalkulator Leasingowy firmy CLS - CMS Wordpress',
					'opis'=>'
					Kalkulator jest odrębnym kodem PHP dodanym do Wordpresa jako strona Wordpresa posiadajaca
					własny wyróżnik ciąg znaków. Zmodyfikowany jest również cały kod HTML (inny szablon nagłówka i stopki niż domyślny w instalacji Wordpresa).
					To że ta niezależna strona posiadająca własny kod PHP i java script jest osadzona w Wordpresie można sprawdzić np w źródle strony
					patrz:<br>
					"https://cls.pl/wp-content/themes/cls/js/new_kalkulator/standard_fonts_metrics.js"<br>
					wp-content wskazuje na katalog w strukturze Wordpresa.<br>
					Odrębna strona stworzona poprzez utworzenie nowego pliku php w używanym motywie i wstawienie do niej kodu: Template Name: tu nazwa którą użyjemy w edycji strony
					jako Post Template
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/cls_kalkulator_leasingowy.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'http://www.cls.pl/kalkulator',
					'name_image_big'=>'Cls_kalkulator_kredytu_samochodowego_leasingu_jpg'
					),
    'serwis_1_33' => array(
					'show'=>'1',
					'div_left_style'=>'height:px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Aplikacja do pomiarów elektrycznych (Zend Framework 2)',
					'tytul_opisu'=>'Aplikacja do pomiarów elektrycznych (Zend Framework 2)',
					'opis'=>'
					Zakres wykonanych prac:<br>
					- wykonanie projektu bazy danych<br>
					- wykonanie poszczególnych modułów aplikacji<br>
					- wdrożenie aplikacji<br>
					- rozbudowa aplikacji<br>
					Użyte technologie:<br>
					- ZEND FRAMEWORK<br>
					- PHP,<br>
					- Java Script,<br>
					- Biblioteka jQuery<br>
					- Ajax<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_pomiary_elektryczne.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'pomiary_elektryczne_zrzut_www_duzy_jpg'
					),
    'serwis_1_22' => array(
					'show'=>'1',
					'div_left_style'=>'height:150px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'System zarządzania kredytami i pożyczkami Callisto',
					'tytul_opisu'=>'System zarządzania kredytami i pożyczkami Callisto',
					'opis'=>'
					Aplikacja tworzona w ramach pracy na stanowisku programisty PHP w firmie bazy.danych<br>
					Zakres wykonywanych prac:<br>
					- wykonanie projektu bazy danych<br>
					- wykonanie poszczególnych modułów aplikacji<br>
					- wdrożenie aplikacji<br>
					- rozbudowa aplikacji<br>
					Użyte technologie:<br>
					- ZEND FRAMEWORK<br>
					- PHP,<br>
					- Java Script,<br>
					- framework js Jahoo YUI 2 
					- Biblioteka jQuery<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/callisto_ekran_glowny_maly.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'system_callisto.php',
					'name_image_big'=>'callisto_ekran_glowny_zrzut_www_duzy_jpg'
					),
	'serwis_1_3' => array(
					'show'=>'1',
					'div_left_style'=>'height:180px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Aplikacja internetowa CRM firmy Medusoft / Framework Symfony',
					'tytul_opisu'=>'Aplikacja internetowa CRM firmy Medusoft',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/logo_symfony.jpg" border="0"><br>
					Zakres wykonanych prac:<br>
					- wykonanie projektu bazy danych<br>
					- wykonanie poszczególnych modułów aplikacji<br>
					- wdrożenie aplikacji<br>
					- rozbudowa aplikacji<br>
					Użyte technologie:<br>
					- Framework SYMFONY 1.4<br>
					- PHP,<br>
					- Java Script,<br>
					- Biblioteka jQuery<br>
					- Ajax<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_medusoft_crm.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'medusoft_crm_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_1_4' => array(
					'show'=>'1',
					'div_left_style'=>'height:px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW firmy Akademia Lekarza Rodzinnego',
					'tytul_opisu'=>'Serwis WWW firmy Akademia Lekarza Rodzinnego',
					'opis'=>'
					Zakres wykonanych prac:<br><br>
					-Wykonanie szablonu (templatki) dla Joomla! 1.5,<br>
					-Instalacja CMSa Joomla 1.5 na serwerze,<br>
					-Zaprojektowanie, napisanie modułu do rejestracji prenumeraty<br>
					-Instalacja modułu<br>
					Użyte technologie:<br>
					-PHP,<br>
					-Java Script,<br>
					-Biblioteka jQuery<br>
					Komponenty napisane dla Systemu Zarządzania Treścią JOOMLA 1.5.<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_alr.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'akad_lekarz_rodz_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_1_5' => array(
					'show'=>'1',
					'div_left_style'=>'height:px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW firmy Trinet',
					'tytul_opisu'=>'Serwis WWW firmy Trinet - <b>CMS Joomla! 1.5</b>',
					'opis'=>'
					Zakres wykonanych prac:<br>
					- wykonanie szablonu serwisu<br>
					- wykonanie grafik<br>
					- wykonanie komponentu do wyświetlania zakładek na podstawie kategorii i artykułów w bazie danych (Ajax)<br>
					Użyte technologie:<br>
					- PHP, java script, jQuery, Ajax<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_trinet.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'trinet_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_1_6' => array(
					'show'=>'1',
					'div_left_style'=>'height:180px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW firmy Medusoft - CMS Joomla! 1.5',
					'tytul_opisu'=>'Serwis WWW firmy Medusoft',
					'opis'=>'
					-Wykonanie szablonu (templatki) dla <b>CMS Joomla! 1.5,</b><br>
					-Instalacja CMSa Joomla 1.5 na serwerze,<br>
					-Zaprojektowanie, napisanie modułu wyświetlającego artykuły z wybranej kategorii w formie boxów<br>
					-Instalacja modułu<br>
					Użyte technologie:<br>
					-PHP,<br>
					-Java Script,<br>
					-Biblioteka jQuery<br>
					Komponenty napisane dla Systemu Zarządzania Treścią <b>JOOMLA 1.5</b>.<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_medusoft.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'medusoft_pl_zrzut_www_duzy_jpg',
					),
	'serwis_2_1' => array(
					'show'=>'1',
					'div_left_style'=>'height:400px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW firmy informatycznej Enterfs - Joomla! 1.5',
					'tytul_opisu'=>'Serwis WWW firmy informatycznej Enterfs - Joomla! 1.5',
					'opis'=>'
					Zakres wykonanych prac:<br>
					-Wykonanie szablonu (templatki) dla <b>Joomla! 1.5</b>,<br>
					-Instalacja CMSa Joomla 1.5 na serwerze,<br>
					-Zaprojektowanie, napisanie modułu wyświetlającego artykuły z wybranej kategorii w formie boxów<br>
					-Instalacja modułu<br>
					-instalacja i konfiguracja komponentu galerii o raz komponentu antyspamowego kaptcha<br>
					Użyte technologie:<br>
					-PHP,<br>
					-Java Script,<br>
					-Biblioteka jQuery<br>
					Komponenty napisane dla Systemu Zarządzania Treścią <b>JOOMLA 1.5</b>.<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_enterfs.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'enterfs_zrzut_www_duzy_jpg',
					),
	'serwis_2_2' => array(
					'show'=>'1',
					'div_left_style'=>'height:280px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW hotelu AdrianoSpa - Joomla! 1.5',
					'tytul_opisu'=>'Serwis WWW hotelu AdrianoSpa - Joomla! 1.5',
					'opis'=>'
					<strong>Zakres wykonanych prac:</strong><br><br>
					Modyfikacja szablonu serwisu z Joomla! 1.0 na Joomla! 1.5,
					<br>
					-Instalacja CMSa Joomla 1.5 na serwerze,<br>
					-Zaprojektowanie, napisanie komponentów,<br>
					-Instalacja komponentów<br>
					Użyte technologie:<br>
					-PHP,<br>-Java Script,<br>-Biblioteka jQuery<br>Komponenty napisane dla Systemu Zarządzania Treścią JOOMLA 1.5.<br>',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_adrianospa.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'adriano_spa_zrzut_www_duzy_jpg',
					),
	'serwis_2_3' => array(
					'show'=>'1',
					'div_left_style'=>'height:150px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW fundacji Arka - CMS Joomla! 1.5',
					'tytul_opisu'=>'Serwis WWW fundacji Arka - <b>CMS Joomla! 1.5</b>',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_arka.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'arka_zrzut_www_duzy_jpg',
					),
	'serwis_2_4' => array(
					'show'=>'1',
					'div_left_style'=>'height:520px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Komponenty do CMSa Joomla! 1.5 dla serwisu Kancelarii Patentowej',
					'tytul_opisu'=>'Komponent do Serwisu Kancelarii Patentowej służący do wyceny i zgłaszania nowego znaku towarowego.',
					'opis'=>'
					Zakres wykonanych prac:<br>-Modyfikacja szablonu serwisu z Joomla! 1.0 na Joomla! 1.5,<br>
					-Instalacja CMSa Joomla 1.5 na serwerze,<br>
					-Zaprojektowanie, napisanie komponentów,<br>
					-Instalacja komponentów<br><br>
					Użyte technologie:<br>
					-PHP,<br>
					-Java Script,<br>
					-Biblioteka jQuery<br>
					Komponenty napisane dla Systemu Zarządzania Treścią JOOMLA 1.5.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/kancelaria_patent_zrzut_1.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'kancelariapatentowa_zrzut_www_duzy_jpg',
					),
	'serwis_2_5' => array(
					'show'=>'1',
					'div_left_style'=>'height:300px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW firmy Lanre - CMS Joomla! 1.5',
					'tytul_opisu'=>'Serwis WWW firmy Lanre.',
					'opis'=>'
					Serwis wykonany w oparciu o System Zarządzania Treścią JOOMLA 1.5.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_lanre.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'lanre_zrzut_www_duzy_jpg',
					),
	'serwis_2_6' => array(
					'show'=>'1',
					'div_left_style'=>'height:350px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Komponenty do CMSa Joomla! 1.5 dla serwisu Bez Zusu.',
					'tytul_opisu'=>'Komponent do Serwisu Bez Zusu służący do obliczania opłaty za szkolenie oraz do zapisywania się na szkolenia organizowane przez firmę.',
					'opis'=>'
					Zakres wykonanych prac:<br><br>
					-Zaprojektowanie, napisanie komponentu<br>
					-Instalacja komponentu<br>
					Użyte technologie:<br>
					-PHP,<br>
					-Java Script,<br>
					-Biblioteka jQuery<br>
					Komponent napisany dla Systemu Zarządzania Treścią JOOMLA 1.5.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/bez_zusu_www_zrzut.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'#',
					'name_image_big'=>'bezzusu_zrzut_www_duzy_jpg',
					),
	
						
	'serwis_3_1' => array(
					'show'=>'1',
					'div_left_style'=>'height:250px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW firmy Matiar - CMS Joomla! 1.5',
					'tytul_opisu'=>'Serwis WWW firmy Matiar.',
					'opis'=>'Serwis wykonany w oparciu o System Zarządzania Treścią <b>JOOMLA 1.5.</b>',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_matiar.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'matiar_zrzut_www_duzy_jpg',
					),
	'serwis_3_2' => array(
					'show'=>'1',
					'div_left_style'=>'height:230px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Projekt serwisu dla pewnego pałacu.',
					'tytul_opisu'=>'Projekt serwisu WWW.',
					'opis'=>'Serwis wykonany w oparciu o System Zarządzania Treścią <b>JOOMLA 1.5</b>',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_projekt_palac.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'zrzut_www_projekt_palac_jpg',
					),
	'serwis_3_3' => array(
					'show'=>'1',
					'div_left_style'=>'height:250px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Projekt serwisu firmy consultingowej zajmującej się funduszami unijnymi - CMS Joomla!.',
					'tytul_opisu'=>'Projekt serwisu firmy consultingowej zajmującej się funduszami unijnymi.',
					'opis'=>'
					Zakres wykonanych prac:<br>
					-Wykonanie szablonu (templatki) dla <b>Joomla! 1.5</b>,<br>
					-Instalacja CMSa Joomla 1.5 na serwerze,<br>
					Użyte technologie:<br>
					-PHP,<br>
					-Java Script,<br>
					-Biblioteka jQuery<br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/trinet_fundusze_eu_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'trinet_funduszeue_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_3_4' => array(
					'show'=>'1',
					'div_left_style'=>'height:300px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW projektu szkoleniowego "Praca na własny rachunek" - CMS Joomla!.',
					'tytul_opisu'=>'Serwis WWW projektu szkoleniowego "Praca na własny rachunek".',
					'opis'=>'
					W ramach projektu przygotowałem i przeprowadziłem kilkaset godzin szkoleń z zakresu narzędzi informatycznych w prowadzeniu działalności gospodarczej.
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/cis_pnwr_zrzut_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'cis_pnwr_zrzut_www_duzy_jpg',
					),
	'serwis_3_5' => array(
					'show'=>'1',
					'div_left_style'=>'height:180px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy MM CONSULTING.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy MM CONSULTING.',
					'opis'=>'
					<p>Serwis oparty na skryptach PHP.<br /><br />Serwis wykonany w opraciu o System Zarządzania Treścią <strong>QUICK.CMS</strong></p>
					<p> </p>
					<p> </p>
					<p> </p>
					<p> </p>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_mmconsulting.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'mmconsulting_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_3_6' => array(
					'show'=>'1',
					'div_left_style'=>'height:250px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis WWW szkoły podstawowej w Dobrzeniu - CMS Joomla!.',
					'tytul_opisu'=>'Serwis WWW szkoły podstawowej w Dobrzeniu.',
					'opis'=>'Serwis wykonany w oparciu o System Zarządzania Treścią <b>JOOMLA 1.5</b>',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/zrzut_www_spdobrzen.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'spdobrzen_serwis_zrzut_www_duzy_jpg',
					),
					
					
	'serwis_4_1' => array(
					'show'=>'1',
					'div_left_style'=>'height:300px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy handlowej SPEED.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy handlowej SPEED.',
					'opis'=>'
					Strona oparta na skryptach PHP i bazie danych MySQL. 
					Strona zawiera m. in. katalog towarów oferowanych przez firmę oraz sklep internetowy.<br><br>
					<a href="#">
					<img src="pliki_serwisu/zdjecia_artykuly/logo_subiekt_www.jpg">
					Serwis oparty na Systemie Prezentacji i Sprzedaży Towarów CMS współpracującym z oprogramowaniem do automatycznego eksportu danych o towarach z programu magazynowego.<br><br>
					
					<b>Dane o towarach pobierane są z programu magazynowego insERT "SUBIEKT GT"</b>
					</a>
					<br><br>
					<a href="system_eksport_subiekt/opis_systemu_eksport.html" target="_blank">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" style="border: 0;" width="10" height="10" border="0">
					Zobacz opis aplikacji eksportującej dane magazynowe do bazy danych serwisu WWW.
					</a>
					
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/speed_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'speed_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_4_2' => array(
					'show'=>'1',
					'div_left_style'=>'height:300px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy handlowej AITI.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy handlowej AITI.',
					'opis'=>'
					Strona oparta na skryptach PHP i bazie danych MySQL. 
					Strona zawiera m. in. katalog towarów oferowanych przez firmę oraz sklep internetowy.<br><br>
					<a href="#">
					<img src="pliki_serwisu/zdjecia_artykuly/logo_subiekt_www.jpg">
					Serwis oparty na Systemie Prezentacji i Sprzedaży Towarów CMS współpracującym z oprogramowaniem do automatycznego eksportu danych o towarach z programu magazynowego.<br><br>
					<b>Dane o towarach pobierane są z programu magazynowego insERT "SUBIEKT GT"</b>
					</a>
					<br><br>
					<a href="system_eksport_subiekt/opis_systemu_eksport.html" target="_blank">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" style="border: 0;" width="10" height="10" border="0">
					Zobacz opis aplikacji eksportującej dane magazynowe do bazy danych serwisu WWW.
					</a>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_aiti.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'aiti_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_4_3' => array(
					'show'=>'1',
					'div_left_style'=>'height:180px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej hurtowni etykiet i materiałów do druku etykiet RAFMAG. ',
					'tytul_opisu'=>'Serwis www wrocławskiej hurtowni etykiet i materiałów do druku etykiet RAFMAG. ',
					'opis'=>'
					Strona oparta na skryptach PHP i bazie danych MySQL. Strona zawiera m. in. katalog towarów oferowanych przez firmę oraz sklep internetowy.<br><br>
					<a href="#">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" style="border: 0;" width="10" height="10" border="0">
					Serwis oparty na Systemie Prezentacji i Sprzedaży Towarów - CMS autorstwa firmy TRINET. Zobacz pełny opis
					</a><br><br>
					System Sprzedaży i Prezentacji Towarów CMS<br><br>
					<a href="#">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" style="border: 0;" width="10" height="10" border="0">
					zobacz zrzut panelu administracyjnego
					</a>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_rafmag.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'rafmag_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_4_4' => array(
					'show'=>'1',
					'div_left_style'=>'height:220px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy RONOX.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy RONOX.',
					'opis'=>'
					Serwis oparty na skryptach PHP i bazie danych MySQL. Serwis zawiera m. in. katalog noży i ostrzy technicznych firmy Martor oferowanych przez firmę RONOX oraz sklep internetowy.<br><br>
					<a href="#">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" style="border: 0;" width="10" height="10" border="0">
					Serwis oparty na Systemie Prezentacji i Sprzedaży Towarów - CMS mojego autorstwa. Zobacz pełny opis
					</a>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/ronox_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'ronox_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_4_5' => array(
					'show'=>'1',
					'div_left_style'=>'height:250px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy handlowej SKYNET.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy handlowej SKYNET.',
					'opis'=>'			
					Strona oparta na skryptach PHP i bazie danych MySQL. Strona zawiera m. in. katalog towarów oferowanych przez firmę oraz sklep internetowy.<br><br>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/skynet_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'skynet_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_4_6' => array(
					'show'=>'1',
					'div_left_style'=>'height:300px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www firmy MMLINE.',
					'tytul_opisu'=>'Serwis www firmy MMLINE.',
					'opis'=>'
					Serwis oparty na skryptach PHP i bazie danych MySQL.<br><br>
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif">
					Serwis oparty na <b>Systemie Prezentacji i Sprzedaży Towarów</b> - CMS mojego autorstwa. Zobacz pełny opis
					<br><br>
					<a href="/_USLUGI_INFORMATYCZNE/index.php/portfoliowww/84-portfolio-www/zrzuty-paneli-administracyjnych-do-portfolio/105">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" style="border: 0;" width="10" height="10" border="0">
					Zrzut panelu administracyjnego serwisu MMLINE
					</a>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_mmline.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'mmline_serwis_zrzut_www_duzy_jpg',
					),	
	'serwis_5_1' => array(
					'show'=>'1',
					'div_left_style'=>'height:180px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy handlowej EMCOM.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy handlowej EMCOM.',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif">
					Strona oparta na skryptach PHP i bazie danych MySQL. Strona zawiera m. in. katalog towarów oferowanych przez firmę, sklep internetowy oraz giełdę podzespołów komputerowych.
					Zawartość podstron serwisu jest edytowana poprzez system zarządzania treścią.<br><br>
					<a href="/_USLUGI_INFORMATYCZNE/index.php/portfoliowww/89-portfolio-www/system-sprzedazy-i-prezentacji-towarow-cms/150">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					<strong>Serwis oparty na Systemie Prezentacji i Sprzedaży Towarów - CMS mojego autorstwa (jako firma TRINET).<br> zobacz pełny opis</strong>
					</a>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/emcom_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'emcom_serwis_zrzut_www_duzy_jpg',
					),	
	'serwis_5_2' => array(
					'show'=>'1',
					'div_left_style'=>'height:180px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy handlowej MICROTECH.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy handlowej MICROTECH.',
					'opis'=>'
					Strona oparta na skryptach PHP i bazie danych MySQL. Strona zawiera m. in. katalog towarów oferowanych przez firmę oraz sklep internetowy.<br><br>
					<a href="/_USLUGI_INFORMATYCZNE/index.php/portfoliowww/89-portfolio-www/system-sprzedazy-i-prezentacji-towarow-cms/150">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					<strong>Serwis oparty na Systemie Prezentacji i Sprzedaży Towarów - CMS mojego autorstwa (jako firma TRINET).<br> zobacz pełny opis</strong>
					</a>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/microtech_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'microtech_zrzut_www_duzy_jpg',
					),	
	'serwis_5_4' => array(
					'show'=>'1',
					'div_left_style'=>'height:250px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej firmy informatycznej ANKOM.',
					'tytul_opisu'=>'Serwis www wrocławskiej firmy informatycznej ANKOM.',
					'opis'=>'
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Serwis WWW oparty na skryptach PHP i bazie danych MySQL. 
					Zawiera m. in. katalog towarów oferowanych przez firmę oraz sklep internetowy.<br><br>
					<a href="/_USLUGI_INFORMATYCZNE/index.php/component/content/?id=47&amp;Itemid=56">
					<img src="pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif" border="0">
					Serwis oparty na Systemie Prezentacji i Sprzedaży Towarów - CMS mojego autorstwa (jako firma TRINET).<br> zobacz pełny opis</a>
					',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_ankom.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'ankom_serwis_zrzut_www_duzy_jpg',
					),
	'serwis_5_5' => array(
					'show'=>'1',
					'div_left_style'=>'height:220px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Projekt serwisu firmy Arbico.',
					'tytul_opisu'=>'Projekt strony głównej serwisu firmy Arbico.',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/arbico_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'arbico_jpg',
					),
	'serwis_5_6' => array(
					'show'=>'1',
					'div_left_style'=>'height:180px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis wrocławskiej firmy STELMACH ELEKTRONIK.',
					'tytul_opisu'=>'Serwis wrocławskiej firmy STELMACH ELEKTRONIK.',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/stelmach_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu1'=>'portfolio/stelmach',
					'link_opisu'=>'',
					'name_image_big'=>'stelmach_elektronik_zrzut_www_duzy_jpg',
					),				
	'serwis_6_1' => array(
					'show'=>'1',
					'div_left_style'=>'height:230px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis Laboratorium Cyfrowego Kodak Express.',
					'tytul_opisu'=>'Serwis Laboratorium Cyfrowego Kodak Express.',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_kodak.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'cvc_kodakexpress_zrzut_www_duzy_jpg',
					),
	'serwis_6_2' => array(
					'show'=>'1',
					'div_left_style'=>'height:230px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej hurtowni płyt CDR - CVC. Strona prezentująca asortyment płyt CDR.',
					'tytul_opisu'=>'Serwis www wrocławskiej hurtowni płyt CDR - CVC. Strona prezentująca asortyment płyt CDR.',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_cdr.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'plytycdr_old_jpg',
					),
	'serwis_6_3' => array(
					'show'=>'1',
					'div_left_style'=>'height:200px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Strona WWW Szkoły Podstawowej nr 12 we Wrocławiu.',
					'tytul_opisu'=>'Strona WWW Szkoły Podstawowej nr 12 we Wrocławiu',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_sp12.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'sp12_zrzut_www_duzy_jpg',
					),
	'serwis_6_4' => array(
					'show'=>'1',
					'div_left_style'=>'height:200px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej hurtowni płyt CDR - CVC. Strona prezentująca asortyment płyt CDR.',
					'tytul_opisu'=>'Serwis www wrocławskiej hurtowni płyt CDR - CVC. Strona prezentująca asortyment płyt CDR.',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_plytycdr_new.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu1'=>'portfolio/cvc',
					'link_opisu'=>'',
					'name_image_big'=>'plytycdr_cvc_zrzut_ww_duzy_jpg',
					),
	'serwis_6_5' => array(
					'show'=>'1',
					'div_left_style'=>'height:230px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Strona www wykonana dla wrocławskiej firmy CVC.',
					'tytul_opisu'=>'Strona www wykonana dla wrocławskiej firmy CVC.</b>',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_cvc_tworzenie_www.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu'=>'',
					'name_image_big'=>'cvc_zrzut_www_duzy_jpg',
					),
	'serwis_6_6' => array(
					'show'=>'1',
					'div_left_style'=>'height:230px;',
					'nowe_linie_przed_tytulem'=>'',
					'tytul'=>'Serwis www wrocławskiej szkoły języka angielskiego AKCENT.',
					'tytul_opisu'=>'Serwis www wrocławskiej szkoły języka angielskiego AKCENT.',
					'opis'=>'',
					'link_grafiki'=>'pliki_serwisu/zrzuty_wykonanych_serwisow_www/www_akcent.jpg',
					'link_punkt_trojkatny'=>'pliki_serwisu/zdjecia_artykuly/punkt_trojkatny.gif',
					'link_opisu1'=>'portfolio/akcent',
					'link_opisu'=>'',
					'name_image_big'=>'akcent_serwis_zrzut_www_duzy_jpg',
					),
); 
?>