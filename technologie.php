<?php
		session_start();

	

	if (isset($_POST['email']))
	{
	//Udana walidacja//
		$wszystko_ok = true;
	//Poprawność name'a
		$name = $_POST['name'];
	//sprawdzenie długośći//
		if ((strlen($name)<3) || (strlen($name)>30))
		{
			$wszystko_ok=false; 
			$_SESSION['e_name']="Pole Imię musi zawierać od 3 do 30 znaków";
		}
	//sprawdzenie maila//
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_ok=false; 
			$_SESSION['e_email'] = "Podaj poprawny adres email";
		}

	//sprawdzenie wiadomośći
		$msg= $_POST['message'];

		if ((strlen($msg)>750))
		{
			$wszystko_ok=false; 
			$_SESSION['e_msg']="Maksymalna długość wiadomośći to 750 znaków";
		} 
	//Bot or not?
		$secret="6LeXzskZAAAAALFCHgZiEkEWLcR7i9gSn5iTdD6E";
		$check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$odpowiedz = json_decode($check);
		if ($odpowiedz->success==false)
			{
				$wszystko_ok=false; 
				$_SESSION['e_captcha'] = "Potwierdź, że nie jesteś botem!";
			}
		
		

		if ($wszystko_ok==true)
		{
			//Wysyłanie maila
			$to = 'kontakt@kubarudzinski.pl';
			$subject = 'Nowe zapytanie ofertowe od '.$name.' ('.$emailB.')';
			$headers .= "Content-Type: text/html; charset-utf-8";
			
		}

	}

	
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177901004-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-177901004-1');
	</script>

	<meta charset="utf-8" />
	<title>Kuba Rudziński</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	<link rel="stylesheet" href="/home/ciecierzyca/Desktop/www/kubarudzinski/fontello/css/fontello.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
	<link rel="icon" href="img/favicon.png" type = "image/x-icon"> 
	

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="jquery.scrollTo.min.js"></script>
	<script>
		jQuery(function($)
		{
			//zresetuj scrolla
			$.scrollTo(0);
			$('#1').click(function() { $.scrollTo($('#opisfrontendu'), 1000); });
			$('#t').click(function() { $.scrollTo($('#opisfrontendu'), 1000); });
			$('#2').click(function() { $.scrollTo($('#opisbackendu'), 1500); });
			$('#y').click(function() { $.scrollTo($('#opisbackendu'), 1500); });
			$('#3').click(function() { $.scrollTo($('#opisseo'), 2000); });
			$('#u').click(function() { $.scrollTo($('#opisseo'), 2000); });
			$('#4').click(function() { $.scrollTo($('#opiscms'), 2000); });
			$('#i').click(function() { $.scrollTo($('#opiscms'), 2000); });
			$('#5').click(function() { $.scrollTo($('#kontakt'), 2500); });
			$('.7').click(function() { $.scrollTo($('#kontakt'), 2500); });

			$('.scrollup').click(function() { $.scrollTo($('body'), 1500); });

		}
		);

			//pokaż podczas przewijania
			$(window).scroll(function()
			{
				if($(this).scrollTop()>300) $('.scrollup').fadeIn();
				else $('.scrollup').fadeOut();
			}


				);
	</script>
</head>
<body>
	

<div class="radial-d">
	<nav>
		<div>
			<a href="#" class="scrollup"></a>
		</div>
