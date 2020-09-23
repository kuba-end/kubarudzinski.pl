<?php
		session_start();

	

	if (!isset($_POST['mailsended']))
	{
		header('Location:zatrudnij-programiste-webowego');
		exit();
	}
	else
	{
		unset ($_SESSION['mailsended']);
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
	<meta name="description" content="Profesjonalne tworzenie witryn internetowych od a do z. Nie czekaj dłużej. Bądź widoczny w sieci, bądź widoczny wszędzie" />
	<meta name="keywords" content="webdeveloper, html, js, javascript, css, php, seo, tworzenie stron internetowych, wizytówka, strona firmowa, tania strona" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
	<link rel="icon" href="img/favicon.png" type = "image/x-icon"> 
	

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	




</head>
<body>

<!-- radial czyli tło pierwszego widoku-->
<div class="radial">

	
			<div>
				<a href="#" class="scrollup"></a>
			</div>

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
	<nav>
		<div class="mobile">
			<button class="hamburger">
				<span class="hamburger__box">
					<span class="hamburger__inner"></span>
				</span>
			</button>
			<div class="navigation">
				<ul class="navigation__list">
					<a href="zatrudnij-programiste-webowego"><li class="navigation__item" id="1">O mnie</li></a>
					<a href="zatrudnij-programiste-webowego"><li class="navigation__item" id="2">Oferta</li></a>
					<a href="html-css-js-php-bootstrap-seo-wordpress"><li class="navigation__item">Technologie</li></a>
					<a href="zatrudnij-programiste-webowego"><li class="navigation__item" id="4" >Kontakt</li></a>
				</ul>
			</div>
		</div>
		
		
			
		
		<div class="desktop">
			<div  class="bar">
				<a class="4" href="zatrudnij-programiste-webowego">
					<div id="a">
						Kontakt
					</div>
				</a>
				<a id="7" href="html-css-js-php-bootstrap-seo-wordpress" class="szerokibutton">
					<div id="b">
						Technologie
					</div>
				</a>
				<a id="6" href="zatrudnij-programiste-webowego">
					<div id="c">
						Oferta
					</div>
				</a>
				<a id="5" href="zatrudnij-programiste-webowego">
					<div id="d">
						O mnie
					</div>
				</a>
				<div style="clear:both;"></div>
				<br/><br/>
					
			</div>
		</div>
			<br/><br/><br/><br/><br/>
	</nav>

	<div class="slidecontainer">

	    <div id="slajd1">
	    	Wiadomość została wysłana. Dziękuję<span style="color:#ff7300;">!</span>
	    	<br/><br/>
	    	<a href="zatrudnij-programiste-webowego" style="text-decoration: underline; text-decoration-color: #ff7300; ">Powrót do strony głównej</a>
	    </div>
	</div>
	
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
						
					<input  type="text" name="email" placeholder="Adres e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Adres e-mail'"/><Br>
					<?php
						if (isset($_SESSION['e_email']))
						{
							echo '<div class="error">'.$_SESSION['e_email'].'</div>';
							unset($_SESSION['e_email']);
						}
					?>
					
					<textarea id="kontaktwiadomosc" rows="7" cols="38" name="message" placeholder="Treść wiadomośći" onfocus="this.placeholder=''" onblur="this.placeholder='Treść wiadomośći'"></textarea>
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