<!--Skopiowane z głównej strony, widok logo wraz z klasami mobile i lefttop(trzyma logo w lewym rokgu na nie mobile)-->
		<div class="lefttop" style="width:33%; height:180px;">
				<div id="imglogo">
					<a href="zatrudnij-programiste-webowego">
						<img src="img/check.svg" alt="kubarudzinski logo" class="logo"/>
					</a>
					<div id="logo">
						<a href="zatrudnij-programiste-webowego" class="linklogo">Kuba Rudziński</a>
					</div>
				</div>
			</div>
			<div class="mobile">	
				<div id="imglogo">
					<a href="zatrudnij-programiste-webowego" class="logo">
						<img src="img/check.svg" alt="kubarudzinski logo" class="logo"/>
					</a>
					<div id="logo">
						<a href="zatrudnij-programiste-webowego" class="linklogo">Kuba Rudziński</a>
					</div>
				</div>
			</div>
		<!--hamburger menu dla mobile-->
		<div class="mobile">
			<button class="hamburger">
				<span class="hamburger__box">
					<span class="hamburger__inner"></span>
				</span>
			</button>
			<div class="navigation">
				<ul class="navigation__list">
					<a href="zatrudnij-programiste-webowego#omnie"><li class="navigation__item">O mnie</li></a>
					<a href="zatrudnij-programiste-webowego#oferta"><li class="navigation__item">Oferta</li></a>
					<a href="html-css-js-php-bootstrap-seo-wordpress"><li class="navigation__item">Technologie</li></a>
					<a href="#"><li class="navigation__item 7" >Kontakt</li></a>
				</ul>
			</div>
		</div>
	</nav>
		<!-- classic bar for desktop-->	
		<div class="desktop">
			<div  class="bar">
				<a class="7" href="#">
					<div id="a">
						Kontakt
					</div>
				</a>
				<a id="7" href="html-css-js-php-bootstrap-seo-wordpress" class="szerokibutton">
					<div id="b">
						Technologie
					</div>
				</a>
				<a href="zatrudnij-programiste-webowego#oferta">
					<div id="c">
						Oferta
					</div>
				</a>
				<a  href="zatrudnij-programiste-webowego#omnie">
					<div id="d">
						O mnie
					</div>
				</a>
				<div style="clear:both;"></div>
				<br/><br/>
					
			</div>
		</div>
				<br/><br/>

		<br>
		<div class="desktop desktop1">
			<br><br><br>
		</div>
		<div id="technologieh3">	
			<h3><span style="color:#ff7300;">Technologie</span>, których używam</h3>
		</div>
	<div class="desktop1 desktop">
		<div class="slidecontainer">
			<a id="1" href="#">
				<div class="rectangle__m">
					<div id="inside__f">
					</div>
					<div id="html__m"><img src="img/html.png" alt="html logo"/>
					</div><br>
					<div id="css__m"><img src="img/css.png" alt="css logo"/>
					</div><br>
					<div id="js__m"><img src="img/js.png" alt="java script logo"/>
					</div>
				</div>
			</a>
			<a id="2" href="#">
				<div class="rectangle__m">
					<div id="inside__php">
					</div>
					<div id="php__m"><img src="img/php.png" alt="php logo"/>
					</div>
				</div>
			</a>
			<a id="3" href="#">
				<div class="rectangle__m">
					<div id="inside__seo">
					</div>
					<div id="seo__m"><img src="img/seo.png" alt="seo logo"/>
					</div>
				</div>
			</a>
			<a id="4" href="#">
				<div class="rectangle__m">
					<div id="inside__cms">
					</div>
					<div id="wp__m"><img src="img/wp.png" alt="wp logo"/>
					</div>
				</div>
			</a>
			<div style="clear:both"></div>
			
				<div id="front-end__m">Front-end
				</div>
				<div id="back-end__m">Back-end
				</div>
				<div id="seonapis__m">SEO
				</div>
				<div id="CMS__m">CMS
				</div>
			
		 </div>
	</div>
		<!-- WYJEBALEM PRZEZ PRZYPADEK WERSJE DESKTOP, przywrocic z localhost i dodac klasy mobile i desktop-->
<nav>
	<div class="tablet">
		<div class="slidecontainer">
			<a id="t" href="#">
				<div class="rectangle">
					<div class="inside">
					</div>
					<div id="html"><img src="img/html.png" alt="html logo"/>
					</div>
					<div id="css"><img src="img/css.png" alt="css logo"/>
					</div>
					<div id="js"><img src="img/js.png" alt="java script logo"/>
					</div>
				</div>
			</a>
			
			<a id="y" href="#">
				<div class="rectangle">
					<div class="inside">
					</div>
					<div id="php"><img src="img/php.png" alt="php logo"/>
						<div id="anotherphp">
							Back-end
						</div>
					</div>
				</div>
			</a>
			<a id="u" href="#">
				<div class="rectangle">
					<div class="inside">
					</div>
					<div id="seo">
						<div id="anotherseo">
							SEO
						</div>
					<img src="img/seo.png" alt="seo logo"/>
					</div>
				</div>
			</a>

			<a id="i" href="#">
				<div class="rectangle">
					<div class="inside">
					</div>
					<div id="wp"><img src="img/wp.png" alt="wp logo"/>
						<div id="anothercms">
							CMS
						</div>
					</div>
				</div>
			</a>
			<div style="clear:both"></div>
			
		 </div>
	</div>
	</nav>
</div>
<div class="radial-ds" id="opisfrontendu">
	<h2>Front<span style="color:#ff7300;">-</span>end</h2>
		<section class="technologytitle">
			Wszystko co widzisz gdy wchodzisz na jakąkolwiek stronę internetową to zasługa technologii front-endowych.<br>
		 	Stąd też ich nazwa, możesz wyobrazić sobie, że to górna warstwa strony www, która nakrywa wszystko inne.
		</section><br><br>
		<section>
			<h3>HTML</h3>
				<article>
					Absolutna podstawa w pracy webdevelopera. Tak ja autorzy książek posługują się swoimi ojczystymi językami do tworzenia dzieł,
					tak ja tworzę swoję używając HTML'a.<br>
					I tak jak klasyczne języki tak samo te komputerowe ciągle ewoluują, nie inaczej jest z HTML.<br><br>
					Jego obecna wersja, HTML 5, jest gwarantem działania wszystkich innych technologii wymienionych poniżej.
					Dzięki poprawnie napisanej stronie, Twoja pozycja w wyszukiwarkach wzrośnie, a klienci będą mogli Cię odnaleźć.<br><br>
					I co dalej?
				</article>
			<h3>CSS</h3>
				<article>
					Wygląd.<br><br> Nie ważne jak bardzo chcielibyśmy uniknąć oceniania książki po okładce, podświadomie wciąż to robimy. Dodając do tego kolejny nieco wyświechtany, choć niesamowicie trafny slogan, o tym że pierwsze wrażenie jest najważniejsze, mamy odpowiedź na to czy design strony ma znaczenie.<br><br>
					Użytkownik odwiedzający Twoją stronę, ocenia ją w ciągu kilku pierwszych sekund i decyduje czy na niej pozostać. Jeśli nie przejdziesz tego testu, nie ma znaczenia czy Twój produkt lub usługa to najlepszy wybór na rynku. Nikt się o tym nie przekona.
				</article>
			<h3>JavaScript</h3>
				<article>
					Wisienka na torcie. Tu dodamy jakąś małą interakcję z użytkownikiem, tu zrobimy animację, to się przesunie, to podskoczy, a tamto
					zrobi salto. Wszystkie te efekty odpowiednio użyte potrafią dać piorunujące efekty. Pamiętaj tylko, że użytkownik szuka tortu, nie wiśni.
				</article>
			<a class="7" href="#"><div class="calltoaction">Poproś o wycenę</div></a>
		</section>
</div>
<div class="radial-ds" id="opisbackendu">
	<h2>Back<span style="color:#ff7300;">-</span>end</h2>
		<section class="technologytitle">
			A to czego nie widzisz nazywamy technologiami back-endowymi.
		</section>
		<br><br>
			<h3>PHP</h3>
				<article>
				 	Działanie sklepów internetowych, blogów, forów oraz stron firmowych zawarta jest w skryptach PHP. To one sprawiają, że witryna jest interaktywna, jest to jednak inny rodzaj interaktywności niż przy Javascripcie.<br> W tamtym przypadku warstwa wizualna strony reagowała na działanie użytkownika, tutaj strona wykonuje działania takie jak wysłanie wiadomości e-mail, włożenie produktu do koszyka, zostawienie komentarza czy rejestracja i logowanie. Jednakże żadna z tych rzeczy nie zostanie wykonana jeżeli Twój potencjalny klient nie znajdzie Cię w internecie...
				</article>
			<a class="7" href="#"><div class="calltoaction">Napisz do mnie</div></a>
		

</div>
<div class="radial-ds" id="opisseo">
	<section>
		<h2>SEO</h2>
			<h3>Si I Co?</h3>
				<article>
					Search Engine Optimization, to krótko mówiąc optymalizacja strony i jej zawartości pod kątem botów indeksujących wyszukiwarek internetowych. Im strona lepiej zoptymalizowana, tym wyżej w wynikach wyszukiwarki.
				</article>
			<h3>Proste?</h3>
				<article>
					Nie do końca, wspomnijmy tylko, że firmy profesjonalnie zajmującę się pozycjonowaniem witryn życzą sobie za tą usługę nawet 50&nbsp;000 zł miesięcznie. Hej! Nie załamuj rąk, uważam że każdy szanujący siebie i swoich klientów webdeveloper powinien znać przynajmniej podstawowe zasady SEO, dzięki którym to właśnie twoja strona zostanie odnaleziona wśród tysięcy innych ofert.
				</article>
			<h3>Ja</h3>
				<article>
					Po mojej stronie leżą zdecydowanie aspekty techniczne. Tak jak budynki są wznoszone zgodnie ze sztuką budowlaną, tak strony powinny być pisane zgodnie z obowiązującymi standardami W3C. Ma to ogromne znaczenie dla SEO, a w efekcie dla Twoich wyników.
				</article>
			<h3>Ty</h3>
				<article>
					To jak budynek został zbudowany to jedna strona medalu, to jak go urządziłeś to druga. Treści na stronie muszą odpowiadać potrzebom klientów. Dla wyszukiwarek najważniejszy jest użytkownik, który z nich korzysta. Pomogę Ci zoptymalizować tekst w taki sposób aby był przyjazny zarówno dla wyszukiwarek jak i użytkowników.
				</article>
			<a class="7" href="#"><div class="calltoaction">Zapytaj o szczegóły</div></a>
	</section>

</div>
<div class="radial-ds" id="opiscms">
	<h2>CMS</h2>
		<h3>Czym jest?</h3>
			<article>
				CMS - Content Management System, a więc system zarządzania treścią. Najbardziej znanym narzędziem do budowania stron opartych na CMS jest Wordpress. Strony z tym systemem pozwalają w przyjazny sposób aktualizować lub dodawać nowe treści na stronie internetowej. Odpowiada za to edytor przypominający Worda, a sama czynność nie wymaga wiedzy programistycznej.
			</article>
		<h3>Zastosowania</h3>
			<article>
				Jest to technologia wprost stworzona dla blogerów i właścicieli sklepów internetowych, ciągła aktualizacja zawartości witryny sprawia, iż w tym przypadku statyczna strona internetowa nie zdałaby egzaminu.<br>
				Musisz jednak pamiętać, że żeby CMS miał istotny wpływ na Twoją pozycję w wyszukiwarce musisz aktualizować treści tzw. <i>content</i> na stronie systematycznie. W przeciwnym razie będzie to tylko droga zabawka, w dodatku niespełniająca swojej roli.
			</article>
</div>
	<!--   CONTACT  -->
	<section>
		<div id="dolstrony">
			<br/>
			<div class="mobile" id="skontaktujsie">Skontaktuj się ze mną</div>
			<div class="desktop" id="skontaktujsie2">Wyślij mi wiadomość</div>

			<div id="kontakt">
				<form method="post"><br>
					<input type="text" name="name" placeholder="Imię i nazwisko" onfocus="this.placeholder=''" onblur="this.placeholder='Imię i nazwisko'"/><br>
					<?php
						if (isset($_SESSION['e_name']))
						{
							echo '<div class="error">'.$_SESSION['e_name'].'</div>';
							unset($_SESSION['e_name']);
						}
					?>
						
					<input  type="email" name="email" placeholder="Adres e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Adres e-mail'"/><Br>
					<?php
						if (isset($_SESSION['e_email']))
						{
							echo '<div class="error">'.$_SESSION['e_email'].'</div>';
							unset($_SESSION['e_email']);
						}
					?>
					
					<textarea id="kontaktwiadomosc" rows="7" cols="38" name="message" placeholder="Treść wiadomośći" onfocus="this.placeholder=''" onblur="this.placeholder='Treść wiadomośći'" required></textarea>
					<?php
						if (isset($_SESSION['e_msg']))
						{
							echo '<div class="error">'.$_SESSION['e_msg'].'</div>';
							unset($_SESSION['e_msg']);
						}
					?>
					<div class="srodek"><div class="g-recaptcha" data-sitekey="6LeXzskZAAAAAG2RRauSd7FBD_ndIKkuzVrwSU3I"></div></div>
					<?php
						if (isset($_SESSION['e_captcha']))
						{
							echo '<div class="error">'.$_SESSION['e_captcha'].'</div>';
							unset($_SESSION['e_captcha']);
						}
					?>
						<br><br>
					<input id="kontaktwyslij" type="submit" value="Wyślij">
					<?php
						if ($wszystko_ok==true)
						{
							mail($to,$subject,$msg,$headers);
							$_SESSION['mailsended']=true;
							header('Location:wiadomosc-wyslana.php'); 
						}
					?>
						
				</form>
			</div>
			
			<div class="desktop">
				<div id="sociallinki">
						Skontaktuj się ze mną
					<article id="namiary">
						<h5>Telefon:<br> (+48) 507 534 154</h5>
						<h5>Adres e-mail: <span style=" text-shadow: 1px 1px black;">kontakt<span style="color:#ff7300">@</span>kubarudzinski.pl</span></h5>
							<br/>
						<div id=namiarycenter>Znajdź mnie również na:</div>
							<br/>
					</article>
					<div class="linkscontainer" id="fb">
						<a href="https://www.facebook.com/kubarudzinskidotpl" target="_blank"><i class="icon-facebook-rect"></i></a>
					</div>
					<div class="linkscontainer" id="instagram">
						<a href="https://www.instagram.com/kubarudzinski.pl/" target="_blank"><i class="icon-instagram"></i></a>
					</div>
					<div class="linkscontainer" id="linkedin">
						<a href="https://www.linkedin.com/in/kuba-rudzi%C5%84ski-64571618b/" target="_blank"><i class="icon-linkedin-squared"></i>
						</a>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear:both"></div>
			</div>
			
			<div class="mobile">
				<div id="sociallinki">
					<article id="namiary">
						<h5>Telefon:<br> (+48) 507 534 154</h5>
						<h5>Adres e-mail: <span style=" text-shadow: 1px 1px black;">kontakt<span style="color:#ff7300">@</span>kubarudzinski.pl</span></h5>
							<br/>
						<div id=namiarycenter>Znajdź mnie również na:</div>
							<br/>
					</article>
					<div class="linkscontainer" id="fb">
						<a href="https://www.facebook.com/kubarudzinskidotpl" target="_blank"><i class="icon-facebook-rect"></i></a>
					</div>
					<div class="linkscontainer" id="instagram">
						<a href="https://www.instagram.com/kubarudzinski.pl/" target="_blank"><i class="icon-instagram"></i></a>
					</div>
					<div class="linkscontainer" id="linkedin">
						<a href="https://www.linkedin.com/in/kuba-rudzi%C5%84ski-64571618b/" target="_blank"><i class="icon-linkedin-squared"></i>
						</a>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div style="clear:both"></div>
			</div>
	</div>

	</section>
	
	<footer>
		2020 &copy; Wszelkie prawa zastrzeżone. Projekt i wykonanie - Kuba Rudziński
	</footer>
			<script>
				
				const hamburger = document.querySelector('.hamburger');
				const nav = document.querySelector('.navigation');
				

				const handleClick = () => {
				hamburger.classList.toggle('hamburger--active');
				nav.classList.toggle('navigation--active');

				}
				hamburger.addEventListener('click', handleClick);
			</script>
</body>
</html>